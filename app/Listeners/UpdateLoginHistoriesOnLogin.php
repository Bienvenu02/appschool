<?php

namespace App\Listeners;

use App\Models\LoginHistory;
use Illuminate\Auth\Events\Login;

class UpdateLoginHistoriesOnLogin
{
    public function handle(Login $event)
    {
        $user = $event->user;

        LoginHistory::create([
            'user_id' => $user->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'session_id' => session()->getId(),
            'logged_in_at' => now(),
            'status' => 'active',
        ]);
    }
}
