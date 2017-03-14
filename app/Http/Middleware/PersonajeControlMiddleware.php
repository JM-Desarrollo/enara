<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Stats;

class PersonajeControlMiddleware
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
                
        $id = Auth::User()->id;
        $stats = Stats::where('idUser', '=', Auth::User()->id)->first();
        $vidaMax = vidaMaxima($id);
        $manMax = manaMaxima($id);
        $enerMax = energiaMaxima($id);

        if( ($stats->vidaMax != $vidaMax) || ($stats->manaMax != $manMax) || ($stats->energiaMax != $enerMax)){

            if($stats->vidaMax != $vidaMax){
                $stats->vidaMax = $vidaMax;
            }

            if($stats->manaMax != $manMax){
                $stats->manaMax = $manMax;
            }

            if($stats->energiaMax != $enerMax){
                $stats->energiaMax = $enerMax;
            }

            $stats->save();
        }
        
        return $next($request);
    }
}
