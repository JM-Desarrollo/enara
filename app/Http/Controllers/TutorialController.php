<?php

namespace App\Http\Controllers;
use App\User;
use App\UserJob;
use App\Tutorial;
use App\Stats;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index(){

            return view('tutorial');
    
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

    public function trabajo(){
        $titulo = "Tutorial de Trabajo (FALTA QUE SI TRABAJA NO PUEDA HACER OTRA COSA)";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        $oro = 500;
        $diamond = 5;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->trabajo = 1;
        $tutoriales->save();
        

        return redirect('trabajo')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }

    public function alquimista(){
        $titulo = "Tutorial de Pociones";
        $cuerpo = "EN CONSTRUCCION.";
        $oro = 1500;
        $diamond = 10;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->alquimista = 1;
        $tutoriales->save();
        

        return redirect('alquimista')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }

    public function armeria(){
        $titulo = "Tutorial de Armeria";
        $cuerpo = "Bienvenido a la tienda de armas de Enara! En esta tienda podras encontrar variedad de armas, dagas, mandobles, escudos y mucho mas! <br />
        Si necesitas comprar alguna de las armas. Si tienes un alto nivel de carisma conseguiras mejores precios.";
        $oro = 800;
        $diamond = 7;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->armero = 1;
        $tutoriales->save();
        

        return redirect('armeria')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }

    public function entrenamiento(){
        $titulo = "Tutorial de entrenamiento";
        $cuerpo = "Existen 6 maestros de entrenamiento, cada uno especializado en una rama (Fuerza, Agilidad, Constitucion, Energia e Inteligencia). Podras entrenar cada habilidad con ellos, pero cada uno te  pedira
        una determinada suma de dinero..u otros objetos.";
        $oro = 700;
        $diamond = 5;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->entrenamiento = 1;
        $tutoriales->save();
        

        return redirect('entrenamiento')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }

    public function herreria(){
        $titulo = "Tutorial de Herreria";
        $cuerpo = "EN CONSTRUCCION";
        $oro = 1000;
        $diamond = 5;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->herrero = 1;
        $tutoriales->save();
        

        return redirect('herreria')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }

    public function sastreria(){
        $titulo = "Tutorial de Sastreria";
        $cuerpo = "EN CONSTRUCCION.";
        $oro = 1500;
        $diamond = 10;

        $user = User::findOrFail(Auth::User()->id);
        $user->gold += $oro;
        $user->diamond +=$diamond;
        $user->save();

        $tutoriales = Tutorial::where('idUser', '=', Auth::User()->id)->first();
        $tutoriales->sastre = 1;
        $tutoriales->save();
        

        return redirect('sastreria')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo)
                                ->with('diamond', $diamond)
                                ->with('oro', $oro);
    }
    
}