<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 15 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 15 -- Cambiando Atributos CSS Con JQuery</h1>
	</div>

	<div class="container">

		<div class="bg-dark text-white centrar-contenido">
			<h3 class="text-center">Funciones Necesarias</h3>

			<div class="row">
				<div class="col-sm-4 text-center">.addClass()</div>
				<div class="col-sm-4 text-center">.toggleClass()</div>
				<div class="col-sm-4 text-center">.removeClass()</div>
			</div>
		</div><br>
		

		<div class="row centrar-contenido">
			<div class="col-sm-12">
				<div class="row text-center">
					<div class="col-sm-6">
						<!--button class="btn btn-primary" id="btn-destacados">
							Destacados
						</button-->

						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" aria-label="CheckBox Destacados" id="check-extenos">
								<!--input type="radio" name="rd-link" id="check-extenos"-->
							</span>
							<input type="text" value="Enlaces Externos" class="form-control">
						</div>
					</div>

					<div class="col-sm-6">
						<!--button class="btn btn-secondary" id="btn-info">
							Información
						</button-->
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" aria-label="CheckBox Destacados" id="check-internos">
								<!--input type="radio" name="rd-link" id="check-internos"-->
							</span>
							<input type="text" value="Enlaces Internos" class="form-control">
						</div>
					</div>
				</div><br>
			</div>

			<div class="col-sm-4" id="contiene-enlances">
				<ul class="list-group">
					<li class="list-group-item enlace-externo">
						<a href="https://www.facebook.com/Sear022" class="" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>acebook
						</a>
					</li>

					<li class="list-group-item enlace-local">
						<a href="#" class="">Enlace 2</a>
					</li>
					
					<li class="list-group-item enlace-externo">
						<a href="https://twitter.com/534r_022" class="" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i> Twitter
						</a>
					</li>
					
					<li class="list-group-item">
						<a href="#" class="">Enlace 4</a>
					</li>
					
					<li class="list-group-item enlace-externo">
						<a href="https://github.com/searito" class="" target="_blank">
							<i class="fa fa-github-alt" aria-hidden="true"></i> Github
						</a>
					</li>

					<li class="list-group-item enlace-local">
						<a href="#" class="">Enlace 6</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-8"></div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		/*$("a[href^='https://']").addClass('list-group-item-danger');  // --- AL CARGAR LA PAGINA ASIGNA CLASE A LOS ENLANCES EN VENTANAS NUEVAS --- //
		document.getElementById("btn-destacado").addEventListener("click", resaltandoEnlaces, false);
		document.getElementById("btn-info").addEventListener("click", resaltandoLocales, false);*/

		document.getElementById("check-extenos").addEventListener("click", resaltandoEnlaces, false);
		document.getElementById("check-internos").addEventListener("click", resaltandoLocales, false);
	});

	function resaltandoEnlaces () {
		 /*$(".enlace-local").removeClass('list-group-item-primary');
		 $(".enlace-externo").addClass('list-group-item-primary');*/

		 $(".enlace-externo").toggleClass('list-group-item-primary');
	}

	function resaltandoLocales () {
		/*$(".enlace-externo").removeClass('list-group-item-primary');
		 $(".enlace-local").addClass('list-group-item-primary');*/

		 $(".enlace-local").toggleClass('list-group-item-warning');
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
