<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Inventario;

class ControlCompraMiddleware
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

        if(!(Auth::User()->gold >= $request->oro)){
            return redirect('armeria')->with('error', '<b>Error!</b> No posees el oro suficiente para comprar el item');
        }

        // Traigo el inventario del usuario que acaba de comprar el item
        $inventario = Inventario::where('idUser', '=', Auth::User()->id)->first();

        // Transformo el string del inventario en un array
        $array = explode(',', $inventario->inventario); 


        for ($i=0; $i < ($inventario->capacidad * 2); $i = $i+2) { 
            
              if($array[$i] == null){
                    return $next($request);
                }   
        }

        return redirect('armeria')->with('error', '<b>Error!</b> No tienes espacio suficiente en tu inventario');

    }
}
