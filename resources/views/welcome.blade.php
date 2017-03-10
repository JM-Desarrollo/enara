<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enara - Bienvenido</title> 
    <link rel="stylesheet" href="css/enara.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
</head>
<body>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 text-center"><br /><br /><br /><br /><br />
        <img src="http://www.pngmart.com/files/3/Fantasy-Castle-PNG-Photo.png" width="500" /><br />
        <div class="alert alert-warning"><h2>Hola! Bienvenido al continente de Enara! Por favor Registrate o Inicia Sesion para entrar</h2></div>
        <a href="{{url('login')}}" ><img src="{{asset('images/conectarse.png')}}" /></a>
        <a href="{{url('register')}}" ><img src="{{asset('images/registrarse.png')}}" /></a>




</div>
<div class="col-md-2"></div>
</div>


<script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>