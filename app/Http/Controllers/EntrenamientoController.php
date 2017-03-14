<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Stats;

class EntrenamientoController extends Controller
{
    public function index(){

        $stats = Stats::where('idUser', '=', Auth::User()->id)->first();

       return view('entrenamiento', ['stats' => $stats]);
    }

    public function entrenar(Request $request){

        $stats = Stats::where('idUser', '=', Auth::User()->id)->first();
        $user = User::findOrFail(Auth::User()->id);
        $stat = $request->stat;
        $user->gold -= $request->oro;
        $stats->$stat ++;
        $user->save();
        $stats->save();

        return redirect('entrenamiento');
    }
}


        