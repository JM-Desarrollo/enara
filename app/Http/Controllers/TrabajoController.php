<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Trabajos;
use App\UserJob;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;


class TrabajoController extends Controller
{
    public function index(){

        if(!Auth::User()->idJob){ 
        $trabajos = Trabajos::all();
        return view('trabajo' , ['trabajos' => $trabajos]);
        }

        $userJob = UserJob::findOrFail(Auth::User()->id); // Traigo la fila de UserJob
        $trabajo = Trabajo::findOeFail($userJob->idJob); // Traigo el trabajo que esta realizando
    }

    public function asignar(Request $request){
        $datos = UserJob::where('idUser', '=' , Auth::User()->id)->first();
        $datos->idTrabajo = $request->idJob;                     
        $datos->duracion = $request->horas;
        $datos->inicio = Carbon::now()->toTimeString();
        $datos->fin = Carbon::now()->addHours($request->horas)->toTimeString();
        $datos->save(); 

        $user = User::findOrFail(Auth::User()->id);
        $user->idJob = 1;
        $user->save();

        return redirect('trabajo');
    }

    
}
