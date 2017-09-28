<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 23 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#menu{
		width: 245px;
		background-color: rgb(110,138,195);
		padding: 20px 20px 0 20px;
		position: absolute;
		left: -220px;
		z-index: 101;

	}

	#menu img{
		margin-bottom: 20px;
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
		<h1 class="text-center text-primary">Lección # 23 -- Plugins</h1>
	</div>

	<div class="container">
		<h2 class="text-center text-danger">Libreria jQuery Easing</h2>
		<div class="" id="menu">
			<img src="../img/charger70.jpg" alt="blue" class="img-thumbnail" width="200">
			<img src="../img/Impala.jpg" alt="green" class="img-thumbnail" width="200">
			<img src="../img/mustang74.jpg" alt="purple" class="img-thumbnail" width="200">
			<img src="../img/mustangcobra75.jpg" alt="red" class="img-thumbnail" width="200">
		</div>

		<h3 class="text-left text-primary">Menús Deslizantes</h3>

		<p>Pasa El Ratón Por Encima De La Pestaña Izquierda</p>
	</div>

</div>

<script src="../js/jquery.js"></script>
<script src="../js/jquery-easing.js"></script>

<script>
	$(document).ready(function() {
		$("#menu").hover(function() {
			$(this).stop().animate({
				left: "0px"
				}, 500, "easeInSine"
			);
		}, function() {
			$(this).stop().animate({
				left: "-220px"
			}, 1500, "easeOutBounce");
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
