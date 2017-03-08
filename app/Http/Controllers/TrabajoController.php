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

    
}
