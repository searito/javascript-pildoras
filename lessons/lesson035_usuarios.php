<?php
	$usuario = isset($_GET['txt_nombre']) ? $_GET['txt_nombre'] : $_POST['txt_nombre'];

	$arrayUser = new stdClass(); // --- ARRAY CAPAZ DE ALMACENAR UN JSON --//
	$noUser = "No Existe El Usuario";

	/*if ($usuario == "Sear") {
		$arrayUser->Nombre = "Sear";
		$arrayUser->Apellido = "Clímaco";
		$arrayUser->Edad = "25";

		$json = json_encode($arrayUser);

		echo($json);
	}else{
		$json = json_encode($noUser);

		echo($json);
	}*/

	switch ($usuario) {
		case 'Sear':
			$arrayUser->Nombre = "Sear";
			$arrayUser->Apellido = "Clímaco";
			$arrayUser->Edad = "25";

			$json = json_encode($arrayUser);

			echo($json);
			break;

		case 'Sandra':
			$arrayUser->Nombre = "Sandra";
			$arrayUser->Apellido = "Argueta";
			$arrayUser->Edad = "25";

			$json = json_encode($arrayUser);

			echo($json);
			break;
		
		case 'Paty':
			$arrayUser->Nombre = "Paty";
			$arrayUser->Apellido = "Fuentes";
			$arrayUser->Edad = "20";

			$json = json_encode($arrayUser);

			echo($json);
			break;

		case 'Luis':
			$arrayUser->Nombre = "Luis";
			$arrayUser->Apellido = "Canizales";
			$arrayUser->Edad = "26";

			$json = json_encode($arrayUser);

			echo($json);
			break;

		default:
			$json = json_encode($noUser);
			echo($json);
			break;
	}
?>