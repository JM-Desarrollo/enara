<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Inventario;
use App\Stats;
use App\User;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
{
    public function index(Request $request){

        // Traigo el inventario del usuario que acaba de comprar el item
        $inventario = Inventario::where('idUser', '=', Auth::User()->id)->first();
        
        // Transformo el string del inventario en un array
        $array = explode(',', $inventario->inventario); 


        $band = true;

        for ($i=0; $i < ($inventario->capacidad * 2) + 1 ; $i = $i+2) { 
            
           if($band) {

              if($array[$i] == null){
                $array[$i] = intval($request->item);
                $array[$i+1] = 1;
                $band = false;
                }
           }
            
        }

        $array = implode(',', $array);  

        $inventario->inventario = $array;      

        $inventario->save();

        // Le descuento el valor del escudo del oro al usuario
        $user = User::findOrFail(Auth::User()->id);
        $user->gold -= $request->oro;
        $user->save();

        return redirect('armeria');

    }
}