<?php

namespace App\Http\Middleware;

use Closure;

class VisitarMd
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

        if(date('d')==24){
            abort(401);
        }
        return $next($request);
    }
}
