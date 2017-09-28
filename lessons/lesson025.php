<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 25 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="../js/fancybox-master/dist/jquery.fancybox.css">

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
		<h1 class="text-center text-primary">Lección # 25 -- Imágenes Con FancyBox</h1>
	</div>

	<div class="container">
		<h2 class="text-danger text-center">Galería De Imágenes</h2>

		<div class="row border border-secondary rounded centrar-contenido bg-dark">
			<div id="galeria">
				<a href="../img/charger70.jpg" rel="gallery" data-caption="Charger 1970" data-fancybox="images" data-width="2048">
					<img src="../img/charger70.jpg" class="img-thumbnail img-responsive" width="100">
				</a>

				<a href="../img/Impala.jpg" rel="gallery" data-caption="Impala 1969" data-fancybox="images" data-width="2048">
					<img src="../img/Impala.jpg" class="img-thumbnail img-responsive" width="100">
				</a>
				
				<a href="../img/mustang74.jpg" rel="gallery" data-caption="Mustang 1974" data-fancybox="images" data-width="2048">
					<img src="../img/mustang74.jpg" class="img-thumbnail img-responsive" width="100">
				</a>
				
				<a href="../img/mustangcobra75.jpg" rel="gallery" data-caption="Mustang Cobra 1975" data-fancybox="images" data-width="2048">
					<img src="../img/mustangcobra75.jpg" class="img-thumbnail img-responsive" width="100">
				</a>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>
<script src="../js/fancybox-master/dist/jquery.fancybox.js"></script>

<script>
	$(document).ready(function() {
		$("#galeria a").fancybox({
			loop: true
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
