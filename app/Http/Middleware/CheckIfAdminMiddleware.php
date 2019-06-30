<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIfAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
           if(Auth::user()->role != 'admin'){
                return redirect()->route('dashboard');
           }
        }
        return $next($request);
    }
}
