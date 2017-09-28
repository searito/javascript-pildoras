<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #9 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

	<script>
		function diaDeHoy(){
			var hoy = new Date();
			document.write(hoy.toDateString());
		}

		
		function pideNombre(nombre){
			document.write(nombre);
		}

		var myName = prompt("Introduce Tu Nombre...");
	</script>
</head>

<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div><br>

	<div class="jumbotron">
		<h1 class="text-center text-primary">Lección # 9 -- Funciones</h1>
	</div>

	<div class="container">
		<h2 class="text-center text-danger">Que Día Es Hoy?</h2>

		<p>
			Hoy Es: <script>diaDeHoy(myName);</script>
		</p>

		<div class="p3 mb-2 bg-dark text-white text-justify rounded" style="padding: 5px 10px;">
			<h3>Hola: <script>pideNombre(myName);</script>. Bienvenid@ A Este Deschongue....</h3>

			<p class="text-capitalize text-justify">
				Este es un intento de simulacro de web, en el cual me fusilo varios videos de Javascript, así que <script>pideNombre(myName);</script>
				no esperes un sistema complejo, ya que todo acá es básico...
			</p>
		</div>

		<div class="bg-light">
			<button class="btn btn-outline-danger" id="btn-calculator">
				<i class="fa fa-calculator" aria-hidden="true"></i>
				Calculadora Alert
			</button>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>
<script src="../js/lesson009.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>