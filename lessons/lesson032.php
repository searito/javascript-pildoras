<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 32 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 32 -- AJAX</h1>
	</div>

	<div class="container">
		<h3 class="text-center text-primary">Carga De Páginas Externas</h3>

		<div class="row centrar-contenido bg-dark" id="noticias">
			<div class="col-sm-4">
				<a href="lesson32_1.php" class="btn btn-outline-info btn-block">Página 1</a>
			</div>

			<div class="col-sm-4">
				<a href="lesson32_2.php" class="btn btn-block btn-outline-danger">Página 2</a>
			</div>

			<div class="col-sm-4">
				<a href="lesson32_3.php" class="btn btn-outline-warning btn-block">Página 3</a>
			</div>
		</div><br>

		<div class="row centrar-contenido border border-primary rounded" id="contenido_externo"></div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("#noticias a").click(function() {
			var pWeb = $(this).attr('href');

			$("#contenido_externo").load(pWeb);

			return false;
		});
	});
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
