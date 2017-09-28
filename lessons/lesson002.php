<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #2 > JavaScript</title>
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
	
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div>

	<div class="page-header">
		<h1 class="text-center text-primary">Lección # 2</h1>
	</div>


	<h3 class="text-center text-muted">Jugando Con Variables</h3>

	<script>
		var nombre = prompt('Introduce Tu Nombre');
		var apellido = prompt('Introduce Tu Apellido');
		var edad = prompt('Introduce Tu Edad');
		var restando = prompt('Cuantos Años Deseas Quitarte?');
		edad -= restando;

		document.write("<p class='enfasis'>");
		document.write("Bienvenid@ " + nombre + " " + apellido);
		document.write("</p>");

		document.write("<p>");
		document.write("Tu Edad Actual Es  " + edad + " años " + " Ya Que Le Restamos " + restando + " Años");
		document.write("</p>");
	</script>

	</div>

<script src="../js/jquery.js"></script>
</body>
</html>