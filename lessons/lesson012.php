<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 12 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 12 -- JQuery</h1>
	</div>

	<div class="container">
		
		<div class="row" id="carrete">
			<div class="col-sm-3">
				<img src="../img/Impala.jpg" class="img-thumbnail img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="../img/charger70.jpg" class="img-thumbnail img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="../img/mustang74.jpg" class="img-thumbnail img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="../img/mustangcobra75.jpg" class="img-thumbnail img-responsive">
			</div>

			<button id="btn-show" class="btn btn-success btn-block">
				<i class="fa fa-eye" aria-hidden="true"></i>
				Ver Imágenes
			</button>
		</div><br>
		

		<div class="row" id="anuncio">
			<div class="bg-dark text-white border" style="width: 100%; padding: 20px 20px;">
				COMPRAME....!!!
			</div>
		</div>
		
	</div>

</div>

<script src="../js/jquery.js"></script>

<!--script>
	var imagenes = document.querySelectorAll("#carrete img");

	for (var i = 0; i < imagenes.length; i++) {
		imagenes[i].style.visibility = "hidden";
	};
</script-->

<!--script>
	var anuncio = document.getElementById("anuncio");

	anuncio.style.width = "300px";
	anuncio.style.height = "300px";
	anuncio.style.backgroundColor = "#000";
	anuncio.style.color = "#eee";
	anuncio.innerHTML = "Se Vende";
</script-->

<script>
	$(document).ready(function() {
		$("#carrete img").hide();

		$("#btn-show").click(function(){
			$("#carrete img").show();			
		});

		$("#anuncio").width(300).height(300).text("Se Vende").addClass('bg-dark text-white border'); // --- FUNCION ENCADENADA ---//
	});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>