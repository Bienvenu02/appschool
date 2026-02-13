<?php

namespace App\Listeners;

use App\Models\LoginHistory;
use Illuminate\Auth\Events\Logout;

class UpdateLoginHistoriesOnLogout
{
    /**
     * Handle the event.
     */
    public function handle(Logout $event): void
    {
        $user = $event->user;

        if ($user) {

            // Récupérer le dernier historique actif
            $history = LoginHistory::where('user_id', $user->id)
                ->where('status', 'active')
                ->latest()
                ->first();

            if ($history) {
                $history->update([
                    'logged_out_at' => now(),
                    'status' => 'terminated',
                ]);
            }
        }
    }
}
