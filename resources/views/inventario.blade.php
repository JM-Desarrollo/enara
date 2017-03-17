@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Inventario</h2><br />

                <div class="panel panel-default">
                    <div class="panel-body panelInventario">
                        <div class="col-md-12">
                            @foreach($inventario as $item)
                                
                            @endforeach
                        </div>
                    </div>
                </div>
                
                


@endsection

