<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #4 > JavaScript</title>
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
	
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div>

	<div class="page-header">
		<h1 class="text-center text-primary">Lección # 4 -- POO</h1>
	</div>

	<div class="container">
		<input type="button" name="boton1" value="Botón 1" id="boton1">
		<input type="button" name="btn2" value="Botón 2" id="btn2">
		<input type="text" name="txt" id="txt">
	</div>


	<script>
		var miBoton = document.getElementById("boton1");  // --- ALMACENAR EL BOTON CON ID BOTON1 EN LA VARIABLE ---- //
		var btn2 = document.getElementById("btn2");
		var txt = document.getElementById("txt");

		miBoton.style.width = "250px";
		miBoton.style.height = "250px";
		miBoton.style.backgroundColor = "#1e88e5";
		miBoton.style.color = "#fff";
		
		btn2.style.width = "250px";
		btn2.style.height = "250px";
		//btn2.style.backgroundColor = "#e6ee9c";
		//btn2.style.color = "#fff";
		btn2.focus();

		txt.style.background = "#ffcdd2";
		txt.value = "Hola...";
		txt.style.height = "40px";
	</script>

</div>

<script src="../js/jquery.js"></script>

</body>
</html>