<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 21 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#menu{
		position: absolute;
		left: -36%;
		top: 0;
		width: 213px;
		height: auto;
		background-color: #ff9;
		padding: 15px;
	}

	#boton{
		position: absolute;
		font-weight: bolder;
		left: 225px;
		top: 5px;
		width: 21px;
		height: 25px;
		z-index: -1;
		cursor: pointer;
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
		<h1 class="text-center text-primary">Lección # 21 -- Efectos y Animaciones</h1>
	</div>

	<div class="container">
		<h3 class="text-center text-danger">Ejemplo No Práctico</h3>

		<div class="row">
			<div class="col-sm-8 border rounded centrar-contenido" id="contenido">
				<div class="principal">
					<h3 class="text-center text-secondary">Login Deslizante</h3>
					<button class="btn btn-outline-success" id="btn_login">
						Ver / Ocultar Login
					</button>
				</div>
			</div>

			<div class="pull-right bg-dark col-sm-4 rounded centrar-contenido" id="login">
				<h5 class="text-center text-white">Login</h5>

				<form>
					<div class="form-group">
						<label for="" class="control-label text-white">Usuario</label>
						<input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label text-white">Contraseña</label>
						<input type="text" name="txt_pass" id="txt_pass" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="btn_send" value="Enviar" class="btn btn-outline-warning btn-block">
					</div>
				</form>
			</div>
		</div><br>


		<div class="row">
			<div class="border border-secondary centrar-contenido rounded col-sm-12">
				<img src="../img/jslogo.png" class="img-responsive" id="logo_js" title="Clickeame">
			</div>
		</div><br>
		

		<div class="row">
			<div class="border border-warning centrar-contenido rounded col-sm-12">
				<img src="../img/mustang74.jpg" class="img-responsive" id="img_1" width="250" style="opacity: 0.5;">
			</div>
		</div><br>


		<div class="row">
			<div class="border border-info centrar-contenido rounded col-sm-12 bg-info text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptatibus dignissimos, illum dolore necessitatibus repellendus in 
				veniam asperiores aut totam perspiciatis, odio vero officiis voluptates repellat pariatur neque ratione et.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur amet excepturi, aliquam necessitatibus praesentium, sequi vitae, quos ab, 
				temporibus minima asperiores! Ab aut quibusdam laborum ipsa, ad illo, fugit nobis!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, doloribus sint repellat ducimus dolorum, ex? Quos blanditiis sapiente nobis optio 
				possimus? In ea, voluptates. Odio magni quidem officia dignissimos culpa.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ea beatae quisquam reprehenderit nisi, quod sapiente laborum molestiae, aut fugit 
				repellendus provident atque minima accusamus ut quia aspernatur maiores ratione.

				<div id="menu">
					<div id="boton" class="text-danger">X</div>

					<ul class="list-group">
						<li class="list-group-item list-group-item-warning">Opción 1</li>
						<li class="list-group-item list-group-item-warning">Opción 2</li>
						<li class="list-group-item list-group-item-warning">Opción 3</li>
						<li class="list-group-item list-group-item-warning">Opción 4</li>
						<li class="list-group-item list-group-item-warning">Opción 5</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#login").hide();

		$("#btn_login").click(function(){
			$("#login").slideToggle(4000);
		});

		$("#logo_js").click(function(){
			$(this).animate({
				marginLeft: "+=130px",
				marginTop: "3px"},
				2000
			);
		});


		$("#img_1").mouseover(function(){
			$(this).animate({
				opacity: 1
			}, 400
			);
		});


		$("#img_1").mouseout(function(){
			$(this).animate({
				opacity: 0.5
			}, 400
			);
		});


		$("#boton").toggle(function() {
			$("#menu").animate({
				left : "0px"
				},500
			);
		}, function() {
			$("#menu").animate({
				left : "-36%"
				},500
			);
		});
		
		
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
