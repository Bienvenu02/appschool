<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ForcePasswordChange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Définis la durée maximale avant expiration du mot de passe (ex : 90 jours)
            $maxDays = (int) config('app.password_expiry_days');

            // Si la date n'existe pas encore, la définir à la date de création du compte

            $password_changed_at = $user->password_changed_at ?? $user->created_at;

            $daysSinceChange = Carbon::parse($password_changed_at)->diffInDays(now());

            if (($daysSinceChange >= $maxDays || $user->must_change_password) && !$request->is('verification-acces*')) {
                return redirect()->route('verification.acces');
            }
        }

        return $next($request);
    }
}
