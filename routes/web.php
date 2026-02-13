<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Site\SiteController;
use App\Http\Controllers\Admin\Cycle\CycleController;
use App\Http\Controllers\Admin\Ecole\EcoleController;
use App\Http\Controllers\Admin\Serie\SerieController;
use App\Http\Controllers\Site\SiteController as Site;
use App\Http\Controllers\Admin\Classe\ClasseController;
use App\Http\Controllers\Admin\Groupe\GroupeController;
use App\Http\Controllers\Admin\Niveau\NiveauController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Cycle\AnneeSiteCycleController;
use App\Http\Controllers\Admin\Classe\AnneeSiteClasseController;
use App\Http\Controllers\Admin\Inscription\InscriptionController;
use App\Http\Controllers\Admin\Utilisateur\UtilisateurController;
use App\Http\Controllers\Admin\Initialisation\InitialisationController;


// Les routes pour le site
Route::get('/',  [Site::class, 'home'])->name('home');


// Les routes accessibles uniquement aux invités (non authentifiés)
Route::middleware('guest')->group(function () {

    // Les routes pour l'authentification
    Route::get('/connexion',  [AuthController::class, 'login'])->name('login'); // Vue pour la connection
    Route::post('/connexion', [AuthController::class, 'doLogin'])->name('login.post'); // Traitement pour se connecter

    // Mot de passe oublié
    Route::get('/mot-de-passe-oublie', [AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::post('/mot-de-passe-oublie', [AuthController::class, 'sendResetLinkEmail'])->name('send.email.password.forgot');
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'reset'])->name('password.renitialise.update');
});

// Les routes accessibles uniquement aux utilisateurs authentifiés
Route::middleware(['auth', 'check.last.activity'])->group(function () {

    // Les routes pour l'initialisation et la verification d'accès
    Route::get('/initialisation', [InitialisationController::class, 'initialisation'])->name('initialisation');
    Route::post('/initialisation', [InitialisationController::class, 'store'])->name('initialisation.store');

    // Verification de l'acces
    Route::get('/verification-acces', [AuthController::class, 'verificationAcces'])->name('verification.acces');

    // Forcer changement mot de passe apres un temps de non changement et pour une premiere connection
    Route::post('change-force-password', [AuthController::class, 'changeForcePassword'])->name('change.force.password');
    Route::post('change-first-password', [AuthController::class, 'changeFisrtPassword'])->name('change.first.password');

    // Les route pour la connection multiple
    Route::post('connexion-multiple', [AuthController::class, 'connectionMultiple'])->name('connection.multiple');
    Route::get('verification-connexion-multiple/{token}', [AuthController::class, 'verificationConnectionMultiple'])->name('verification.connection.multiple');
    Route::post('verification-connexion-multiple', [AuthController::class, 'doVerificationConnectionMultiple'])->name('do.verification.connection.multiple');

    // Choisir le site avant connexion
    Route::post('choix-site-connexion', [AuthController::class, 'doChoixSiteConnexion'])->name('do.choix.site.connexion');

    // Deconnexion
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Deconnexion

    Route::middleware(['force.password.change', 'check.active'])->group(function () {

        Route::resource('profile', ProfileController::class)->except(['index', 'create', 'destroy', 'show']);

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/user/form', [HomeController::class, 'create'])->name('users.create');

        Route::resource('ecole', EcoleController::class)->except(['create', 'edit', 'delete', 'store']);
        Route::resource('site', SiteController::class)->except(['create']);
        Route::resource('utilisateur', UtilisateurController::class)->except(['create']);
        Route::resource('groupe', GroupeController::class)->except(['create']);
        Route::resource('cycle', CycleController::class)->except(['create']);
        Route::resource('affectation-site-cycle', AnneeSiteCycleController::class)->except(['create']);
        Route::resource('niveau', NiveauController::class)->except(['create']);
        Route::resource('serie', SerieController::class)->except(['create']);
        Route::resource('classe', ClasseController::class)->except(['create']);
        Route::resource('affectation-site-classe', AnneeSiteClasseController::class)->except(['create']);
        Route::resource('role', RoleController::class)->except(['create']);
    });

    Route::resource('inscription', InscriptionController::class)->except('destroy');
    // Route::resource('payement', PayementController::class)->except(['destroy', 'show']);
    // Route::resource('eleve', EleveController::class)->except(['create', 'store', 'destroy']);

});
