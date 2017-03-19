@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Inventario</h2><br />

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 text-center">
                            @php $itemInv = getItem($inv->inventario) @endphp <!-- Devuelvo un array donde el subindice par representa el item y el impar la cantidad -->

                            @for($i = 0; $i < ($inv->capacidad); $i= $i+2)
                                <div class="col-md-1">
                                    @if($itemInv[$i] != null)
                                        @php $itemSelect = traerItem($itemInv[$i]) @endphp
                                        @php $itemHab = habilidadItem($itemSelect->habilidades) @endphp
                                        <img src="{{$itemSelect->img}}"  onclick="abrirMenuItem( '{{$itemSelect->name}}', '{{$itemSelect->img}}', {{$itemSelect->precio}}, '{{$itemHab}}' )">
                                       
                                        @else
                                         <div class="col-md-1"><img src="{{asset('images/items/vacio.png')}}"></div>
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
                        document.getElementById("habObjeto").innerHTML = $hab;    


                        $('#myModal').modal('show');
                    }
                </script>


    @endsection