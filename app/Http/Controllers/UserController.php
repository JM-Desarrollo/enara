<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Auth;
use App\Tutorial;
use App\UserJob;
use App\Stats;
use App\User;

class UserController extends Controller
{
    public function index(){
        
        $noticias = Noticia::orderby('created_at', 'desc')->take(5)->get();;

            return view('home', ['noticias' => $noticias]);
    
    }

    public function first(){

        $tutorial = new Tutorial();
        $tutorial->idUser = Auth::user()->id;
        $tutorial->save();

        $userJob = new UserJob();  
        $userJob->idUser = Auth::user()->id;
        $userJob->save();   

        $stats = new Stats();

        return redirect('tutorial');
    }

    public function newPlayer(){

        return view('newPlayer');
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



        return redirect('tutorial');
    }
    
}
