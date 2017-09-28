<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 26 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#contenedor{
		background-color: #fff;
		width: 500px;
		height: 400px;
		margin: auto;
		margin-top: 2%;
		/*border: 1px solid #999;*/
	}
</style>

<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div><br>

	<div class="jumbotron">
		<h1 class="text-center text-primary">Lección # 26 -- Ventanas Emergentes & IFrames </h1>
	</div>

	<div class="container">
		<h2 class="text-center text-danger">Continuo Con Los Ejemplos Para Nada Prácticos</h2>

		<div class="row centrar-contenido">
			<a href="http://www.animeyt.tv/bakemonogatari" class="btn btn-primary" id="my-link">Loguearme</a><br>
		</div>

		<div class="row centrar-contenido">
			<form action="" id="mi-form" method="POST" name="form1">
				<div class="card text-white bg-dark">
					<div class="card-header">Login</div>
					<div class="card-body">
						<div class="form-group">
							<label for="" class="control-label">Usuario</label>
							<input type="text" name="user" id="user" class="form-control">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Contraseña</label>
							<input type="text" name="pwd" id="pwd" class="form-control">
						</div>

						<div class="form-group">
							<button class="btn btn-info btn-block">Acceder</button>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="row centrar-contenido border border-primary rounded">
			<div class="col-sm-3">
				<a href="http://www.animeyt.tv/bakemonogatari" class="btn btn-outline-danger">Enlace Externo</a>
			</div>

			<div class="col-sm-3">
				<a href="" class="btn btn-outline-dark" id="botonCerrar">Cerrar Enlace</a>
			</div>
		</div><br>

		<h4 class="text-center text-danger">IFrame</h4>
		<div class="row centrar-contenido border border-danger rounded">
			<div class="col-sm-12">
				<a href="" class="btn btn-danger" id="btn-iframe">Pulsame</a>
			</div>

			<div class="col-sm-12">
				<div id="contenedor">
					<iframe src="" frameborder="0" width="500" height="400" id="marco"></iframe>
				</div>
			</div>
		</div><br>

		<h4 class="text-center text-primary">Iframe Con FancyBox</h4>
		<div class="row centrar-contenido border border-primary rounded">
			<div class="col-sm-3">
				<a data-src="http://inmanga.com/" class=" btn btn-info" data-fancybox data-type="iframe" href="javascript:;">Inmanga</a>
			</div>

			<div class="col-sm-3">
				<a data-src="http://iknime.com/" class=" btn btn-info" data-fancybox data-type="iframe" href="javascript:;">IKnime</a>
			</div>

			<div class="col-sm-3">
				<a data-src="http://leomanga.com/" class=" btn btn-info" data-fancybox data-type="iframe" href="javascript:;">LeoManga</a>
			</div>

			<div class="col-sm-3">
				<a data-src="http://www.animeyt.tv" class=" btn btn-info" data-fancybox data-type="iframe" href="javascript:;">AnimeYT</a>
			</div>
		</div>
	</div>

</div>

<!--script src="../js/jquery.js"></script-->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

<script>
	$(document).ready(function() {
		$("#mi-form").hide();

		$("#my-link").click(function(e) {
			$("#mi-form").fadeIn(2000);
			//e.preventDefault(); //--- DESACTIVO EL COMPORTAMIENTO DEL LINK ---//
			return false; // --- DESACTIVA EL COMPORTAMIENTO DE UN LINK
		});

		var ventana = open("http://www.animeyt.tv/bakemonogatari", "NombreReferencia", "width=200, height=200, left=80, top=50"); //--- VENTANA EMERGENTE ---//

		$("#botonCerrar").click(function(e) {
			e.preventDefault();
			ventana.close();
		});


		$("#btn-iframe").click(function(e) {
			e.preventDefault();
			$("#marco").attr('src', 'http://www.inmanga.com');
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
