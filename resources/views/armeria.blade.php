@extends('master')  @section('titulo', 'Home')   @section('contenido')




                        @if (session('titulo'))
                        <script>$(window).load(function(){$('#myModal').modal('show');});</script>
                        {!! modal(session('titulo'), session('mensaje'), session('oro'), session('diamond')) !!}      
                        
                            
                        @endif

                        @if (session('error'))
                 <div class="alert alert-danger alert-dismissable text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('error')}}
                </div>
                @endif

<h3>Armeria </h3>

<div class="col-md-12">
    <div class="col-md-6">
        <img src="{{asset('images/armeria/armero.jpg')}}" width="300">
    </div>

    

    <div class="col-md-6">
        <span>
            Hola! Bienvenido a mi armeria, tengo varios articulos que pueden llegar a interesarte, la mayoria los vendo por una modica suma de dinero, aunque hay otros... de interesartes caracteristicas
             que cuestan mucho mas que los demas y no se venden por algo tan mundano como monedas de oro.
        </span>
    </div>
</div>

<div class="col-md-12"><br />
    <div class="panel panel-warning">
        <div class="panel-heading">Catalogo Especial (Termina en 21:02:30 Horas)</div>
        <div class="panel-body">
            Contenido del panel
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-warning">
        <div class="panel-heading">Espadas y Dagas</div>
        <div class="panel-body">
            Contenido del panel
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-warning">
        <div class="panel-heading">Escudos</div>
        <div class="panel-body">
            <div class="col-md-12">
                <table class="table table-hover">
                    @foreach($escudos as $escudo)
                        <tr>
                            <td><img src="{{$escudo->img}}" class="{{$escudo->calidad}}"></td>
                            <td  style="vertical-align:middle;"><strong>{{$escudo->name}}</strong></td>
                            <td><strong><img src="{{asset('images/personaje/oro.png')}} "> {{$escudo->precio}}</strong></td>
                            <td><a onclick="comprar({{$escudo->id}}, {{$escudo->precio}})" class="btn btn-warning">Comprar</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-warning">
        <div class="panel-heading">Arcos y Flechas</div>
        <div class="panel-body">
            Contenido del panel
        </div>
    </div>
</div>
                
                <form method="POST" name="formArmeria" id="formArmeria">
                    {{ csrf_field() }}
                    <input type="hidden" value="" name="oro" id="oro">
                    <input type="hidden" value="" name="item" id="item">
                </form>

                <script> 
                    function comprar($item, $oro){ 
                    document.getElementById("oro").value = $oro;
                    document.getElementById("item").value = $item;
                    document.getElementById("formArmeria").submit(); 
                    } 
                </script>
                    

@endsection

