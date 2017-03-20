<?php
use App\Tutorial;
use App\Raza;
use App\Item;
use App\Clase;
use App\Stats;
use App\Equipado;

function traerRazas()
{
    return Raza::All();
}

function traerClases()
{
    return Clase::All();
}

// Modificadores para aumentar el nivel de los stats //
function entrenarOroInt($stat)
{
    return ($stat * 275);
}

function entrenarOroFue($stat)
{
    return ($stat * 325);
}

function entrenarOroCar($stat)
{
    return ($stat * 515);
}

function entrenarOroAgi($stat)
{
    return ($stat * 418);
}

function entrenarOroCon($stat)
{
    return ($stat * 215);
}

function entrenarOroSta($stat)
{
    return ($stat * 2700);
}

///////////////////////////////////////////////////////
function statsPersonaje($id)
{
    $stats = Stats::where('idUser', '=', $id)->first();
    return ($stats);
}

function vidaMaxima($id)
{
    $stats = Stats::where('idUser', '=', $id)->first();
    $vidaMaxima = ($stats->constitucion * 50) + $stats->vidaExtra;
    
    return ($vidaMaxima);
}

function manaMaxima($id)
{
    $stats = Stats::where('idUser', '=', $id)->first();
    $manaMaxima = ($stats->inteligencia * 5) + $stats->manaExtra;
    
    return ($manaMaxima);
}

function energiaMaxima($id)
{
    $stats = Stats::where('idUser', '=', $id)->first();
    $energiaMaxima = ($stats->constitucion * 0.5) + $stats->energiaExtra + ($stats->stamina * 1.75);
    
    return ($energiaMaxima);
}

////////////////////////////////////////////////////////////
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
                        <b>(3/6) Tutorial de Armeria:</b> Conoce la tienda de armeria en Enara. <a href='armeriaTutorial'>Ingresa desde aqui</a>
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
    if($tutorial->trabajo && $tutorial->entrenamiento && $tutorial->armero && $tutorial->herrero && $tutorial->alquimista && $tutorial->sastre){
        $tutorial->estado = 0;
    }
    
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


function getItem($itemsInv){

    $itemsInv = explode(",", $itemsInv);
    
    //dd($itemsInv);
    return $itemsInv;
}

function traerItem($itemSelect){

    $itemSelect = Item::find($itemSelect);
    
    //dd($itemSelect);
    return $itemSelect;
}

function habilidadItem($hab){
    
    $hab = explode(',', $hab);
    $mensaje = "";

    $i = 0;
    while (!(empty($hab[$i+1]))) {
        $mensaje = $mensaje . "<b>" . $hab[$i] . ":</b> " . $hab[$i+1] . "<br /> ";
        $i = $i+2;
    }



    return $mensaje;
}

function getEquip(){
    return $equip = Equipado::where('idUser', '=', Auth::User()->id)->first();
}

function getImgEquip($item){
    $item = Item::findOrFail($item);
    $img = $item->img;
    return $img;
}

function getCalEquip($item){
    $item = Item::findOrFail($item);
    $img = $item->calidad;
    return $img;
}
