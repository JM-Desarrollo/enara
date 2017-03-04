<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enara - @yield('titulo')</title> 
    <link rel="stylesheet" href="css/enara.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
</head>
<body>
    <div class="row">
        <div class="col-md-2"></div> <!-- Grilla separadora -->
        <div class="col-md-8"> <!-- CUERPO -->
             <header> <!-- CABECERA DEL CUERPO -->
                <div class="imgwrapper"> <!-- Div para que la imagen sea responsive y se adapte -->
                    <img src="{{ asset('images/fondoCabecera.jpg') }}" class="img-responsive">
                </div>
                @include('inc.nav')<!-- MENU PRINCIPAL -->
             </header>

             <!-- Dentro de esta row se ubican las 3 columnas principales. -->
             <!-- Las Columnas Izquieda y Derecha son incluidas. -->
             <div class="row"> 
                <div class="col-md-2">@include('inc.col.izquierda')</div> <!-- Columna Izquierda -->
                <div class="col-md-8"> <!-- Columna Central -->
                    <!-- MISION DESTACADA -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><img src="{{url('images/mision/dest.png')}}" /> Mision Destacada <img src="{{url('images/mision/dest.png')}}" /></div>
                        <div class="panel-body">
                         
                            @if(tutorialesActivos())
                                {!! tutoriales() !!}
                              @else
                                    NO
                            @endif
                        </div>
                    </div>
                    <!-- FIN MISION DESTACADA -->
            
                        <div class="panel panel-default">
                            <div class="panel-body panel-height">
                                @yield('contenido')
                            </div>
                        </div>
                </div>
                <div class="col-md-2">@include('inc.col.derecha')</div><!-- Columna Derecha -->
             </div>
        </div><!-- FIN CUERPO -->
        <div class="col-md-2"></div> <!-- Grilla separadora -->
    </div>

<footer>
    <br /><br />ENARA | 2017</h5><br /><br />
</footer>

<script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>