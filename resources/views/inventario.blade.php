@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Inventario</h2><br />

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 text-center">
                            @for($i = 0; $i < ($inv->capacidad * 2); $i= $i+2)
                                @php $item = getItem($items[$i]) @endphp
                                <div class="col-md-1">
                                    @if($items[$i] != null)
                                        <img src="{{$item['img']}}"  onclick="abrirMenuItem( '{{$item['name']}}', '{{$item['img']}}', '{{$item['precio']}}', '{{$item['habilidades']}}' )">  <!-- | Cantidad: {{$items[$i+1]}} -->
                                       
                                        @else
                                    @endif
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <!-- MODAL -->
                <div class="container">
                    <div class='modal fade' id='myModal' role='dialog'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'><h4 id="nombreModal" class='modal-title text-center'>Informacion del Item</h4></div>
                                <div class='modal-body'>
                                    <p class="text-center">
                                        <span id="nombreObjeto"><!-- Nombre del Objeto --></span><br /><img id="imgModal" src=""><br /><br />
                                         <span id="habObjeto"><!-- Habilidades del Objeto --></span><br /><br />
                                        <a href="#" class="btn btn-warning">Vender por <img src="{{asset('images/personaje/oro.png')}}" /> <b id="precioReventa"><!-- Precio del Objeto --></b></a>
                                    </p>
                                </div>
                                <div class='modal-footer'>
                                    <p class='modalRec'></p> <button type='button' class='btn btn-default btn-enara' data-dismiss='modal'>Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function abrirMenuItem($nombre, $img, $precio, $hab) {
                        document.getElementById("nombreObjeto").innerHTML = $nombre;
                        document.getElementById("precioReventa").innerHTML = $precio * 0.45;
                        document.getElementById("imgModal").src = $img;
                        $habilidades = traerHabilidades($hab);
                        document.getElementById("habObjeto").innerHTML = $habilidades;

                        $('#myModal').modal('show');
                    }
                </script>


    @endsection