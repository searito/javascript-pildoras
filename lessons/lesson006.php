<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #6 > JavaScript</title>
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
	

	<script>
		var nombre = prompt("Introduce Tu Nombre");

		while (!isNaN(nombre)) {
			nombre = prompt("Introduce Un Nombre Válido");
		}


		var edad = prompt("Ingresa Tu Edad");

		while (edad <= 0 || edad > 110 || isNaN(edad)) {
			edad = prompt("Ingresa Una Edad Válida");
		}


		var depto = prompt("Digita El Departamento");

		while (!isNaN(depto)) {
			depto = prompt("Digita El Departamento Correctamente");
		}
	</script>

</head>

<body id="cuerpo">

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div>

	<div class="page-header">
		<h1 class="text-center text-primary">Lección # 6 -- Estructuras De Control (While)</h1>
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-muted">Nombre:</h4>
				<script>document.write(nombre)</script>

				<h4 class="text-muted">Edad:</h4>
				<script>document.write(edad)</script>

				<h4 class="text-muted">Departamento:</h4>
				<script>document.write(depto)</script>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	var contador = 0;

	while (contador < meses.length) {
		document.write("<span class='label label-primary text-center'>" + meses[contador] + "</span>&nbsp;");
		contador++;
	}
</script>

</body>
</html>