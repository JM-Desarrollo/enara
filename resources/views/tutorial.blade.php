@extends('master')  @section('titulo', 'Tutorial')   @section('contenido')
<h3 class="text-center">Tutorial del Juego</h3>
<hr>
<span>
    Bienvenido al mundo de Enara joven {{Auth::User()->name}}, lamento no poder estar presente para enseñarte todo lo que necesitas saber en estos momentos, pero estimo
    que con esta carta vas a lograr entender...siempre fuiste el mas inteligente de tu familia.
</span>

<!-- Cuadro para Nivel y Experiencia -->   
<div class="col-md-12">
    <div class="col-md-1"></div>

    <div class="col-md-2">
        <br />
        <img src="{{url('images/tutorial/nivel.JPG')}}" />
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-7 text-center">
        <span>
            <br />
            En esta seccion podras ver tu nivel y experiencia actual junto con el nivel necesario para poder pasar de nivel. El nivel maximo por el momento es de 50.
        </span>
    </div>

     <div class="col-md-1"></div>
</div>

<!-- Cuadro para Vida -->   
<div class="col-md-12">
    <div class="col-md-1"></div>

    <div class="col-md-2">
        <br />
        <img src="{{url('images/tutorial/vida.JPG')}}" />
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-7 text-center">
        <span>
            <br />
            Esta es tu vida actual, la cual se calcula a partir de tu <b>constitucion</b> y los objetos que tengas equipados que otorguen vida.
        </span>
    </div>

     <div class="col-md-1"></div>
</div>

<!-- Cuadro para Energia -->   
<div class="col-md-12">
    <div class="col-md-1"></div>

    <div class="col-md-2">
        <br />
        <img src="{{url('images/tutorial/energia.JPG')}}" />
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-7 text-center">
        <span>
            <br />
            Esta es tu stamina o energia, la cual se calcula a partir de tu <b>stamina</b> base y tu <b>constitucion</b>. La stamina la utilizas para poder realizar las misiones que te vayan mandando.
        </span>
    </div>

     <div class="col-md-1"></div>
</div>


<!-- Cuadro para Mana -->   
<div class="col-md-12">
    <div class="col-md-1"></div>

    <div class="col-md-2">
        <br />
        <img src="{{url('images/tutorial/mana.JPG')}}" />
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-7 text-center">
        <span>
            <br />
            Esta es tu cantidad total de mana, la misma se calcula segun tu <b>inteligencia</b>
        </span>
    </div>

     <div class="col-md-1"></div>
</div>
    
@endsection
