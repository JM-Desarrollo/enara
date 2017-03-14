<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class UserController extends Controller
{
    public function index(){
        
        $noticias = Noticia::orderby('created_at', 'desc')->take(5)->get();;

            return view('home', ['noticias' => $noticias]);
    
    }
    
}
