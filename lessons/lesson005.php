<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #5 > JavaScript</title>
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">


	<script>
		/*var precioCoche = 60000;
		var dineroAhorrado = prompt('Introduce La Cantidad De La Cual Dispones....');
		var edad = prompt('Introduce Tu Edad');
		var diferencia = dineroAhorrado - precioCoche;
		var diferenciaEdad = edad - 18;

		if (dineroAhorrado >= precioCoche  && edad >= 18) {
			alert("Enhorabuena Puedes Comprar El Coche...!!!");
		}else{
			if (diferencia < 0 ) {
				alert('Lo Sentimos, No Dispones De La Cantidad Necesaria Para Comprar El Coche, Te Faltan $ ' + Math.abs(diferencia));	
			}

			if (diferenciaEdad < 0) {
				alert('No Cuentas Con La Edad Adecuada, Te Faltan ' + Math.abs(diferenciaEdad) + ' Años');
			}
			
		}

		alert("El Script Se Ha Ejecutado...");*/
	</script>
	
</head>

<body id="cuerpo">

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div>

	<div class="page-header">
		<h1 class="text-center text-primary">Lección # 5 -- Estructuras De Control (IF)</h1>
	</div>

	<div class="container">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<form action="" class="form-horizontal" method="POST" name="frm1" id="frm-1">
				<div class="form-group">
					<label for="" class="control-label">Nombre: </label>
					<input type="text" name="txtname" id="txtname" class="form-control">
				</div>

				<div class="form-group">
					<label for="" class="control-label">Apellidos: </label>
					<input type="text" name="txtapellidos" id="txtapellidos" class="form-control">
				</div>

				<div class="form-group">
					<label for="" class="control-label">Edad: </label>
					<input type="text" name="txtedad" id="txtedad" class="form-control">
				</div>

				<div class="form-group">
					<label for="" class="control-label">DUI: </label>
					<input type="text" name="txtdui" id="txtdui" class="form-control">
				</div>

				<div class="form-group">
					<input type="submit" name="btn-send" value="Enviar" id="btn-send" class="btn btn-success">  
					<input type="reset" name="btn-reset" value="Restablecer" id="btn-reset" class="btn btn-primary">
					<button class="btn btn-default" id="btn-calculator">
						<i class="fa fa-calculator" aria-hidden="true"></i>Calculadora
					</button>
				</div>
			</form>
		</div>
		<div class="col-sm-1"></div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	var cuerpo = document.getElementById("cuerpo");
	var colorWeb = prompt("Introduce El Color De Fondo. Azul/Verde/Rojo").toLowerCase();

	if (colorWeb == "azul") {
		cuerpo.style.backgroundColor = "#90caf9";
	}
	else if (colorWeb == "rojo") {
		cuerpo.style.backgroundColor = "#ef9a9a";	
	}
	else if (colorWeb == "verde") {
		cuerpo.style.backgroundColor = "#a5d6a7";	
	}else{
		alert("Ese Color No Es Admitido");
	}
</script>

<script src="../js/lesson005.js"></script>

</body>
</html>