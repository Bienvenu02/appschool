<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use App\Listeners\UpdateLoginHistoriesOnLogin;
use App\Listeners\UpdateLoginHistoriesOnLogout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Les événements de l'application et leurs listeners.
     */
    protected $listen = [
        Login::class => [
            // UpdateLoginHistoriesOnLogin::class
        ],

        Logout::class => [
            // UpdateLoginHistoriesOnLogout::class,
        ]
    ];

    public function boot(): void
    {
        //
    }
}
