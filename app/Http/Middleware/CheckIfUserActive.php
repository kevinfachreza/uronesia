<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIfUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if(Auth::user()->active)
        {
            return $next($request);
        }
        else
        {
            abort(401);
        }
    }
}
