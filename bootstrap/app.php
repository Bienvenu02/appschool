<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\CheckUserActive;
use App\Http\Middleware\CheckLastActivity;
use Illuminate\Console\Scheduling\Schedule;
use App\Http\Middleware\ForcePasswordChange;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )->withSchedule(function (Schedule $schedule) {
        $schedule->command('sessions:expire-inactive-sessions')
            ->hourly()
            ->withoutOverlapping()
            ->runInBackground();
    })
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'force.password.change' => ForcePasswordChange::class,
            'check.active' => CheckUserActive::class,
            'check.last.activity' => CheckLastActivity::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        
    })->create();
