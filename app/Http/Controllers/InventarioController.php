<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;
use App\User;
use App\Item;
use Illuminate\Support\Facades\Auth;

class InventarioController extends Controller
{
    public function index(){

        $inventario = Inventario::where('idUser', '=', Auth::User()->id )->first();

        return view('inventario', ['inv' => $inventario]);
    } // Fin index

    public function vender(Request $datos){

        // Le sumo el oro del item vendido al usuario
        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $datos->precioVenta;
        $user->save();

        // Traigo el inventario del usuario que acaba de vender el item
        $inventario = Inventario::where('idUser', '=', Auth::User()->id)->first();

        // Transformo el string del inventario en un array
        $array = explode(',', $inventario->inventario); 

        for ($i=0; $i < ($inventario->capacidad * 2); $i = $i+2){

            if($array[$i] == $datos['idVenta']){

                // Traigo el item en cuestion y verifico si es del tipo que tiene que ser
                $itemSelect = Item::where('id', '=', $datos->idVenta)->where('tipo', '=', $datos->tipoVenta)->first();

                 if($array[$i] == $datos->idVenta && $itemSelect->tipo == $datos->tipoVenta){
                        $array[$i] = null; 
                        $array[$i+1] = null;

                 } // fin if interno

            } // fin if


        } // fin ciclo for

        $array = implode(',', $array);  

        $inventario->inventario = $array;      

        $inventario->save();

        return redirect ('inventario');


    } // Fin vender

    

    
} // Fin Controlador
