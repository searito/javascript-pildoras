<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 29 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 29 -- Eventos De Formularios</h1>
	</div>

	<div class="container">
		<div class="row centrar-contenido border rounded">
			<div class="col-sm-2"></div>

			<div class="col-sm-8">
				<div class="card text-white bg-dark">
					<div class="card-header">Formulario De Ejemplo</div>
					<div class="card-body">
						<form action="" method="GET" id="form-datos">
							<div class="form-group">
								<label for="">Nombres</label>
								<input type="text" name="txt-nombre" placeholder="Ismael" id="txt-nombre" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Apellidos</label>
								<input type="text" name="txt-apellidos" placeholder="Carranza" id="txt-apellidos" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Edad</label>
								<input type="text" name="txt-edad" placeholder="26" id="txt-edad" class="form-control">
							</div>

							<div class="row">
								<div class="col-sm-6">
									<label for="">Género</label>
								</div>
								<div class="col-sm-6">
									<div class="form-check">
										<input type="radio" name="genero" class="form-check-input" id="rd-masculino" value="masculino"> Masculino <br>
										<input type="radio" name="genero" class="form-check-input" id="rd-femenino" value="femenino"> Femenino
									</div>
								</div>
							</div>

							<div class="form-group">
								<select name="slct-pais" id="slct-pais" class="custom-select form-control">
									<option selected>Selecciona Tu País</option>
									<option value="1">Guatemala</option>
									<option value="2">Honduras</option>
									<option value="3">El Salvador</option>
									<option value="4">Costa Rica</option>
									<option value="5">Nicargua</option>
									<option value="6">Belice</option>
									<option value="7">Panamá</option>
								</select>
							</div>

							<div class="form-group">
								<label for="" class="control-label text-center">Aficiones</label>
								<div class="row centrar-contenido">
									<div class="col-sm-6">
										<div class="form-check">
											<input type="checkbox" name="chk-deporte" class="form-check-input" id="chk-deporte" value="deporte"> Deporte <br>
										</div>

										<div class="form-check">
											<input type="checkbox" name="chk-lectura" class="form-check-input" id="chk-lectura" value="lectura"> Lectura <br>
										</div>

										<div class="form-check">
											<input type="checkbox" name="chk-bares" class="form-check-input" id="chk-bares" value="bares"> Bares <br>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-check">
											<input type="checkbox" name="chk-informatica" class="form-check-input" id="chk-informatica" value="informatica"> Informática <br>
										</div>

										<div class="form-check">
											<input type="checkbox" name="chk-cine" class="form-check-input" id="chk-cine" value="cine"> Cine <br>
										</div>

										<div class="form-check">
											<input type="checkbox" name="chk-naturaleza" class="form-check-input" id="chk-naturaleza" value="naturaleza"> Naturaleza <br>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<!--button class="btn btn-dark btn-block" id="btn-send">Enviar</button-->
								<input type="submit" name="btn-send" value="Enviar" id="btn-send" class="btn btn-warning btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-sm-2"></div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		/*$("#txt-nombre").focus(function() {
			var campoNombre = $(this);

			if (campoNombre.val() == campoNombre.attr('placeholder')) {
				campoNombre.val("");
			}
		});*/

		$("#txt-edad").blur(function() {
			var edad = $(this).val();

			if (isNaN(edad)) {
				$("#txt-edad").val("Ingresa Un Número").addClass('form-control is-invalid text-danger');
				//alert("ingresa Un Número Cabrón");
				//$(this).focus().val("");
			}
		});

		$("#form-datos").submit(function() {
			if ($("#txt-nombre").val() == "") {
				$("#txt-nombre").val("No Has Escrito Ningún Nombre").addClass('form-control is-invalid text-danger');
				$("#txt-nombre").focus();
				return false;
			}
		});

		$(":radio").click(function() {
			alert($(this).val());
		});

		var misPasatiempos = new Array();
		var i = 0;

		$(":checkbox").click(function() {
			misPasatiempos[i] = $(this).val();

			console.log(misPasatiempos);
			//alert("Posición " + i + " " + misDatos[i]);
			i++;
		});


		$("#slct-pais").change(function() {
			alert("Código País " + $(this).val());
		});

	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
