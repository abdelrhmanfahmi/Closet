<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class AdminValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $guard = null)
    {
        if(!auth()->guard($guard)->check()){
            return redirect('HiAdmin');
        }
        return $next($request);
    }
}
