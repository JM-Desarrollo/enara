<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Stats;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
{
    public function index($id){

        $item = Item::where('id', '=', $id)->first();
        $stats = Stats::where('idUser', '=', Auth::User()->id)->first();
        $habilidades = unserialize($item->habilidades);



        foreach($habilidades as $nombreHab => $valor){
            $stats->$nombreHab += $valor;
        }
        $stats->save();

        return redirect('armeria');

    }
}
