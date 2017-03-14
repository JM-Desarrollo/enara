@extends('master')  @section('titulo', 'Home')   @section('contenido')




                        @if (session('titulo'))
                        <script>$(window).load(function(){$('#myModal').modal('show');});</script>
                        {!! modal(session('titulo'), session('mensaje'), session('oro'), session('diamond')) !!}      
                        
                            
                        @endif

<div class="text-center"><h3>Herreria</h3>
    <img src="{{asset('images/enConstruccion.png')}} "></div>


                    

@endsection