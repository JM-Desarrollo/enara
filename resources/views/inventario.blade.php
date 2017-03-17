@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Inventario</h2><br />

                <div class="panel panel-default">
                    <div class="panel-body panelInventario">
                        <div class="col-md-12">

                            @for($i = 0; $i < ($inv->capacidad * 2); $i= $i+2)
                                @php $item = getItem($items[$i]) @endphp

                                @if($items[$i] != null)
                                    <img src="{{$item['img']}}">  | Cantidad: {{$items[$i+1]}} <br />
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                
                


@endsection

