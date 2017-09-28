<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 13 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 13 -- Agregando Contenido Con JQuery</h1>
	</div>

	<div class="container">

		<div class="bg-dark text-white centrar-contenido">
			<h3 class="text-center">Funciones Para Agregar Contenido</h3>

			<div class="row">
				<div class="col-sm-4 text-center">.html( "Sustituye Contenido Junto Con Estructura HTML" )</div>
				<div class="col-sm-4 text-center">.text( "Agrega Contenido Pero Sin Etiquetas HTML" )</div>
				<div class="col-sm-4 text-center">.after( "Agrega Después Del Contenedor Especificado" )</div>
				<div class="col-sm-4 text-center">.append( "Agrega Al Final" )</div>
				<div class="col-sm-4 text-center">.prepend( "Agrega Al Inicio" )</div>
				<div class="col-sm-4 text-center">.before( "Agregar Antes Del Contendor Especificado" )</div>
			</div>
		</div>

		<div class="row">
			<div id="contenedor" class="centrar-contenido">
				<div id="errores" class="border border-primary">
					<h4 class="text-danger">Errores</h4>
				</div>
			</div>

			
			<div id="contenedorbtns" class="centrar-contenido">
				<button id="btn-html" class="btn btn btn-outline-primary">Ver .html()</button>
				<button id="btn-append" class="btn btn-outline-secondary">Ver .append()</button>
				<button id="btn-prepend" class="btn btn-outline-success">Ver .prepend()</button>
				<button id="btn-before" class="btn btn-outline-danger">Ver .before()</button>
				<button id="btn-after" class="btn btn-outline-warning">Ver .after()</button>
				<button id="btn-text" class="btn btn-outline-info">Ver .text()</button>
			</div>
		</div><br>

		<div class="row centrar-contenido">
			<div id="cont-html" class="border centrar-contenido col-sm-12">
				<div id="error-html">
					<h4 class="text-danger">Ola Ke Ase</h4>
				</div>
			</div><br>

			<div id="cont-append" class="border centrar-contenido col-sm-12">
				<div id="error-append">
					<h4 class="text-center text-danger">Esto Es Texto Generado Con HTML...</h4>
				</div>
			</div>

			<div id="cont-prepend" class="border centrar-contenido col-sm-12">
				<div id="error-prepend">
					<h4 class="text-center text-danger">Y Esto Es Texto Generado Con HTML...</h4>
				</div>
			</div>
			<div id="cont-before" class="border centrar-contenido col-sm-12">
				<div id="error-before" class="contenido-centrado border">
					<h4 class="text-center text-danger">Texto HTML</h4>
				</div>
			</div>

			<div id="cont-after" class="border centrar-contenido col-sm-12">
				<div id="error-after" class="contenido-centrado border">
					<h4 class="text-center text-danger">Texto HTML</h4>
				</div>
			</div>

			<div id="cont-text" class="border centrar-contenido col-sm-12">
				<div id="error-text" class="contenido-centrado border">
					<h4 class="text-center text-danger">Texto HTML</h4>
				</div>
			</div>
		</div><br><br>

		<div class="row">
			<div class="col-md-7">
				<form action="" method="GET">
					<div class="form-group">
						<label for="" class="control-label">Usuario</label>
						<input type="text" name="" class="form-control" id="txt-user">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Nombre</label>
						<input type="text" name="" class="form-control" id="txt-name">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Apellidos</label>
						<input type="text" name="" class="form-control" id="txt-lastname">
					</div>

					<div class="form-group">
						<button class="btn btn-success btn-block" id="enviar">Enviar</button>
					</div>
				</form>
			</div>

			<div class="col-sm-5">
				<div class="form-group">
					<span id="mensaje-user" class="text-danger"></span>
				</div>

				<div class="form-group">
					<span id="mensaje-name" class="text-danger"></span>
				</div>

				<div class="form-group">
					<span id="mensaje-lastname" class="text-danger"></span>
				</div>
			</div>
		</div>

	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#contenedor").hide();
		$("#cont-html").hide();
		$("#cont-append").hide();
		$("#cont-prepend").hide();
		$("#cont-before").hide();
		$("#cont-after").hide();
		$("#cont-text").hide();

		$("#enviar").click(function(e){
			var nombreUsuario = document.getElementById("txt-user").value;
			var userName = $("#txt-name").val();
			var userLastname = $("#txt-lastname").val();

			if (nombreUsuario == "") {
				$("#txt-user").addClass('form-control is-invalid').after("El Campo Usuario Está Vacio...");
			}

			if (userName == "") {
				$("#txt-name").addClass('form-control is-invalid').after("El Campo Nombre Está Vacio...");	
			}

			if (userLastname == "") {
				$("#txt-lastname").addClass('form-control is-invalid').after("El Campo Apellidos Está Vacio...");
			}

			e.preventDefault();		
		});

		$("#btn-html").click(function(){
			$("#cont-html").show();
			$("#cont-html").html('<h4 class="text-danger text-center">Texto Reemplazado Con La Función .html()</h4>')
		});

		$("#btn-append").click(function(){
			$("#cont-append").show();
			$("#cont-append").append('<h4 class="text-danger text-center">Y Esto Es Texto Agregado Con La Función append()</h4>');
		});

		$("#btn-prepend").click(function(){
			$("#cont-prepend").show();
			$("#cont-prepend").prepend('<h4 class="text-danger text-center">Texto Agregado Con La Función prepend()</h4>');
		});

		$("#btn-before").click(function(){
			$("#cont-before").show();
			$("#error-before").before('<h4 class="text-danger text-center">Texto Agregado Con La Función before()</h4>');
		});

		$("#btn-after").click(function(){
			$("#cont-after").show();
			$("#error-after").after('<h4 class="text-danger text-center">Texto Agregado Con La Función after()</h4>');
		});

		$("#btn-text").click(function(){
			$("#cont-text").show();
			$("#cont-text").text("Texto Agregado Con La Función text()");
		});
	});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>