@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h3>Hoja de Trabajo</h3>
                

                    @if (session('titulo'))
                    <script>$(window).load(function(){$('#myModal').modal('show');});</script>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                    {!! modal(session('titulo'), session('mensaje')) !!}      
                    
                        
                    @endif

@endsection
