<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenamientoController extends Controller
{
    public function index(){

       return view('entrenamiento');
    }
}
