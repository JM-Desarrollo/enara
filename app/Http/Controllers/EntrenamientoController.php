<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class EntrenamientoController extends Controller
{
    public function index(){

       return view('entrenamiento');
    }

    public function entrenar(Request $request){

        $user = User::findOrFail(Auth::User()->id);
        $stat = $request->stat;
        $user->gold -= $request->oro;
        $user->$stat ++;
        $user->save();

        return redirect('entrenamiento');
    }
}
