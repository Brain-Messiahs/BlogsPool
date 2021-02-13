<?php

namespace App\Http\Middleware;

use Closure;

class author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('author')->check()) {
            
                return redirect('/author/dashboard');
            }

        return redirect('/author/login');
    }