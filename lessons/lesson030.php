<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 30 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 30 -- Mostrando U Ocultando Elementos</h1>
	</div>

	<div class="container">
		<div class="row centrar-contenido">
			<div class="col-sm-2"></div>

			<div class="col-sm-8">
				<div class="card bg-light">
					<div class="card-header">Formulario De Pago</div>

					<div class="card-body">
						<h4 class="card-title text-center">Mostrando / Ocultando Elementos</h4>	

						<form action="" id="frm-datos" method="GET">
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" name="txt-name" id="txt-name" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Dirección</label>
								<input type="text" name="txt-direccion" id="txt-direccion" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Ciudad</label>
								<input type="text" name="txt-ciudad" id="txt-ciudad" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Código Postal</label>
								<input type="text" name="txt-postal" id="txt-postal" class="form-control">
							</div>

							<div class="row">
								<div class="col-sm-6">
									<label for="">Método De Pago</label>
								</div>

								<div class="col-sm-6">
									<div class="form-check">
										<input type="radio" name="forma-pago" value="Paypal" id="rd-paypal" class="form-check-input">
										Paypal
									</div>

									<div class="form-check">
										<input type="radio" name="forma-pago" value="Visa" id="rd-visa" class="form-check-input">
										Visa
									</div>

									<div class="form-check">
										<input type="radio" name="forma-pago" value="MasterCard" id="rd-master" class="form-check-input">
										MasterCard
									</div>
								</div>
							</div>

							<div class="form-group" id="titulo">
								<label for="">Datos De Pago</label><br>
							</div>

							<div class="form-group" id="tarjeta">
								<label for="">N° De Tarjeta</label>
								<input type="text" name="tx-tarjeta" class="form-control" id="txt-tarjeta">
							</div>

							<div class="form-group" id="fecha">
								<label for="">Fecha De Expiración</label>
								<input type="text" name="tx-exp" class="form-control" id="txt-exp">
							</div>

							<div class="form-group" id="correo">
								<label for="">E-mail</label>
								<input type="email" name="tx-email" class="form-control" id="txt-email">
							</div>

							<div class="form-group">
								<select name="slc-pais" id="slct-pais" class="custom-select form-control">
									<option selected>Selecciona Un País</option>
									<option value="1">Belice</option>
									<option value="2">Guatemala</option>
									<option value="3">Honduras</option>
									<option value="4">El Salvador</option>
									<option value="5">Nicaragua</option>
									<option value="6">Costa Rica</option>
									<option value="7">Panamá</option>
								</select>
							</div>

							<div class="form-group">
								<input type="submit" name="btn-send" id="btn-send" value="Enviar" class="btn btn-primary btn-block">
							</div>
							
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-sm-2"></div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		/*$("#rd-paypal").click(function() {
			$("#txt-email").removeAttr('disabled').focus();
			$("#txt-tarjeta").attr('disabled', true);
			$("#txt-exp").attr('disabled', true);
		});

		$("#rd-visa").click(function() {
			$("#txt-tarjeta").attr('disabled', false).focus();
			$("#txt-exp").removeAttr('disabled');
			$("#txt-email").attr('disabled', true);
		});

		$("#rd-master").click(function() {
			$("#txt-tarjeta").attr('disabled', false).focus();
			$("#txt-exp").removeAttr('disabled');
			$("#txt-email").attr('disabled', true);
		});*/

		$("#titulo").hide();
		$("#tarjeta").hide();
		$("#fecha").hide();
		$("#correo").hide();

		$("#rd-paypal").click(function() {
			$("#titulo").fadeIn();
			$("#correo").fadeIn();
			$("#txt-email").focus();
			$("#tarjeta").hide();
			$("#fecha").hide();
		});

		$("#rd-visa").click(function() {
			$("#titulo").fadeIn();
			$("#tarjeta").fadeIn();
			$("#fecha").fadeIn();
			$("#txt-tarjeta").focus();
			$("#correo").hide();
		});

		$("#rd-master").click(function() {
			$("#titulo").fadeIn();
			$("#tarjeta").fadeIn();
			$("#fecha").fadeIn();
			$("#txt-tarjeta").focus();
			$("#correo").hide();
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>