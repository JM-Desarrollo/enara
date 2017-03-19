<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Auth;
use App\Tutorial;
use App\UserJob;
use App\Stats;
use App\User;
use App\Inventario;

class UserController extends Controller
{
    public function index(){
        
        $noticias = Noticia::orderby('created_at', 'desc')->take(5)->get();;

            return view('home', ['noticias' => $noticias]);
    
    }


    public function newPlayer(){

        return view('newPlayer');
    }

    public function inventario(){

        $inventario = Inventario::where('idUser', '=', Auth::User()->id )->first();

        return view('inventario', ['inv' => $inventario]);
    }

    public function personaje(){

        $personaje = Stats::where('idUser', '=', Auth::User()->id)->first();

        return view('personaje', ['personaje' => $personaje]);
    }

    public function saveNewPlayer(Request $request){
        $idUsuario = Auth::User()->id;

        $user = User::findOrFail($idUsuario);
        $user->idRaza = $request['raza'];
        $user->idClase = $request['clase'];
        $user->save();
        
        $stats = new Stats();
        $stats->constitucion = $request['constitucion']; 
        $stats->inteligencia = $request['inteligencia'];
        $stats->fuerza = $request['fuerza'];
        $stats->agilidad = $request['agilidad'];
        $stats->carisma = $request['carisma'];
        $stats->idUser = $idUsuario;
        $stats->save();
        
        $stats = Stats::where('idUser', '=', $idUsuario )->first();
        $stats->vida = vidaMaxima($idUsuario);
        $stats->vidaMax = vidaMaxima($idUsuario);
        $stats->mana = manaMaxima($idUsuario);
        $stats->manaMax = manaMaxima($idUsuario);
        $stats->energia = energiaMaxima($idUsuario);
        $stats->energiaMax = energiaMaxima($idUsuario);
        $stats->save();

        $tutorial = new Tutorial();
        $tutorial->idUser = $idUsuario;
        $tutorial->save();

        $inventario = new Inventario();
        $inventario->idUser = Auth::user()->id;
        $inventario->save();

        $inventario = Inventario::where('idUser', '=', $idUsuario )->first();

        for($i=0; $i<($inventario->capacidad * 2); $i=$i+2){

            $array[$i] = null;
            $array[$i+1] = null;
        }

   
        $array = implode(',',$array);
        $inventario->inventario = $array;
        $inventario->save();

        $userJob = new UserJob();  
        $userJob->idUser = Auth::user()->id;
        $userJob->save(); 


        return redirect('tutorial');
    }
    
}
