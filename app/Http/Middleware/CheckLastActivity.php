<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lifetimeMinutes = config('session.lifetime_personnalized');

        // Convertit en secondes
        $timeout = $lifetimeMinutes * 60;

        $session = DB::table('sessions')
            ->where('user_id', Auth::id())
            ->where('ip_address', $request->ip())
            ->where('user_agent', $request->userAgent());

        $lastActivity = $session->first() ? $session->first()->last_activity : null;

        if ($lastActivity && (now()->timestamp - $lastActivity > $timeout)) {

            $session->delete();

            $login_history = DB::table('login_histories')
                ->where('user_id', Auth::id())
                ->whereNull('logged_out_at')
                ->where('ip_address', $request->ip())
                ->where('user_agent', $request->userAgent())
                ->orderBy('logged_in_at', 'desc');

            if ($login_history->first()) {
                $login_history->update([
                    'logged_out_at' => now(),
                    'status' => 'expired',
                ]);
            }

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/connexion')->with('error', 'Votre session a expiré.');
        }

        session(['last_activity' => now()->timestamp]);

        return $next($request);
    }
}
