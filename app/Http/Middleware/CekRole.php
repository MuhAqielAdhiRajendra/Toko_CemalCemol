<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // Perhatikan ada tambahan variabel $role di sini
    public function handle(Request $request, Closure $next, $role): Response
    {
        // 1. Ambil data user yang lagi login, terus cek kolom 'role'-nya
        // Kita bandingkan sama $role yang kita tulis di web.php (misal: admin)
        if ($request->user()->role !== $role) {
            
            // Kalau role-nya gak cocok, kita tendang/kasih error 403 (Forbidden)
            abort(403, 'Akses Ditolak! Anda bukan ' . $role);
        }

        // Kalau cocok, silakan lanjut
        return $next($request);
    }
}