<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use App\Models\Ecole;
use Illuminate\Support\Str;
use App\Models\LoginHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Notifications\VerificationConnectionMultiple;
use App\Http\Requests\Auth\changeForcePasswordRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('site.connexion');
    }

    public function doLogin(AuthRequest $request)
    {
        $email = $request->input('email');
        $key = Str::lower($email) . '|' . $request->ip();

        // Limiter à 5 tentatives toutes les 120 secondes
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->with('message', "Trop de tentatives. Réessayez dans $seconds secondes.");
        }

        $credentials = $request->validated();

        if (Auth::attempt($credentials, $request->filled('remember'))) {

            // Réussite : réinitialiser le compteur
            RateLimiter::clear($key);

            $request->session()->regenerate();

            $request->session()->put('annee_scolaire_en_cours', anneeScolaireEnCoursId());

            if (!Ecole::first()) {
                return redirect()->intended('/initialisation');
            }

            return redirect()->intended('/verification-acces');
        }

        // Échec : incrémenter le compteur
        RateLimiter::hit($key, 120); // expire après 120 secondes

        return back()->with('message', 'Identifiants incorrects.');
    }

    public function verificationAcces()
    {
        if (!Ecole::first()) {
            return redirect()->intended('/initialisation');
        }

        if (autreSessionExiste()) {
            $history = LoginHistory::where('user_id', Auth::id())
                ->where('status', 'active')
                ->oldest()
                ->first();

            if ($history) {
                $history->update([
                    'logged_out_at' => now(),
                    'status' => 'failed',
                ]);
            }
        }

        return view('admin.authentification.verification-acces', ['user' => Auth::user()]);
    }

    // Changer le mot de passe forcé pour la premiere connexion ou après un certain temps
    public function changeForcePassword(changeForcePasswordRequest $request)
    {
        // Mise à jour du mot de passe
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
            'password_changed_at' => now(),
        ]);

        return redirect()->intended(route('verification.acces'))->with('success', 'Mot de passe modifié avec succès.');
    }

    // Vue du formulaire de changement du mot de passe pour la premiere connexion ou après un certain temps
    public function changeFisrtPassword(changeForcePasswordRequest $request)
    {
        // Mise à jour du mot de passe
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
            'password_changed_at' => now(),
            'must_change_password' => 0,
        ]);

        return redirect()->intended(route('verification.acces'))->with('success', 'Mot de passe modifié avec succès.');
    }

    // Envoie le code de verification pour la connexion multiple
    public function connectionMultiple()
    {
        $user = Auth::user();

        if ($user) {

            $token = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $verification_token = Str::random(64);

            session()->put('verification_token', $verification_token);
            $user->update(['code' => $token]);

            $subject = $token . ' est votre code de vérification de l\'adresse email';
            $view = 'admin.emails.verificationConnectionMultiple';

            User::where('id', Auth::id())->first()->notify(new VerificationConnectionMultiple($token, $subject, $view));

            return redirect()->route('verification.connection.multiple', ['token' => $verification_token])
                ->with('status', 'Saisissez le code envoyé à votre adresse email.');
        }

        return redirect()->route('login');
    }

    // La vue pour verifier la connexion multiple avec le code recu par mail
    public function verificationConnectionMultiple($token)
    {
        $user = Auth::user();

        if (!$user || session()->get('verification_token') !== $token) {
            abort(404, 'Token invalide ou expiré.');
        }

        return view('admin.authentification.verificationConnectionMultiple', ['token' => $token]);
    }

    // Le traitement de la verification de la connexion multiple
    public function doVerificationConnectionMultiple(Request $request)
    {
        $user = Auth::user();

        $input_token = $request->input('verification_token');
        $input_code = $request->input('code');

        if (!$user || session()->get('verification_token') !== $input_token) {
            Auth::logout();
            $request->session()->invalidate();
        }

        if (!$request->session()->has('verification_attempts')) {
            $request->session()->put('verification_attempts', 0);
        }

        $attempts = $request->session()->get('verification_attempts');

        if ($attempts >= 2) {
            Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('login')->with('message', 'Vous avez dépassé le nombre de tentatives autorisées. Veuillez vous reconnecter.');
        }

        if ($user->code === $input_code) {

            User::where('id', Auth::id())->first()->update(['code' => null]);

            DB::table('sessions')
                ->where('user_id', $user->id)
                ->where('id', '<>', session()->getId())
                ->delete();

            session()->forget('verification_attempts');

            // Récupérer le dernier historique actif
            $old_history = LoginHistory::where('user_id', $user->id)
                ->where('status', 'active')
                ->oldest()
                ->first();

            if ($old_history) {
                $old_history->update([
                    'logged_out_at' => now(),
                    'status' => 'revoked',
                ]);
            }

            // Récupérer l'actuel historique actif
            $last_history = LoginHistory::where('user_id', $user->id)
                ->where('status', 'active')
                ->latest()
                ->first();

            if ($last_history) {
                $last_history->update([
                    'logged_out_at' => null,
                    'status' => 'active',
                ]);
            }

            return to_route('verification.acces');
        } else {
            session()->increment('verification_attempts');
            $chancesRestantes = 3 - session()->get('verification_attempts');
            return redirect()->back()->with([
                'noVerify' => 'Code erroné. Vous avez encore ' . $chancesRestantes . ' chances.',
            ]);
        }
    }

    // Choisir le site avant connexion
    public function doChoixSiteConnexion(Request $request)
    {
        $userSites = Auth::user()->sites->pluck('id')->toArray();

        $request->validate([
            'site_id' => 'required|in:' . implode(',', $userSites),
        ], [
            'site_id.in' => 'Le site sélectionné n\'est pas valide.',
        ]);

        // Enregistrer le site choisi dans la session
        session()->put('site_id', $request->input('site_id'));

        return to_route('verification.acces');
    }

    // Afficher le formulaire d'envoi de mail de reinitialisation de mot de passe
    public function forgotPassword()
    {
        return view('admin.authentification.forgot-password');
    }

    // Envoie de mail de reinitialisation de mot de passe
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ], [
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.exists' => 'Aucun compte trouvé avec cet email.',
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['success' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    // Formulaire de reinitialisation du mot de passe
    public function showResetForm(Request $request, $token)
    {
        $email = $request->query('email');

        $record = DB::table('password_reset_tokens')
            ->where('email', $email)
            ->first();

        if (!$email || !$record || !Hash::check($token, $record->token) || Carbon::parse($record->created_at)->addMinutes(60)->isPast()) {
            abort(403, 'Token invalide ou expiré.');
        }
        return view('admin.authentification.change-forgot-password', ['token' => $token]);
    }

    // Le traitement de la reinitialisation du mot de passe
    public function reset(ForgotPasswordRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, string $password) use ($request) {
                $user->password = Hash::make($password);
                $user->setRememberToken(Str::random(60));
                $user->save();

                // Protection session fixation
                $request->session()->regenerate();
            }
        );

        // Nettoyage strict du token utilisé
        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with(['success' => __($status)])
            : back()->withErrors(['email' => [__($status)]]);
    }

    // Deconnexion
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/connexion');
    }
}
