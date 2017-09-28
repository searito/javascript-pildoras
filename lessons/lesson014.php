<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 14 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 14 -- Reemplazando Y Eliminando Elementos Con JQuery</h1>
	</div>

	<div class="container">
		
		<div class="bg-dark text-white centrar-contenido">
			<h3 class="text-center">Funciones Para Reemplazar y Eliminar Contenido</h3>

			<div class="row">
				<div class="col-sm-6 text-center">.remove()</div>
				<div class="col-sm-6 text-center">.replaceWith()</div>
			</div>
		</div><br>

		<div id="banner-prueba">
			<span class="text-center text-white">
				Este Es Un Molesto Banner...
			</span>
			<p id="cerrar">Cerrar</p>
		</div>

		<div class="row" id="carrete">
			<div class="col-sm-3">
				<img src="../img/Impala.jpg" class="img-thumbnail img-responsive" id="img1">
			</div>

			<div class="col-sm-3">
				<img src="../img/charger70.jpg" class="img-thumbnail img-responsive" id="img2">
			</div>

			<div class="col-sm-3">
				<img src="../img/mustang74.jpg" class="img-thumbnail img-responsive" id="img3">
			</div>

			<div class="col-sm-3">
				<img src="../img/mustangcobra75.jpg" class="img-thumbnail img-responsive" id="img4">
			</div>
		</div>

	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		/*var closeBanner = document.getElementById("cerrar");
		closeBanner.addEventListener("click", cerrarBanner, false);*/

		document.getElementById("cerrar").addEventListener("click", cerrarBanner, false);
		//document.getElementById("img-1").addEventListener("click", carrito, false);
		var imagenes = document.querySelectorAll("#carrete img"); // --- ALMACENA EN UN ARRAY TODOS LOS ELEMENTOS IMG DEL ID CARRETE ---//

		for (var i = 0; i < imagenes.length; i++) {
			imagenes[i].addEventListener("click", carrito, false);
		};
	});

	function cerrarBanner () {
		 $("#banner-prueba").remove();
	}


	function carrito(numImg){
		if (numImg.target == img1) {
			$("#img1").replaceWith('<div id="img1" class="text-center text-primary">Agregado Al Carro...</div>');	
		}
		
		if (numImg.target == img2) {
			$("#img2").replaceWith('<div id="img2" class="text-center text-primary">Agregado Al Carro...</div>');	
		}

		if (numImg.target == img3) {
			$("#img3").replaceWith('<div id="img3" class="text-center text-primary">Agregado Al Carro...</div>');	
		}

		if (numImg.target == img4) {
			$("#img4").replaceWith('<div id="img4" class="text-center text-primary">Agregado Al Carro...</div>');	
		}
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>