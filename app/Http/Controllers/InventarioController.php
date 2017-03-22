<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;
use App\User;
use App\Item;
use App\Stats;
use App\Equipado;
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

    public function equipar(Request $datos){

        // Traigo al usuario
        $user = User::findOrFail(Auth::User()->id);

        // Verifico que el usuario cumpla el nivel minimo para usar el item
                if ($user->level < $datos->levelMin) {
        
                   return redirect('inventario')->with('error', '<b>Error!</b> No posees el nivel suficiente para equiparte este item');
                   }
                
        // Verifico que la clase del usuario pueda usar ese item
        /* PENDIENTE DE VERIFICACION */

        // Traigo sus datos de items equipados
        $equipado = Equipado::where('idUser', '=', $user->id)->first();

        // Verifico en que posicion va el item que quiero equipar
        switch ($datos->tipoItem) {
            case 'escudo':
               $equiparEn = 'manoSecundaria';
                break;
        }

        // Verifico si tiene un item ocupado en esa posicion
        if(!(empty($equipado->$equiparEn))){    
            // Si tiene un item lo traigo
            $itemAnterior = Item::findOrFail($equipado->$equiparEn);
            // Reemplazo el item equipado por el nuevo item
            $equipado->$equiparEn = $datos->idItemEquipar;
            // Traigo las habilidades del item anterior
            $habItemAnterior = habilidadItem($itemAnterior->habilidades);

            // Traigo los Stats del usuario
            $stats = Stats::where('idUser', '=', $user->id)->first();

            // Recorro el usuario y le resto las habilidades que le dio el item
            foreach ($habItemAnterior as $habilidad => $valor) {
               $stats->$habilidad -= $valor;
            }

            dd("Llegue aca");
            // Traigo el Inventario del Usuario
             $inventario = Inventario::where('idUser', '=', $user->id)->first();

            // Transformo el string del inventario en un array
            $array = explode(',', $inventario->inventario); 

            // Recorro el inventario y si encuentro un hueco guardo el item anterior
            $band = true;
            for ($i=0; $i < ($inventario->capacidad * 2) + 1 ; $i = $i+2) { 
            
                if($band) {

                    if($array[$i] == null){
                        $array[$i] = intval($itemAnterior->id);
                        $array[$i+1] = 1;
                        $band = false;
                        }
                }   
            }

            // Vuelvo a transformar el inventario en un string y le cargo los  datos
            $array = implode(',', $array);  
            $inventario->inventario = $array;

        } /* fin  */
         
        // Recorro el usuario y le sumo las habilidades del nuevo item
            foreach ($habItemNuevo as $habilidad => $valor) {
                $stats->$habilidad += $valor;
            }

        // Guardo los cambios de las filas afectadas
        $equipado->save();
        $stats->save();
        $stats->save();
        $inventario->save();

        return redirect ('personaje');
    }
    

    
} // Fin Controlador
