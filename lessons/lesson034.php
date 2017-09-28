<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 34 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 34 -- Controlando Errores De Servidor</h1>
	</div>

	<div class="container">
		
		<div class="row centrar-contenido bg-dark text-white">
			$.get(url, DatosEnviar, Funcion-Procesa-Respuesta)
		</div><br>

		<div class="row centrar-contenido bg-dark text-white">
			$.post(url, DatosEnviar, Funcion-Procesa-Respuesta)
		</div><br><br>
		
		<div class="row">
			<div class="col-sm-5 border rounded">
				<div class="card text-white bg-dark">
					<div class="card-body">
						<form action="" method="GET" id="frm_login">
							<div class="form-group">
								<label for="">Usuario</label>
								<input type="text" name="usuario" id="usuario" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Contraseña</label>
								<input type="password" name="pwd" id="pwd" class="form-control">
							</div>

							<div class="form-group">
								<input type="submit" name="send" value="Enviar" class="btn btn-warning btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-sm-7" id="contenido_externo"></div>
		</div>

	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#frm_login").submit(function() {
			/*var datosForm = {
				usuario: $("#usuario").val(),
				pwd: $("#pwd").val()
			};*/

			// ---- $.GET PARA ACCIONES DE CONSULTA Y $.POST PARA INTERACTUAR CON BD MODIFICAR, CREAR, ELIMINAR -----//

			var datosForm = $(this).serialize();

			$.get('login2.php', datosForm, procesandoDatos).error(procesarError);

			return false;
		});

		function procesandoDatos (datosDevueltos) {
			 if (datosDevueltos == "exito") {
			 	$("#contenido_externo").html("<div class='alert alert-success text-center' role='alert'>Acceso Autorizado</div>");
			 }else{
			 	$("#contenido_externo").html("<div class='alert alert-danger text-center' role='alert'>Usuario O Contraseña Incorrectos</div>");
			 }
		}

		function procesarError () {
			 var msgError = "Ooops!!! Ha Ocurrido Algo Inesperado... Intenta Más Tarde";

			 $("#contenido_externo").html("<div class='alert alert-warning text-center' role='alert'>"+ msgError +"</div>");
		}
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
