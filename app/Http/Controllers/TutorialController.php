<?php

namespace App\Http\Controllers;
use App\User;
use App\Tutorial;
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
        return redirect('tutorial');
    
    }
    
}