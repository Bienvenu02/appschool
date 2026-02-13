<?php

use App\Models\Role;
use App\Models\Site;
use App\Models\AnneeScolaire;
use App\Models\Configuration;
use Illuminate\Support\Carbon;
use App\Models\AnneeScolaireSite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// Permet de verifier si l'utilisateur doit forcement changer ou non son mot de passe
if (!function_exists('doitChangerMotDePasse')) {
    function doitChangerMotDePasse($user = null): bool
    {
        // Si aucun utilisateur n'est passé, on prend celui connecté
        $user = $user ?? Auth::user();

        if (!$user) {
            return false;
        }

        // Récupération de la durée d’expiration depuis .env
        $maxDays = (int) config('app.password_expiry_days');

        // Si l'utilisateur n'a pas encore de date de changement de mot de passe
        $password_changed_at = $user->password_changed_at ?? $user->created_at;

        // calcule la difference de jour
        $daysSinceChange = Carbon::parse($password_changed_at)->diffInDays(now());

        return ($daysSinceChange >= $maxDays) || $user->must_change_password;
    }
}

// Verifie le nombre de sessio existante
if (!function_exists('autreSessionExiste')) {
    function autreSessionExiste()
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            $current_session_id = session()->getId();
            // Vérifie s'il y a d'autres sessions pour cet utilisateur
            $otherSessions = DB::table('sessions')
                ->where('user_id', $user_id)
                ->where('id', '<>', $current_session_id)
                ->get();
            // dd($otherSessions->count() > 0);
            return  $otherSessions->count() > 0;
        }
    }
}

// Verifie si l'utilisateur choisira son site avant connexion (non eleve ou tuteur)
if (!function_exists('utilisateurAdministratif')) {
    function utilisateurAdministratif()
    {
        $user = Auth::check() ? Auth::user() : null;
        if (!$user) return false;

        $rolesExclus = ['tuteur', 'eleve', 'instituteur', 'professeur']; // Rôles à exclure

        $rolesUtilisateur = $user->roles->map(fn($ru) => $ru->role->name);

        // Retirer les rôles exclus => garder seulement les rôles internes
        $rolesRestants = $rolesUtilisateur?->diff($rolesExclus);

        // Si des rôles restants existent → utilisateur interne
        return $rolesRestants?->isNotEmpty();
    }
}

// Verifie si l'utilisateur a un role
if (!function_exists('roleUtilisateurExiste')) {
    function roleUtilisateurExiste()
    {
        $user = Auth::check() ? Auth::user() : null;
        if (!$user) return false;
        
        return $user->roles?->pluck('name')->toArray()->isNotEmpty();
    }
}

// Verifie si l'utilisateur a plusieurs sites associes
if (!function_exists('plusieursSitesAssocies')) {
    function plusieursSitesAssocies()
    {
        $user = Auth::check() ? Auth::user() : null;
        if (!$user) return false;

        $sitesCount = $user->sites->count();

        return $sitesCount > 1;
    }
}

// Retourne l'id de l'année scolaire en cours
if (!function_exists('anneeScolaireEnCoursId')) {
    function anneeScolaireEnCoursId()
    {
        return Configuration::first()->annee_scolaire_en_cours;
    }
}

// Retourne le nom de l'année scolaire en cours
if (!function_exists('anneeScolaireEnCoursLibelle')) {
    function anneeScolaireEnCoursLibelle()
    {
        return anneeScolaireEnCoursId() ? AnneeScolaire::find(anneeScolaireEnCoursId())->libelle : null;
    }
}

// Retourne l'id du site en cours de connexion
if (! function_exists('siteIdSession')) {
    function siteIdSession()
    {
        return Session::get('site_id');
    }
}

// Retourne le nom du site en cours de connexion
if (! function_exists('siteSessionLibelle')) {
    function siteSessionLibelle()
    {
        return siteIdSession() ? Site::find(siteIdSession())->name : null;
    }
}

// AnneeScolaireSiteId
if (! function_exists('anneeScolaireSiteId')) {
    function anneeScolaireSiteId()
    {
        return AnneeScolaireSite::where('annee_scolaire_id', anneeScolaireEnCoursId())->where('site_id', siteIdSession())->first()->id ?? null;
    }
}

// les utilisateurs personnels (qui interviennent et ont un role dans l'école)
if (!function_exists('rolesUtilisateursPersonnels')) {
    function rolesUtilisateursPersonnels()
    {
        $pasRolesUtilisateursPersonnels = ['super admin', 'admin', 'eleve', 'tuteur'];
        if (in_array(Auth::id(), [1, 2])) {
            $pasRolesUtilisateursPersonnels = array_diff($pasRolesUtilisateursPersonnels, ['admin']);
        }
        return Role::whereNotIn('name', $pasRolesUtilisateursPersonnels)->pluck('name', 'id')->toArray();
    }
}
