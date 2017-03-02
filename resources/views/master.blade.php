<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enara - @yield('titulo')</title> 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
</head>
<body>
    <div class="row">
        <div class="col-md-2"></div> <!-- SEPARADOR -->
        <div class="col-md-8"> <!-- CUERPO -->
            <header> <!-- CABECERA DEL CUERPO -->
                <div class="imgwrapper"> <!-- Div para que la imagen sea responsive y se adapte -->
                    <img src="{{ asset('images/fondoCabecera.jpg') }}" class="img-responsive">
                </div>
                <!-- NAV -->
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Bienvenido Juan!</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Mi Personaje <span class="sr-only">(current)</span></a></li>
                                <li><a href="">Oro: 5874</a></li>
                                <li><a href="">Esquirlas: 10</a></li>
                                <li><a href="">Diamantes: 500</a></li>
                                <li><a href="">Honor: 800</a></li>
                                <li><a href="">Nivel: 5</a></li>
                                <li><a href="">Experiencia: 800/1200</a></li>
                                <li><a href="">Bendicio: Ruina</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Editar Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Cerrar Session</a></li>
                                </ul>
                                </li>
                            </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                        </nav>
                <!-- FIN NAV -->
            </header>
            
            <div class="row"> <!-- FILA PARA LAS TRES COLUMNAS -->
                <div class="col-md-2"><!-- COLUMNA IZQUIERDA -->
                    <div class="panel panel-default"> <!-- MI PERSONAJE -->
                        <div class="panel-heading"><h3 class="panel-title">Mi Personaje</h3></div>
                        <div class="panel-body">
                            Vida: 500<br />
                            Stamina: 100<br />
                            Mana: 250<br />
                        </div>
                    </div>

                    <div class="panel panel-default"> <!-- CIUDAD -->
                        <div class="panel-heading"><h3 class="panel-title">Ciudad</h3></div>
                        <div class="panel-body">
                            Vista General<br />
                            Trabajo<br />
                            Entrenamiento<br />
                            Armero<br />
                            Herrero<br />
                            Alquimista<br />
                            Pescaderia<br />
                        </div>
                    </div>
                </div> 
                <div class="col-md-8">@yield('contenido')</div> <!-- COLUMNA CENTRAL -->
                <div class="col-md-2"><!-- COLUMNA DERECHA -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Coliseo</h3></div>
                        <div class="panel-body">
                            Tickets: 5<br />
                            Rank: Bronce<br />
                            Nivel: 250<br />
                        </div>
                    </div>
                </div> 
            </div>
        </div>     
        <div class="col-md-2"></div> <!-- SEPARADOR -->
    </div>

    <hr>
	<h5 class="text-center">ENARA | 2017</h5>
    <!-- Latest compiled and minified JavaScript -->
	<script src="/js/app.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>