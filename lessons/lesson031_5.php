<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 31.5 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#form_data label.error{
		font-size: 0.8em;
		color: #FFC107;
		font-weight: bold;
		display: block;
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
		<h1 class="text-center text-primary">Lección # 31.5 -- Ejemplo Práctico</h1>
	</div>

	<div class="container">
		<div class="row centrar-contenido">
			<div class="col-sm-2"></div>

			<div class="col-sm-8">
				<h3 class="text-left text-danger">Ejemplo Un Tanto Práctico</h3><br>

				<h5 class="text-center text-primary">Completa Todos Los Campos</h5><hr>

				<div class="card text-white bg-dark">
					<div class="card-body">
						<form id="form_data" method="get">
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control">
							</div>

							<div class="form-group">
								<label for="">E-mail</label>
								<input type="email" name="mail" id="mail" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Contraseña</label>
								<input type="password" name="pass" id="pass" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Confirma Contraseña</label>
								<input type="password" name="pass_confirm" id="pass_confirm" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Aficiones</label>

								<div class="row" style="padding-left:15px;">
									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="checkbox" name="aficiones" id="comer" class="form-check-input required" title="Selecciona Una Opción"> Comer
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="checkbox" name="aficiones" id="beber" class="form-check-input"> Beber
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="checkbox" name="aficiones" id="dormir" class="form-check-input"> Dormir
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="">Fecha De Nacimiento</label>
								<input type="text" name="fecha" id="fecha" class="form-control">
							</div>

							<div class="form-group">
								<select name="planeta" id="planeta" class="form-control custom-select">
									<option selected>Selecciona Tu Planeta</option>
									<option value="Tierra">Tierra</option>
									<option value="Marte">Marte</option>
									<option value="Saturno">Saturno</option>
									<option value="Mercurio">Mercurio</option>
									<option value="Venus">Venus</option>
									<option value="Jupiter">Júpiter</option>
									<option value="Urano">Urano</option>
									<option value="Neptuno">Neptuno</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Comentarios</label>
								<textarea name="comentarios" id="comentarios" cols="30" rows="10" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label for="">Deseas Recibir Correos De Nuestra Parte?</label>
								<div class="row" style="padding-left:15px;">
									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="radio" name="pregunta" id="si" class="form-check-input"> Sí
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="radio" name="pregunta" id="porsupuesto" class="form-check-input"> Por Supuesto
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label for="" class="form-check-label">
											<input type="radio" name="pregunta" id="no" class="form-check-input"> Tengo Elección?
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="submit" name="enviar" value="Enviar" id="enviar" class="btn btn-outline-warning btn-block">
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
		$("#form_data").validate({
			rules:{
				'nombre': {
					required: true,
					minlength: 8
				},

				'mail':{
					required: true,
					email: true
				},

				'pass': {
					required: true,
					rangelength: [6, 16]
				},

				'pass_confirm': {
					required: true,
					rangelength: [6, 16],
					equalTo: "#pass"
				},

				'fecha': {
					date: true
				},

				'planeta': {
					required: true
				}
			},



			messages: {
				'nombre': {
					required: "Este Campo Es Requerido",
					minlength: "Introduce Por Lo Menos {0} Carateres"
				},

				'mail': {
					required: "Este Campo Es Requerido",
					email: "Formato Incorrecto"
				},

				'pass': {
					required: "Este Campo Es Requerido",
					rangelength: "La Contraseña Debe Tener Entre 6 y 16 Caracteres"
				},

				'pass_confirm': {
					required: "Este Campo Es Requerido",
					rangelength: "La Contraseña Debe Tener Entre 6 y 16 Caracteres",
					equalTo: "Las Contraseñas No Coinciden"
				},

				'fecha': {
					date: "Formato MM/DD/AAAA"
				},

				'planeta': {
					required: "Este Campo Es Requerido",
				}
			},


			errorPlacement: function (error, element) {
				 if (element.is(":radio") || element.is(":checkbox")) {
				 	error.appendTo(element.parent());
				 }else{
				 	error.insertAfter(element);
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
