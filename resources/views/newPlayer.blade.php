@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{asset('images/registerImage.png')}}" />
            <div class="panel panel-default">
                <div class="panel-heading">Crear Personaje</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">{{ csrf_field() }}

                        <h2 class="text-center">Personaje</h2>
                        <h6 class="text-center">Completa la raza, clase y tire los dados para los atributos de tu personaje</h6>
                        <br />
                        <h4 class="text-center">Raza</h4>
                        <h6 class="text-center">Selecciona una de las razas disponibles</h6>
                        <div class="col-md-12">
                            @php $razas = traerRazas()  @endphp
                            @foreach($razas as $raza)
                            
                            <div class="col-md-3 text-center">
                                <img id="{{$raza->id}}" src="{{asset($raza->img)}}" onmouseover="visible({{$raza->name}})" onclick="seleccionarRaza({{$raza->id}}, {{$raza->name}})" onmouseout="ocultar({{$raza->name}})" />
                                <h6>{{$raza->name}}</h6>
                                <div id="{{$raza->name}}" class="divRaza">
                                    <h4>ATRIBUTOS</h4>
                                    <h6>Constitucion: {{$raza->constitucion}}</h6>
                                    <h6>Inteligencia: {{$raza->inteligencia}}</h6>
                                    <h6>Fuerza: {{$raza->fuerza}}</h6>
                                    <h6>Agilidad: {{$raza->agilidad}}</h6>
                                    <h6>Carisma: {{$raza->carisma}}</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <h4 class="text-center">Clase</h4>
                        <h6 class="text-center">Selecciona una de las clases disponibles. Las Clases te permitiran usar habilidades y equipamentos exclusivos</h6>
                        <div class="col-md-12">
                            @php $clases = traerClases()  @endphp
                            @foreach($clases as $clase)
                            <div class="col-md-2 text-center">
                            <img src="images/clase/{{$clase->img}}" onclick="seleccionarClase({{$clase->id}}, '{{$clase->name}}')" />
                            <h5>{{$clase->name}}</h5>               
                            </div>
                            @endforeach
                            <div class="col-md-12 text-center" ><span id="seleccionDeClase"><h5>Clase Seleccionada: Ninguna</h5></span><br /><br /></div>
                        </div>
                      
                                 
                            
                        
                        <div class="form-group">
                            <hr>
                            <h2 class="text-center">Estadisticas</h2>
                            <h6 class="text-center">Tira los dados para saber tus estadisticas base</h6>
                            <h6 class="text-center">
                                Los dados representan: <font color="red"><b>Constitucion</b></font> - <font color="blue"><b>Inteligencia</b></font> - <font color="green"><b>Fuerza</b></font> - <font color="orange"><b>Agilidad</b></font> - <font color="brown"><b>Carisma</b></font>
                            </h6>

                            <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2 fondoDado"><span class="margenDado" ><font color="red" id="dadoConstitucion">5</font></span></div>
                                            <div class="col-md-2 fondoDado"><span class="margenDado"><font color="blue" id="dadoInteligencia">5</font></span></div>
                                            <div class="col-md-2 fondoDado"><span class="margenDado"><font color="green" id="dadoFuerza">5</font></span></div>
                                            <div class="col-md-2 fondoDado"><span class="margenDado"><font color="orange" id="dadoAgilidad">5</font></span></div>
                                            <div class="col-md-2 fondoDado"><span class="margenDado"><font color="brown" id="dadoCarisma">5</font></span></div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        
                                        <div class="col-md-12"><br /><button type="button" onclick="tirarDados()" class="btn btn-warning">Tirar Dados</button></div>
                                    </div>

                                    
                            </div>
                        </div>

                    
                            <div class="col-md-12">
                                <input id="constitucion" type="hidden" name="constitucion" value="5">
                                <input id="inteligencia" type="hidden" name="inteligencia" value="5">
                                <input id="fuerza" type="hidden" name="fuerza" value="5">
                                <input id="agilidad" type="hidden" name="agilidad" value="5">
                                <input id="carisma" type="hidden" name="carisma" value="5">
                                <input id="raza" type="hidden" name="raza" value="1">
                                <input id="clase" type="hidden" name="clase" value="1"><br /><br />
                                <button type="submit" class="btn btn-success btn-block">Crear Personaje</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                    <script>
                        function tirarDados() {
                            $random1 = Math.round(Math.random()*(12-3)+parseInt(3));
                            $random2 = Math.round(Math.random()*(12-3)+parseInt(3));
                            $random3 = Math.round(Math.random()*(12-3)+parseInt(3));
                            $random4 = Math.round(Math.random()*(12-3)+parseInt(3));
                            $random5 = Math.round(Math.random()*(12-3)+parseInt(3));

                            document.getElementById("constitucion").value = $random1;
                            document.getElementById("dadoConstitucion").innerHTML = $random1;

                            document.getElementById("inteligencia").value = $random2;
                            document.getElementById("dadoInteligencia").innerHTML = $random2;

                            document.getElementById("fuerza").value = $random3;
                            document.getElementById("dadoFuerza").innerHTML = $random3;

                            document.getElementById("agilidad").value = $random4;
                            document.getElementById("dadoAgilidad").innerHTML = $random4;

                            document.getElementById("carisma").value = $random5;
                            document.getElementById("dadoCarisma").innerHTML = $random5;
                        }

                        function visible($raza){
                        
                        if($raza == Humano){document.getElementById("Humano").style.display = "block";}
                        if($raza == Elfo){document.getElementById("Elfo").style.display = "block";}
                        if($raza == Enano){document.getElementById("Enano").style.display = "block";}
                        if($raza == Effyn){document.getElementById("Effyn").style.display = "block";}

                    }
                    function ocultar($raza){
                        if($raza == Humano){document.getElementById("Humano").style.display = "none";}
                        if($raza == Elfo){document.getElementById("Elfo").style.display = "none";}
                        if($raza == Enano){document.getElementById("Enano").style.display = "none";}
                        if($raza == Effyn){document.getElementById("Effyn").style.display = "none";}

                                  }

                    function seleccionarRaza($id, $nombre){

                            document.getElementById("1").src="{{asset('images/registro/humanoOFF.jpg')}}";
                            document.getElementById("2").src="{{asset('images/registro/elfoOFF.jpg')}}";
                            document.getElementById("3").src="{{asset('images/registro/enanoOFF.jpg')}}";
                            document.getElementById("4").src="{{asset('images/registro/effynOFF.jpg')}}";
                            document.getElementById("raza").value = $id;
                            
                            if($id == 1){document.getElementById($id).src="{{asset('images/registro/humanoON.jpg')}}"}
                            if($id == 2){document.getElementById("2").src="{{asset('images/registro/elfoON.jpg')}}"}
                            if($id == 3){document.getElementById("3").src="{{asset('images/registro/enanoON.jpg')}}"}
                            if($id == 4){document.getElementById("4").src="{{asset('images/registro/effynON.jpg')}}"}

                                    }

                    function seleccionarClase($id, $claseName){
                        document.getElementById("clase").value = $id;
                        document.getElementById("seleccionDeClase").innerHTML= "<h5>Clase Seleccionada: <b>"+$claseName+"</b></h5>";
                                              

                    }

                    </script>
@endsection