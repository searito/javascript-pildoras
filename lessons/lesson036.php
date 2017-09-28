<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 36 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#mapa{
		height: 500px;
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
		<h1 class="text-center text-primary">Lección # 36 -- Integrar Google Maps</h1>
	</div>

	<div class="container">
		<h3 class="text-center text-danger text-capitalize">Mapa</h3>
		<div class="row centrar-contenido">
			<div class="col-sm-7 border rounded" id="mapa"></div>
		</div>
	</div>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZNurA6uKkU2KWA6vpmwGw1s0WM1FMmc&callback=initMap"async defer></script>

<script>
	var map;

	function initMap () {
		map = new google.maps.Map(document.getElementById('mapa'), {
	        center: {lat: 13.8592858, lng: -89.8057953},
	        zoom: 16
        });

	}
</script>


<script src="../js/jquery.js"></script>
<!--script src="../js/goMap.js"></script>

<script>
	$(document).ready(function() {
		$("#mapa").goMap({
			latitude: 13.8592858,
			longitude: -89.8057953,
			zoom: 9
		});
	});
</script-->


<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
