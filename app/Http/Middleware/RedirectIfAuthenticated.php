<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if( Auth()->user()->isAdmin() )
            {
                return redirect(RouteServiceProvider::ADMIN);
            }

            
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
