<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // Jika sudah login pada guard yang diberikan...
        if (Auth::guard($guard)->check()) {
            // Ganti '/dashboard' ke route atau URL tujuanmu
            return redirect()->route('ctm.page.home');
        }

        return $next($request);
    }
}
