<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 17 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 17 -- Leyendo y Cambiando Atributos HTML</h1>
	</div>

	<div class="container">
		<div class="bg-dark text-white centrar-contenido">
			<h3 class="text-center">Funciones Necesarias</h3>

			<div class="row">
				<div class="col-sm-6 text-center">.attr( "atributo", "valor" )</div>
				<div class="col-sm-6 text-center">.removeAttr( "atributo" )</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"><img src="../img/charger70.jpg" class="img-thumbnail img-responsive" id="img1"></div>
			<div class="col-sm-3"></div>
		</div>

		<div class="row">
			<div class="col-sm-3" id="contenedor1">
				<ul class="list-group">
					<li class="list-group-item list-group-item-secondary" id="auto1">Charger '70</li>
					<li class="list-group-item list-group-item-secondary" id="auto2">Impala '69</li>
					<li class="list-group-item list-group-item-secondary" id="auto3">Mustang '74</li>
					<li class="list-group-item list-group-item-secondary" id="auto4">Mustang Cobra '75</li>
				</ul>
			</div>

			<div class="col-sm-9" id="contenedor2">
				<img src="" class="img-thumbnail img-responsive">
			</div>
		</div><br><br>

		<div class="row centrar-contenido bg-dark" id="carrete">
			<div class="col-sm-3">
				<img src="../img/charger70.jpg"  class="img-thumbnail img-responsive" style="opacity: 0.4;" id="imgcarrete1">
			</div>

			<div class="col-sm-3">
				<img src="../img/Impala.jpg"  class="img-thumbnail img-responsive" style="opacity: 0.4;" id="imgcarrete2">
			</div>

			<div class="col-sm-3">
				<img src="../img/mustang74.jpg"  class="img-thumbnail img-responsive" style="opacity: 0.4;" id="imgcarrete3">
			</div>
			
			<div class="col-sm-3">
				<img src="../img/mustangcobra75.jpg"  class="img-thumbnail img-responsive" style="opacity: 0.4;" id="imgcarrete4">
			</div>
		</div><br><br>

	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		document.getElementById("img1").addEventListener("mouseover", cambiar, false);
		document.getElementById("img1").addEventListener("mouseout", restaurar, false);

		var misImagenes = document.querySelectorAll("#carrete img");

		for (var i = 0; i < misImagenes.length; i++) {
			misImagenes[i].addEventListener("mouseover", quitarOpacidad, false);
			misImagenes[i].addEventListener("mouseout", restaurarOpacidad, false);
		}

		var elementosLista = document.querySelectorAll("#contenedor1 li");

		for (var a = 0; a < elementosLista.length; a++) {
			elementosLista[a].addEventListener("mouseover", poniendoImagen, false);
			elementosLista[a].addEventListener("mouseout", quitandoImagen, false);
		};
	});

	function cambiar () {
	 	$("#img1").attr({
	 		'src': '../img/Impala.jpg',
	 		'class': 'img-thumbnail img-responsive'
	 	});
	}


	function restaurar () {
		 $("#img1").attr({
	 		'src': '../img/charger70.jpg',
	 		'class': 'img-thumbnail img-responsive'
	 	});
	}

	function quitarOpacidad (e) {
		 if (e.target == imgcarrete1) {
		 	$("#imgcarrete1").css('opacity', '1');
		 }
		 else if (e.target == imgcarrete2) {
		 	$("#imgcarrete2").css('opacity', '1');	
		 }
		 else if (e.target == imgcarrete3) {
		 	$("#imgcarrete3").css('opacity', '1');	
		 }
		 else if (e.target == imgcarrete4) {
		 	$("#imgcarrete4").css('opacity', '1');	
		 }
	}

	function restaurarOpacidad (e) {
		if (e.target == imgcarrete1) {
			$("#imgcarrete1").css('opacity', '0.4');
		}
		else if (e.target == imgcarrete2) {
			$("#imgcarrete2").css('opacity', '0.4');
		}
		else if (e.target == imgcarrete3) {
			$("#imgcarrete3").css('opacity', '0.4');
		}
		else if (e.target == imgcarrete4) {
			$("#imgcarrete4").css('opacity', '0.4');
		}
	}

	function poniendoImagen (e) {
		if (e.target == auto1) {
			$("#auto1").addClass('list-group-item list-group-item-light text-primary');

		 	$("#contenedor2 img").attr({
	 			'src': '../img/charger70.jpg',
	 			'class': 'img-thumbnail img-responsive'
		 	});
		}
		 
		else if (e.target == auto2) {
			$("#auto2").addClass('list-group-item list-group-item-light text-primary');

			$("#contenedor2 img").attr({
		 		'src': '../img/Impala.jpg',
		 		'class': 'img-thumbnail img-responsive'
			});	
		}

		else if (e.target == auto3) {
			$("#auto3").addClass('list-group-item list-group-item-light text-primary');

			$("#contenedor2 img").attr({
	 			'src': '../img/mustang74.jpg',
	 			'class': 'img-thumbnail img-responsive'
		 	});	
		}

		else if (e.target == auto4) {
			$("#auto4").addClass('list-group-item list-group-item-light text-primary');

			$("#contenedor2 img").attr({
	 			'src': '../img/mustangcobra75.jpg',
	 			'class': 'img-thumbnail img-responsive'
		 	});	
		}
	}

	function quitandoImagen (e) {
		if (e.target == auto1) {
			$("#auto1").removeClass('list-group-item list-group-item-light text-primary');
			$("#auto1").addClass('list-group-item list-group-item-secondary');

		 	$("#contenedor2 img").removeAttr('src');
		}
		 
		else if (e.target == auto2) {
			$("#auto2").removeClass('list-group-item list-group-item-light text-primary');
			$("#auto2").addClass('list-group-item list-group-item-secondary');

			$("#contenedor2 img").removeAttr('src');
		}

		else if (e.target == auto3) {
			$("#auto3").removeClass('list-group-item list-group-item-light text-primary');
			$("#auto3").addClass('list-group-item list-group-item-secondary');

			$("#contenedor2 img").removeAttr('src');
		}

		else if (e.target == auto4) {
			$("#auto4").removeClass('list-group-item list-group-item-light text-primary');
			$("#auto4").addClass('list-group-item list-group-item-secondary');

			$("#contenedor2 img").removeAttr('src');
		}
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
