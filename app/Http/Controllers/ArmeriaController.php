<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ArmeriaController extends Controller
{
    public function index(){

        $escudos = Item::where('tipo', '=', 'escudo')->get();


        return view('armeria', ['escudos' => $escudos]);

    }
}
