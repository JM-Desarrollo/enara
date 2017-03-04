<?php
use App\Tutorial;

function currentUser()
{
    return auth()->user();
}

function vidaPersonaje($constitucion)
{
    return ($constitucion * 150);
}

function staminaPersonaje($stamina, $const)
{
    return ($stamina + ($const * 5));
}

function manaPersonaje($int)
{
    return ($int * 200);
}

function oroPersonaje($constitucion)
{
    return ($constitucion * 150);
}

function tutoriales()
{
    $user = Auth::User()->id;
    $tutorial = Tutorial::where('idUser', '=', $user)->first();

    if(!$tutorial->trabajo){
        $mensaje =  "
                        <b>Tutorial de Trabajo:</b> Conoce como funciona el sistema de trabajo en Enara. <a href='#'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }
    
    
}

function tutorialesActivos()
{
    $user = Auth::User()->id;
    $tutorial = Tutorial::where('idUser', '=', $user)->first();
    
    return !($tutorial->estado);
}