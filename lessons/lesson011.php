<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ejemplo Práctico</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

	<script>
		var cifra = "";
		var acumulado = 0;
		var primerOperacion = true;
		var sumar = false;
		var restar = false;
		var multi = false;
		var divi = false;

		function displayNumeros (numero) {
			document.getElementById("display").value = cifra + numero;
			cifra = document.getElementById("display").value;
		}


		function suma () {
			if (restar){
				acumulado = acumulado - parseInt(cifra);
				document.getElementById("display").value = acumulado;	
			}else{
				acumulado = acumulado + parseInt(cifra);
				document.getElementById("display").value = acumulado;	
			}
			
			cifra = "";
			sumar = true;
			restar = false;
			primerOperacion = false;
		}


		function resta (){
			if (primerOperacion == false) {
				if (sumar) {
					acumulado = acumulado + parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}else{
					acumulado = acumulado - parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}	
			}else{
				acumulado = parseInt(cifra);
				primerOperacion == false;
			}
			
			
			cifra = "";
			sumar = false;
			restar = true;	
		}


		function multiplicacion () {
			if (primerOperacion == false) {
				if (sumar) {
					acumulado = acumulado + parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}
				else if (restar) {
					acumulado = acumulado - parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}else{
					acumulado = acumulado * parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}
			}else{
				acumulado = parseInt(cifra);
				console.log(acumulado);
				primerOperacion == false;
			}

			cifra = "";
			sumar = false;
			restar = false;	
			multi = true;
		}


		function division(){
			if (primerOperacion == false) {
				if (sumar) {
					acumulado = acumulado + parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}
				else if (restar) {
					acumulado = acumulado - parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}else if(multi){
					acumulado = acumulado * parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}else{
					acumulado = acumulado / parseInt(cifra);	
					document.getElementById("display").value = acumulado;
				}
			}else{
				acumulado = parseInt(cifra);
				console.log(acumulado);
				primerOperacion == false;
			}

			cifra = "";
			sumar = false;
			restar = false;	
			multi = false;
			divi = true;
		}


		function igual () {
			 if (sumar) {
			 	document.getElementById("display").value = acumulado + parseInt(cifra);
			 }
			 else if (restar == true) {
			 	document.getElementById("display").value = acumulado - parseInt(cifra);	
			 }
			 else if (multi) {
			 	document.getElementById("display").value = acumulado * parseInt(cifra);		
			 }
			 else if (divi == true) {
			 	document.getElementById("display").value = acumulado / parseInt(cifra);	
			 }

			 acumulado = parseInt(document.getElementById("display").value);
			 cifra = 0;
		}


		function reseteo(){
			
		}

	</script>
</head>

<style>
	.con-padding{ padding: 30px 20px;}

	.cuarto{ width: 100%;}
</style>

<body>

<div class="container-fluid">
	<div class="row">
		<a href="../index.html" class="btn btn-primary btn-back" title="Volver A Inicio">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
	</div><br>

	<div class="jumbotron">
		<h1 class="text-center text-primary">Ejemplo Práctico</h1>
	</div>

	<div class="container">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 border con-padding bg-dark">
			<div class="col-sm-12">
				<input type="text" name="display" id="display" class="form-control">
			</div><br>

			<div class="row">
				<div class="col-sm-3">
					<input type="button" name="btn-suma" value="+" id="btn-suma" class="btn btn-primary cuarto" onclick="suma();">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn-resta" value="-" id="btn-resta" class="btn btn-primary cuarto" onclick="resta();">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn-multiplicacion" value="*" id="btn-multiplicacion" class="btn btn-primary cuarto" onclick="multiplicacion();">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn-division" value="/" id="btn-division" class="btn btn-primary cuarto" onclick="division();">
				</div>
			</div><br>


			<div class="row">
				<div class="col-sm-3">
					<input type="button" name="btn7" value="7" id="btn7" class="btn btn-secondary cuarto" onclick="displayNumeros(7);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn8" value="8" id="btn8" class="btn btn-secondary cuarto" onclick="displayNumeros(8);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn9" value="9" id="btn9" class="btn btn-secondary cuarto" onclick="displayNumeros(9);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btnreset" value="C" id="btnreset" class="btn btn-danger cuarto" onclick="reseteo();">
				</div>
			</div><br>


			<div class="row">
				<div class="col-sm-3">
					<input type="button" name="btn4" value="4" id="btn4" class="btn btn-secondary cuarto" onclick="displayNumeros(4);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn5" value="5" id="btn5" class="btn btn-secondary cuarto" onclick="displayNumeros(5);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn6" value="6" id="btn6" class="btn btn-secondary cuarto" onclick="displayNumeros(6);">
				</div>

				<div class="col-sm-3"></div>
			</div><br>


			<div class="row">
				<div class="col-sm-3">
					<input type="button" name="btn1" value="1" id="btn1" class="btn btn-secondary cuarto" onclick="displayNumeros(1);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn2" value="2" id="btn2" class="btn btn-secondary cuarto" onclick="displayNumeros(2);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn3" value="3" id="btn3" class="btn btn-secondary cuarto" onclick="displayNumeros(3);">
				</div>

				<div class="col-sm-3"></div>
			</div><br>


			<div class="row">
				<div class="col-sm-6">
					<input type="button" name="btn0" value="0" id="btn0" class="btn btn-secondary cuarto" onclick="displayNumeros(0);">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btn-punto" value="." id="btnpunto" class="btn btn-primary cuarto">
				</div>

				<div class="col-sm-3">
					<input type="button" name="btnigual" value="=" id="btnigual" class="btn btn-primary cuarto" onclick="igual();">
				</div>

			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	document.getElementById("display").value = 0;
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>