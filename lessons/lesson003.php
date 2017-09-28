<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #3 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 3</h1>
	</div>

	<div class="container">
		<script>
			var articulos = ["Sombrero", "Camisa", "Smoking", "Corbata", "Pantalón", "Mokasines"];

			document.write('<p>'+ 'El Primer Artículo Es <spam class="normal-text">'+ articulos[0] +'</spam></p>');
			document.write('<p>'+ 'El Último  Artículo Es <spam class="normal-text">'+ articulos[articulos.length - 1] +'</spam></p>');

			articulos.unshift("Gorra");  // ---------------  AGREGO UN ELEMENTO NUEVO AL ARRAY ------------------- // 

			document.write('<p>'+ 'El Siguiente Elemento Fué Agregado <spam class="normal-text">'+ articulos[0] +'</spam></p>');

			articulos.push("Chandal");

			document.write('<p>'+ 'Agregando Elemento <spam class="normal-text">'+ articulos[articulos.length - 1] +'</spam> Al Final Del Array</p>');

			
			//articulos.push(prompt('Agregar Un Nuevo Ítem'));

			//document.write('<p>'+ 'Elemento Nuevo <spam class="normal-text">'+ articulos.pop() +'</spam> Al Final Del Array</p>');
			 

			for (var i = 0; i < articulos.length; i++) {
				document.write('=>' + articulos[i] + '<br>');
			}

			// ------------- BORRAR ELEMENTO DE UN ARRAY -------------------//

			document.write('<hr><p>'+ 'Borrando El Primer Elemento Del Array</p>');

			articulos.shift();

			for (var i = 0; i < articulos.length; i++) {
				document.write('<spam class="text-primary normal-text">' + articulos[i] + '</spam><br>');
			}

			console.log(articulos);
		</script>

		<button id="btn-largo" class="btn btn-default btn-sm"> Ver Longitud Del Array</button>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$("#btn-largo").click(function(){
		alert("Total De Elementos En El Array " + articulos.length);
	});
</script>
</body>
</html>