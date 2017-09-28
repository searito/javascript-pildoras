<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #7 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
</head>

<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div><br>

	<div class="jumbotron">
		<h1 class="text-center text-primary">Lección # 7 -- Estructuras De Control (Do While)</h1>
	</div>

	<div class="container">

		
	<div class="card text-white bg-dark mb-3 pull-left" style="max-width: 40rem;">
		<div class="card-header">El Número Es</div>

		<div class="card-body">
			<div id="div-mensaje"></div>
		</div>
	</div>


	<div class="card text-white bg-dark mb-3 pull-right" style="max-width: 40rem;">
		<div class="card-header">Número De Intentos</div>

		<div class="card-body">
			<div id="div-intentos"></div>
		</div>
	</div>
		
	</div>


	<script>
		var aleatorio = Math.round(Math.random() * 100);
		var miNum, intentos;

		miNum = 0;
		intentos = 0;

		var mensaje = document.getElementById("div-mensaje");
		var intentosConsumidos = document.getElementById("div-intentos");

		do{
			miNum = prompt("Introduce Un Número Entre 0 y 100...");

			if (aleatorio > miNum) {
				mensaje.innerHTML = ("<h1 class='card-title text-center'> Mayor</h1>");
			}

			if (aleatorio < miNum) {
				mensaje.innerHTML = ("<h1 class='card-title text-center'> Menor</h1>");
			}

			intentos++;
			intentosConsumidos.innerHTML = ("<h1 class='card-title text-center'>" + intentos + "</h1>");
			
		} while (aleatorio != miNum);

		alert("Correcto. Lo  Has Logrado En  " + intentos + " Intentos...!!!");
	</script>


</div>

<script src="../js/jquery.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>