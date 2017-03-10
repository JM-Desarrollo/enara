@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{asset('images/registerImage.png')}}" />
            <div class="panel panel-default">
                <div class="panel-heading">Registrarse</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <h3 class="text-center">Datos Basicos</h3>
                        <h6 class="text-center">Completa con los datos basicos para logear</h6>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <h3 class="text-center">Personaje</h3>
                        <h6 class="text-center">Completa la raza, clase y tira los dados para los atributos de tu personaje</h6>

                        <div class="form-group">
                            <label for="raza" class="col-md-4 control-label">Raza</label>
                            <div class="col-md-6">
                                <select class="form-control" id="raza">
                                    <option>Seleccionar Raza</option>
                                    {{$razas = traerRazas()}}
                                    @foreach($razas as $raza)
                                        <option value="{{$raza->id}}">{{$raza->name}}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="clase" class="col-md-4 control-label">Clase</label>
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option>Seleccionar Clase</option>
                                    {{$clases = traerClases()}}
                                    @foreach($clases as $clase)
                                        <option value="{{$clase->id}}">{{$clase->name}}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <h3 class="text-center">Estadisticas</h3>
                            <h6 class="text-center">Tira los dados para saber tus estadisticas base</h6>
                            <h6 class="text-center">Los dados representan: <font color="red"><b>Constitucion</b></font> - <font color="blue"><b>Inteligencia</b></font> - <font color="green"><b>Fuerza</b></font> - <font color="orange"><b>Agilidad</b></font> - <font color="brown"><b>Carisma</b></font></h6>
                            <div class="col-md-12 divDado">
                            <div class="col-md-2"></div>
                            <div class="col-md-9">
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                                <div class="col-md-2 fondoDado"><span class="margenDado">5</span></div>
                            </div>
                            <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


