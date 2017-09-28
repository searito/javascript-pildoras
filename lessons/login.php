<?php 
	$passAcceso = "12345678";
	$userAcceso = "admin";

	$comparaUsuario = isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];
	$comparaPass = isset($_GET['pwd']) ? $_GET['pwd'] : $_POST['pwd'];

	if ($comparaUsuario == $userAcceso && $comparaPass == $passAcceso) {
		//echo "<div class='alert alert-success' role='alert'>Acceso Autorizado</div>";
		echo "exito";
	}else{
		//echo "<div class='alert alert-danger' role='alert'>Usuaio O Contraseña Incorrectos</div>";
		echo "problema";
	}
?>