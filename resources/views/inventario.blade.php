@extends('master')  @section('titulo', 'Home')   @section('contenido')

@php $itemInv = getItem($inv->inventario) @endphp <!-- Devuelvo un array donde el subindice par representa el item y el impar la cantidad -->

                <h2 class="text-center">Inventario | Capacidad: {{$inv->capacidad}} </h2><br />          

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 text-center">
                            <div class="col-md-6 text-center">
                                @for($i = 0; $i < ($inv->capacidad * 2); $i= $i+2)
                    
                                    @if($itemInv[$i] != null)
                                        <div class="col-md-2">
                                            @php $itemSelect = traerItem($itemInv[$i]) @endphp
                                            @php $itemHab = habilidadItem($itemSelect->habilidades) @endphp
                                            
                                            <img src="{{$itemSelect->img}}" class="{{$itemSelect->calidad}}"  onmouseover="this.className='seleccionado'" onmouseout="this.className='{{$itemSelect->calidad}} '" onclick="abrirMenuItem({{$itemSelect->id}}, '{{$itemSelect->name}}', '{{$itemHab}}', {{$itemSelect->precio}}, '{{$itemSelect->calidad}}', '{{$itemSelect->tipo}}')">
                                            <br /><br />
                                        </div>
                                        @else
                                         <div class="col-md-2"><img src="{{asset('images/items/vacio.png')}}" class="vacio"><br /><br /></div>
                                    @endif
                                
                                @endfor

                            </div>


                            <div class="col-md-6 text-center">
                                <div id="detalleItem" class="divItemDetalle"></div>
                                <div id="detalleItem2" class="divItemDetalle2">
                                    <br />
                                    <button type="button"  onclick="vender()" class="btn btn-warning">Vender por <img src='{{asset('images/personaje/oro.png')}}'/> <b id="botonVenta">100</b></button><br /><br />
                                </div>
                            </div>

                        </div><!-- col-md-12 text-center -->
                    </div><!-- panel-body -->
                </div><!-- panel panel-default -->

                <form role="form"  id="formVenta" method="POST" action="venderItem">{{ csrf_field() }}
                    <input type="hidden" id="idVenta" name="idVenta" value="">
                    <input type="hidden" id="precioVenta" name="precioVenta" value="">
                    <input type="hidden" id="tipoVenta" name="tipoVenta" value="">
                </form>

                <script>
                    function abrirMenuItem($id, $nombre, $hab, $precio, $calidad, $tipo){
                        $("#idVenta").val($id);
                        $("#precioVenta").val($precio * 0.35);
                        $("#botonVenta").html($precio * 0.35);
                        $("#tipoVenta").val($tipo);
                        $("#detalleItem2").show();
                        $("#detalleItem").html("<b>Informacion del Item</b><br />" + $nombre + "<br /><u>Calidad del Item: " + $calidad + "</u><br /><br /><b>Habilidades</b><br />" + $hab + 
                        "<br /><br /><a href='' class='btn btn-success'> <b>Equipar</b></a><br />");                      

                    }

                    function vender($precio, $id, $tipo){
                        $("#formVenta").submit();
                       
                    }
                </script>

    @endsection