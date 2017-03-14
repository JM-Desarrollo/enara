@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Noticias</h2><br />

                
                    @foreach($noticias as $noticia)
                        <div class="panel panel-default">
                            <div class="panel-heading cabecera-noticia"><h3 class="panel-title">{{$noticia->tipo}} {{$noticia->titulo}}</h3></div>
                            <div class="panel-body cuerpo-noticia"><font size="1px">{{$noticia->created_at}}</font><br /><i>{!! $noticia->mensaje !!}</i></div>
                        </div>
                    @endforeach
                


@endsection

