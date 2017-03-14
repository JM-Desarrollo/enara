<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class AdminController extends Controller
{
    public function crearNota(){
        
            return view('admin.nota.crear');
    
    }

    public function GuardarNota(Request $request){
        
        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $noticia->tipo = $request->tipo;
        $noticia->mensaje = $request->mensaje;
        $noticia->save();

            return redirect('/');
    
    }

}
