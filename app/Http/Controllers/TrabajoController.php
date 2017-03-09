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

        if(Auth::User()->idJob == null){ 
        $trabajos = Trabajos::all();
        return view('trabajo' , ['trabajos' => $trabajos]);
        }
        Carbon::setLocale(config('app.locale'));
        $userJob = userJob::where('idUser', '=', Auth::User()->id)->first(); // Traigo la fila de UserJob correspondiente al Usuario conectado
        $trabajo = trabajos::findOrFail($userJob->idTrabajo);    // Traigo el trabajo
        //$fin = Carbon::createFromFormat('Y-m-d H:i:s', $userJob->fin)->toDateTimeString(); 
        //dd($userJob->fin);

        $fin =  Carbon::now();
        $fechaFin = $userJob->fin;

        return view('trabajo', [
                                'trabajo' => $trabajo,
                                'userJob' => $userJob,
                                'fechaActual' => Carbon::now(),
                                'finJob' => $fin,
                                'fechaFin' => $fechaFin
        ]);
    }

    public function asignar(Request $request){
        $datos = UserJob::where('idUser', '=' , Auth::User()->id)->first();
        $datos->idTrabajo = $request->idJob;                     
        $datos->duracion = $request->horas;
        $datos->fin = Carbon::now()->addHours($request->horas)->toDateTimeString();
        $datos->save(); 

        $user = User::findOrFail(Auth::User()->id);
        $user->idJob = 1;
        $user->save();

        return redirect('trabajo');
    }

    public function recompensa(Request $request){
        $userJob = userJob::where('idUser', '=', Auth::User()->id)->first(); // Traigo la fila de UserJob correspondiente al Usuario conectado
        $trabajo = trabajos::findOrFail($userJob->idTrabajo);    // Traigo el trabajo
        $recompensa = $trabajo->paga * $userJob->duracion;

        $userJob->idTrabajo = null;
        $userJob->fin = null;
        $userJob->duracion = null;
        $userJob->save();

        $user = User::where('id', '=', Auth::User()->id)->first();
        $user->idJob = null;
        $user->gold += $recompensa;
        $user->save();

        $titulo = "Recompensa de Trabajo";
        $mensaje = "Haz trabajado de una forma honorable y dura <b>" . Auth::User()->name . "</b> ! Te haz ganado esta recompensa";

        return redirect('trabajo')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $mensaje)
                                ->with('diamond', 0)
                                ->with('oro', $recompensa);
    }

    
}
