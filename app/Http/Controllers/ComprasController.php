<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Inventario;
use App\Stats;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
{
    public function index($id){

        $item = Item::where('id', '=', $id)->first(); // Traigo el item en cuesiton

        $inventario = Inventario::where('idUser', '=', Auth::User()->id)->first(); // Traigo el Inventario del usuario

        $array = explode(',', $inventario->inventario); // Transformo el string del inventario en un array
        $band = true;

        for ($i=0; $i < ($inventario->capacidad * 2) ; $i = $i+2) { 
            
           if($band) {

              if($array[$i] == null){
                $array[$i] = intval($id);
                $array[$i+1] = 1;
                $band = false;
                }
           }
            
        }

        $array = implode(',', $array);  

        $inventario->inventario = $array;      

        $inventario->save();

        return redirect('armeria');

    }
}
