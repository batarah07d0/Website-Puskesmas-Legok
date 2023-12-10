<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Agent;

class CheckMobileDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $agent = new Agent();

        // Jika pengguna mengakses dari perangkat mobile
        if ($agent->isMobile() || $agent->isTablet()) {
            // Sesuaikan dengan halaman atau URL yang ingin Anda arahkan
            return redirect('/');
        }

        return $next($request);
    }
}
