<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 35 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 35 -- Objetos JSON</h1>
	</div>

	<div class="container">
		<h2 class="text-center text-danger">Introduce Un Nombre</h2>

		<div class="row centrar-contenido">
			<div class="col-sm-7">
				<div id="info_user"></div>
			</div>

			<div class="col-sm-5 centrar-contenido ">
				
				<div class="card bg-secondary text-white">
					<div class="card-body">
						<form action="" id="frm_user">
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
							</div>

							<div class="form-group">
								<input type="submit" name="send" value="Enviar" class="btn btn-block btn-primary">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#frm_user").submit(function() {
			var datosForm = $(this).serialize();

			$.getJSON('lesson035_usuarios.php', datosForm, procesarDatos);

			return false;
		});

		function procesarDatos (datosDevueltos) {
			 /*$("#info_user").html("<div class='alert alert-success text-center' role='alert'> La Edad De "
		 							+ datosDevueltos.Nombre + " Es De " + datosDevueltos.Edad +" Años </div>");*/

			var informacion = "<div class='alert alert-success' role='alert'> <b>Nombre: </b>" + datosDevueltos.Nombre + "</div>";
			informacion += "<div class='alert alert-warning' role='alert'> <b>Apellido: </b>" + datosDevueltos.Apellido + "</div>";
			informacion += "<div class='alert alert-danger' role='alert'> <b>Edad: </b>" + datosDevueltos.Edad + " Años</div>";

			$("#info_user").html(informacion).attr('class', 'bg-dark centrar-contenido');

			if (informacion == null) {
				$("#info_user").html("<div class='alert alert-danger' role='alert'> Este Usuario No Existe </div>");
			}
		}
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
