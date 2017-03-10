<?php
use App\Tutorial;

function currentUser()
{
    return auth()->user();
}

// Modificadores para aumentar el nivel de los stats //
function entrenarOroInt()
{
    return (Auth::User()->inteligencia * 275);
}

function entrenarOroFue()
{
    return (Auth::User()->fuerza * 325);
}

function entrenarOroCar()
{
    return (Auth::User()->carisma * 515);
}

function entrenarOroAgi()
{
    return (Auth::User()->agilidad * 418);
}

function entrenarOroCon()
{
    return (Auth::User()->const * 215);
}

function entrenarOroSta()
{
    return (Auth::User()->stamina * 2700);
}

///////////////////////////////////////////////////////
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
    return ($int * 15);
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
                        <b>(1/6) Tutorial de Trabajo:</b> Conoce como funciona el sistema de trabajo en Enara. <a href='trabajoTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }

    if(!$tutorial->entrenamiento){
        $mensaje =  "
                        <b>(2/6) Tutorial de Entrenamiento:</b> Conoce como funciona el sistema de entrenamiento en Enara. <a href='entrenamientoTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }

    if(!$tutorial->armero){
        $mensaje =  "
                        <b>(31/6) Tutorial de Armeria:</b> Conoce como funciona el sistema de armeria en Enara. <a href='armeriaTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }

    if(!$tutorial->herrero){
        $mensaje =  "
                        <b>(4/6) Tutorial de Herreria:</b> Conoce como funciona el sistema de herreria en Enara. <a href='herreriaTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }

    if(!$tutorial->alquimista){
        $mensaje =  "
                        <b>(5/6) Tutorial de Alquimia:</b> Conoce como funciona el sistema de alquimia en Enara. <a href='alquimistaTutorial'>Ingresa desde aqui</a>
                    ";
        return ($mensaje);
    }

    if(!$tutorial->sastre){
        $mensaje =  "
                        <b>(6/6) Tutorial de Sastreria:</b> Conoce como funciona el sistema de sastreria en Enara. <a href='sastreTutorial'>Ingresa desde aqui</a>
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

function modal($t, $m, $o, $d){

    if ($o > 0) {
        $o= "<img src='". url('/images/personaje/oro.png') ."'/>" . $o;
    } else {
        $o = " ";
    }

    if ($d > 0) {
        $d= "<img src='". url('/images/personaje/diamond.png') ."'/>" . $d;
    } else {
        $d = " ";
    }
    

    $modal = "<div class='container'><div class='modal fade' id='myModal' role='dialog'><div class='modal-dialog'>
            <div class='modal-content'><div class='modal-header'><h4 class='modal-title text-center'>" . $t . "</h4></div><div class='modal-body'><p>"
            . $m . "</p></div><div class='modal-footer'><p class='modalRec'>Recompensa: " . $o . " " . $d ."</p> <button type='button' class='btn btn-default btn-enara' data-dismiss='modal'>Cerrar</button>
            </div></div></div></div></div>";

    
    

    return $modal;
}



