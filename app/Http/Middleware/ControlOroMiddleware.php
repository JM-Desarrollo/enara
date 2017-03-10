<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ControlOroMiddleware
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
        if(Auth::User()->gold >= $request->oro){
            return $next($request);
        }

        return redirect('entrenamiento')->with('error', '<b>Error!</b> No posees el oro suficiente para mejorar tu nivel de '. $request->stat . '.');
        
    }
}
