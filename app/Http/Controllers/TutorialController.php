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

        $stats = new Stat();
        


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
        $titulo = "Tutorial de Alquimia";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('alquimista')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
    }

    public function armeria(){
        $titulo = "Tutorial de Armeria";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('armeria')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
    }

    public function entrenamiento(){
        $titulo = "Tutorial de Entrenamiento";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('entrenamiento')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
    }

    public function herrero(){
        $titulo = "Tutorial de Herreria";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('herrero')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
    }

    public function sastre(){
        $titulo = "Tutorial de Sastreria";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('sastre')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
    }
    
}