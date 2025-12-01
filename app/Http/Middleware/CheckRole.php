<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Cek apakah peran user (misalnya 'admin', 'user', 'manager') cocok dengan peran yang diminta.
        if ($user->role == $role) {
            return $next($request);
        }

        // Jika peran tidak cocok, arahkan ke halaman 'home' atau tampilkan error 403.
        return redirect('/home')->with('error', 'Akses ditolak. Anda tidak memiliki izin untuk halaman ini.');
        // Atau: abort(403, 'Unauthorized action.');
    }
}
