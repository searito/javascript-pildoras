<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 19 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 19 -- Eventos Funcion hover() y toggle()</h1>
	</div>

	<div class="container">
		<div class="row centrar-contenido text-center" id="galeria">
			<div class="col-sm-4"><img src="../img/Impala.jpg" class="img-responsive img-thumbnail" id="img_1"></div>
			<div class="col-sm-4"><img src="../img/jslogo.png" class="img-responsive" id="img_2"></div>
			<div class="col-sm-4"><img src="../img/mustangcobra75.jpg" class="img-responsive img-thumbnail" id="img_3"></div>
		</div>

		<div class="centrar-contenido">
			<div id="msg_img1" class="alert alert-primary" role="alert">
				Chevrolet Impala 1969 --> hover( para mouseover ) y toggle( para click )
			</div>

			<div id="msg_img2" class="alert alert-primary" role="alert">
				Logo Javascript --> hover( para mouseover ) y toggle( para click )
			</div>

			<div id="msg_img3" class="alert alert-primary" role="alert">
				Mustang Cobra 75 --> hover( para mouseover ) y toggle( para click )
			</div>

		</div>

		<div class="row centrar-contenido">
			
			<div id="" class="col-sm-4">
				
				<ul class="list-group">
					
					<li id="li_archivo" class="list-group-item list-group-item">
						<i class="fa fa-file-archive-o" aria-hidden="true"></i>
						<a href="#">Archivo</a> 
					</li>
					
					<div id="submenu1">
						<li id="sub1_1" class="list-group-item list-group-item-secondary"><a href="#">Opción 1</a></li>
						<li id="sub1_2" class="list-group-item list-group-item-secondary"><a href="#">Opción 2</a></li>
						<li id="sub1_3" class="list-group-item list-group-item-secondary"><a href="#">Opción 3</a></li>
					</div>
				</ul>
			</div>

			<div id="" class="col-sm-4">

				<ul class="list-group">
					<li id="li_edicion" class="list-group-item list-group-item">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<a href="#">Edición</a> 
					</li>

					<div id="submenu2">
						<li id="sub2_1" class="list-group-item list-group-item-secondary"><a href="#">Opción 1</a></li>
						<li id="sub2_2" class="list-group-item list-group-item-secondary"><a href="#">Opción 2</a></li>
						<li id="sub2_3" class="list-group-item list-group-item-secondary"><a href="#">Opción 3</a></li>
					</div>
				</ul>
			</div>

			<div id="" class="col-sm-4">

				<ul class="list-group">
					<li id="li_herramientas" class="list-group-item list-group-item">
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<a href="#">Herramientas</a> 
					</li>
					<div id="submenu3">
						<li id="sub3_1" class="list-group-item list-group-item-secondary"><a href="#">Opción 1</a></li>
						<li id="sub3_2" class="list-group-item list-group-item-secondary"><a href="#">Opción 2</a></li>
						<li id="sub3_3" class="list-group-item list-group-item-secondary"><a href="#">Opción 3</a></li>
					</div>
				</ul>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#msg_img1").hide();
		$("#img_1").hover(ponMensaje, quitaMensaje);

		$("#msg_img2").hide();
		$("#img_2").hover(function(){ // --- PONGO COMO PARAMETROS 2 FUNCIONES ANONIMAS ---//
			$("#msg_img2").show();
		}, 
		function(){
			$("#msg_img2").hide();	
		});

		$("#msg_img3").hide();
		$("#img_3").hover(function(){
			$("#msg_img3").show();
		}, 
		function(){
			$("#msg_img3").hide();	
		});


		$("#submenu1").hide();
		$("#submenu2").hide();
		$("#submenu3").hide();

		/*$("#li_archivo").toggle(function() {
			$("#submenu1").show();
		}, function() {
			$("#submenu1").hide();
		});*/
		
	});

	function ponMensaje () {
		 $("#msg_img1").show();
	}

	function quitaMensaje () {
		 $("#msg_img1").hide();
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
