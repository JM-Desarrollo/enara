<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    public function index(){

        return view('trabajo');
    }

    public function tutorial(){
        $titulo = "Tutorial de Trabajo";
        $cuerpo = "Para trabajar debes primero elegir el tipo de trabajo, segun lo que sea cuesta mas tiempo finalizarlo pero te dara mayores recomenpsas.";
        return redirect('trabajo')
                                ->with('titulo', $titulo)
                                ->with('mensaje', $cuerpo);
}
}


