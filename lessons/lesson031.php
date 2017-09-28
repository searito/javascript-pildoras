<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 31 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

</head>

<style>
	label.error{
		/*color: #212121;*/
		color: #ff5252;
		font-weight: bolder;
		font-family: 'Raleway', sans-serif;
		font-size: 14px;
		letter-spacing: 1px;
	}

	input.error{
		border: 1px solid #FF5252;
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
		<h1 class="text-center text-primary">Lección # 31 -- Validación De Formularios</h1>
	</div>

	<div class="container">
		<div class="row centrar-contenido">
			<div class="col-sm-2"></div>

			<div class="col-sm-8 border rounded border-info centrar-contenido">
				<div class="card bg-light">
					<div class="card-header">Validación De Formularios</div>
					<div class="card-body">
						<h4 class="text-center">jQuery Validate</h4>
						<form action="" id="frm-validation" method="GET">
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" name="txt-nombre" id="txt-nombre" class="form-control">
							</div>
							
							<div class="form-group">
								<label for="">Apellidos</label>
								<input type="text" name="txt-apellidos" id="txt-apellidos" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Fecha</label>
								<input type="text" name="txt-fecha" id="txt-fecha" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Edad</label>
								<input type="text" name="txt-edad" id="txt-edad" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Código Postal</label>
								<input type="text" name="txt-postal" id="txt-postal" class="form-control">
							</div>

							<div class="form-group">
								<label for="">E-Mail</label>
								<input type="email" name="txt-email" id="txt-email" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Sitio</label>
								<input type="text" name="txt-sitio" id="txt-sitio" class="form-control">
							</div>

							<div class="form-group">
								<select name="slct-pais" id="slct-pais" class="form-control custom-select">
									<option selected>Selecciona Tu País</option>
									<option value="BEL">Belice</option>
									<option value="GT">Guatemala</option>
									<option value="HON">Honduras</option>
									<option value="SV">El Salvador</option>
									<option value="NC">Nicaragua</option>
									<option value="CR">Costa Rica</option>
									<option value="PN">Panamá</option>
								</select>
							</div>

							<div class="form-group">
								<input type="submit" name="btn-send" value="Enviar" class="btn btn-block btn-danger">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

<script>
	$(document).ready(function() {
		$("#frm-validation").validate({

			rules: {
				'txt-nombre': {
					required: true,
					minlength: 3
				},

				'txt-apellidos': {
					required: true,
					minlength: 3
				},
				
				'txt-fecha': {
					date: true,
					required: true
				},
				
				'txt-edad':{
					required: true,
					number: true,
					range: [1, 105]
				},

				'txt-postal': "required",

				'txt-email': {
					required: true,
					email: true
				},

				'txt-sitio': {
					url: true
				}
			},


			messages: {
				'txt-nombre': {
					required: "Este Campo Es Obligatorio",
					minlength: "Debes Ingresar Como Mínimo {0} Caracteres"
				},

				'txt-apellidos': {
					required: "Este Campo Es Obligatorio",
					minlength: "Debes Ingresar Como Mínimo {0} Caracteres"
				},

				'txt-fecha': {
					required: "Este Campo Es Obligatorio",
					date: "El Formato De Fecha Debe Ser MM/DD/AAAA"
				},

				'txt-edad': {
					required: "Este Campo Es Obligatorio",
					number: "Debes Ingresar Un Número",
					range: "La Edad Debe Estar Entre 1 y 105 Años"
				},

				'txt-postal': {
					required: "Este Campo Es Obligatorio",
				},

				'txt-email': {
					required: "Este Campo Es Obligatorio",
					email: "Formato De Correo Incorrecto"
				},

				'txt-sitio': {
					url: "Formato De URL Incorrecto"
				}
			}
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
