@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h2 class="text-center">Crear Nota</h2><br />

                <form method="POST" role="form">{{ csrf_field() }}
                    <div class="form-group">
                    <label for="titulo">Titulo de la Nota</label>
                    <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="tipo">Tipo de Nota</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="Noticia">Noticia</option>
                        <option value="Evento">Evento</option>
                        <option value="Coliseo">Coliseo</option>
                        <option value="Torneo">Torneo</option>
                        <option value="Desarrollo">Desarrollo</option>
                    </select>                    
                    </div>

                    <div class="form-group">
                    <label for="cuerpo">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>


@endsection

