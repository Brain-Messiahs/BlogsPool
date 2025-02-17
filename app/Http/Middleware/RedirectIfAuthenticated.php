<?php

namespace App\Http\Middleware;

use Closure;
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
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('user')->check()) {
                return redirect('/user');
            }
            elseif (Auth::guard('author')->check()) {
                return redirect('/author/dashboard');
            }
             elseif (Auth::guard('admin')->check()) {
                return redirect('/admin/dashboard');
            }

        return $next($request);
    }
}
