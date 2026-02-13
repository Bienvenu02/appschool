<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\LoginHistory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExpireInactiveSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:expire-inactive-sessions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Met a jour l\'historique des connexions et supprime les sessions inactives';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Début du traitement...");

        // Récupérer l'historique des utilisateurs connectés depuis +24 heures
        // dont les sessions sont inactives
        $expiredSessionIds = DB::table('login_histories')
            ->whereNull('logged_out_at')
            ->where('logged_in_at', '<', now()->subHours(24))
            ->orderBy('logged_in_at', 'asc')
            ->pluck('session_id');

        if ($expiredSessionIds->isNotEmpty()) {
            // Mettre les status à "expired"
            foreach ($expiredSessionIds as $sessionId) {
                $lastLoginDate = LoginHistory::whereNotNull('logged_out_at')
                    ->latest('logged_in_at')
                    ->value('logged_in_at');

                DB::table('login_histories')
                    ->where('session_id', $sessionId)
                    ->update(['status' => 'expired', 'logged_out_at' => $lastLoginDate ?? now()]);
            }

            $this->info(count($expiredSessionIds) . " utilisateurs expirés.");
        } else {
            $this->info("Aucun utilisateur à expirer.");
        }


        // Supprimer les sessions inactives selon config('session.lifetime')        
        $lifetimeMinutes = config('session.lifetime_personnalized');
        $expirationTimestamp = now()->subMinutes($lifetimeMinutes)->timestamp;

        $deletedSessions = DB::table('sessions')
            ->where('last_activity', '<', $expirationTimestamp)
            ->delete();

        $this->info("$deletedSessions sessions supprimées.");

        $this->info("Traitement terminé.");

        return Command::SUCCESS;
    }
}
