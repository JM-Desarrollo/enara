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
                        <b>Tutorial de Trabajo:</b> Conoce como funciona el sistema de trabajo en Enara. <a href='trabajoTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }
    
    
}

function tutorialesActivos()
{
    $user = Auth::User()->id;
    $tutorial = Tutorial::where('idUser', '=', $user)->first();
    
    return ($tutorial->estado);
}

function modal($t, $m){

    $modal = "<div class='container'><div class='modal fade' id='myModal' role='dialog'><div class='modal-dialog'>
            <div class='modal-content'><div class='modal-header'><h4 class='modal-title text-center'>" . $t . "</h4></div><div class='modal-body'><p>"
            . $m . "</p></div><div class='modal-footer'><button type='button' class='btn btn-default btn-enara' data-dismiss='modal'>Cerrar</button>
            </div></div></div></div></div>";
    
    

    return $modal;
}



