@extends('master')  @section('titulo', 'Home')   @section('contenido')

<h1 class="text-center">Trabajos
                <img src="{{url('images/job/principal.jpg')}}" /></h1>
                    <p>
                        Bienvenido a la tienda de empleadores, en este sitio es donde los empleadores publican los puestos libres que tienen en sus tiendas.
                        La mayoria son trabajos de mala paga, pero te ayudaran a salir del paso.
                    </p>

    @if(!Auth::User()->idJob)
       <table class="table table-hover text-center">
                    <tr>
                    <td><strong>Trabajo</strong></td>
                    <td><strong>Paga por Hora</strong></td>
                    <td><strong>Posible Recompensa</strong></td>
                    <td><strong>Habilidad Necesaria</strong></td>
                    </tr>
                    @foreach($trabajos as $t)
                    <tr onclick="seleccionarJob('{{$t->id}}', '{{$t->name}}')">
                    <td>{{$t->name}}</td>
                    <td>{{$t->paga}}</td>
                    <td>@if($t->posRec == null)---@else{{$t->posRec}}@endif</td> <!-- Si no tiene recompensa devuelve 3 lineas -->
                    <td>@if($t->habNec == null)---@else{{$t->habNec}}@endif</td> <!-- Si no tiene recompensa devuelve 3 lineas -->
                    </tr>
                    @endforeach
                    
                    
                    </table>
                    <form method="POST" class="form-inline text-center" role="form">
                    {{ csrf_field() }}
                    <p id="jobSelect"></p>
                    <input type="hidden" name="idJob" id="userTrabajar" value="null">
                    <label for="horas">Horas</label>
                    <select name="horas" id="horas" class="form-control" style="width:60px">
                        @for($i = 1; $i < 11; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor 
                    </select>
                    <button type="submit" class="btn btn-default btn-enara-oscuro">Ir a Trabajar</button>       
                    </form>


                    @if (session('titulo'))
                    <script>$(window).load(function(){$('#myModal').modal('show');});</script>
                    {!! modal(session('titulo'), session('mensaje'), session('oro'), session('diamond')) !!}      
                    
                        
                    @endif

                    <script>
                        function seleccionarJob($id, $name) {
                            document.getElementById("userTrabajar").value = $id;
                            document.getElementById("jobSelect").innerHTML = "<b>Trabajo Seleccionado: "+$name+"</b>";
                        }
                    </script>
    @else
        <div class="alert alert-warning">{{Auth::User()->name}} ya cuentas con un trabajo el cual termina en </div>
    @endif
                

                    

@endsection
