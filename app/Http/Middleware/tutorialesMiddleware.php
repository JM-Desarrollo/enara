<?php

namespace App\Http\Middleware;

use Closure;

class TutorialesMiddleware
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
        if(tutorialesActivos()){
            return $next($request);
        }
        
        return abort(404);
    }
}
