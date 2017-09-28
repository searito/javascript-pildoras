<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 24 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 24-- Preloader Imágenes rollOver</h1>
	</div>

	<div class="container">
		<h2 class="text-danger text-center">Ejemplo Para Nada Práctico</h2><br>

		<div class="row centrar-contenido border border-primary rounded">
			<div class="col-sm-8 pull-left">
				<img src="../img/mustangcobra75.jpg" class="img-responsive img-thumbnail" id="foto" width="400">
			</div>
		</div><br>

		<div class="row centrar-contenido border border-info rounded bg-info" id="album">
			<div class="col-sm-3"><img src="../img/Impala.jpg" class="img-thumbnail img-responsive" id="foto_1"></div>
			<div class="col-sm-3"><img src="../img/charger70.jpg" class="img-thumbnail img-responsive" id="foto_2"></div>
			<div class="col-sm-3"><img src="../img/mustang74.jpg" class="img-thumbnail img-responsive" id="foto_3"></div>
			<div class="col-sm-3"><img src="../img/mustangcobra75.jpg" class="img-thumbnail img-responsive" id="foto_4"></div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		var secondPhoto = new Image();
		secondPhoto.src = "../img/mustang74.jpg";

		$("#foto").hover(function() {
			$(this).attr('src', secondPhoto.src);
		}, function() {
			$(this).attr('src', '../img/mustangcobra75.jpg');
		});


		// ----------------------------  SEGUNDA ROW --------------------------//

		var fotoFondo = [
			"../img/mustang74.jpg",
			"../img/mustangcobra75.jpg",
			"../img/charger70.jpg",
			"../img/Impala.jpg"
		];

		var imagenes = [];

		for (var i = 0; i < fotoFondo.length; i++) {
			imagenes[i] = new Image();
			imagenes[i].src = fotoFondo[i];
		}

		console.log(imagenes);

		$("#album img").each(function() {
			$(this).hover(cambiar, restaurar);
		});

		function cambiar (e) {
			if (e.target == foto_1) {
				$("#foto_1").attr('src', imagenes[0].src);
			}
			else if (e.target == foto_2) {
				$("#foto_2").attr('src', imagenes[1].src);
			}
			else if (e.target == foto_3) {
				$("#foto_3").attr('src', imagenes[2].src);
			}
			else if (e.target == foto_4) {
				$("#foto_4").attr('src', imagenes[3].src);
			}
		}

		function restaurar (e) {
			if (e.target == foto_1) {
				$("#foto_1").attr('src', '../img/Impala.jpg');
			}
			else if (e.target == foto_2) {
				$("#foto_2").attr('src', '../img/charger70.jpg');
			}
			else if (e.target == foto_3) {
				$("#foto_3").attr('src', '../img/mustang74.jpg');
			}
			else if (e.target == foto_4) {
				$("#foto_4").attr('src', '../img/mustangcobra75.jpg');
			}
		}
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
