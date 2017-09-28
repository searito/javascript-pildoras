<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 16 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 16 -- Leyendo y Cambiando Atributos CSS</h1>
	</div>

	<div class="container">
		<div class="bg-dark text-white centrar-contenido">
			<h3 class="text-center">Función Necesaria</h3>

			<div class="row">
				<div class="col-sm-12 text-center">.css()</div>
			</div>
		</div><br>

		<div class="row centrar-contenido">
			<div class="col-md-12">
				<h2 class="text-center text-danger">Ejemplo Práctico</h2><br>
			</div>

			<div class="col-sm-3 border border-danger centrar-contenido" id="noticia1">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolores assumenda velit perspiciatis nam cupiditate aliquid fugit 
				dicta similique dolor dignissimos, tempore, rem consectetur ea iusto a voluptate, veniam enim. 
				
				<br><br>
				<div class="row">
					<div class="col-sm-6">
						<button class="btn btn-outline-primary" id="btnaumentar1" title="Aumentar">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</button>
					</div>
					<div class="col-sm-6">
						<button class="btn btn-outline-info pull-right" id="btndisminuir1" title="Disminuir">
							<i class="fa fa-minus" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="col-sm-1"></div>

			<div class="col-sm-3 border border-danger centrar-contenido" id="noticia2">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta fugit cupiditate voluptates architecto nam totam ut, 
				aperiam consequuntur aliquam voluptatem provident, exercitationem earum temporibus officia doloremque eius. 

				<br><br>
				<div class="row">
					<div class="col-sm-6">
						<button class="btn btn-outline-primary" id="btnaumentar2" title="Aumentar">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</button>
					</div>
					<div class="col-sm-6">
						<button class="btn btn-outline-info pull-right" id="btndisminuir2" title="Disminuir">
							<i class="fa fa-minus" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="col-sm-1"></div>

			<div class="col-sm-3 border border-danger centrar-contenido" id="noticia3">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic nostrum tempore, esse ipsa molestias unde consectetur obcaecati neque. 
				Culpa nesciunt ad deleniti veritatis, nemo eius facere ullam quibusdam optio perspiciatis. 

				<br><br>
				<div class="row">
					<div class="col-sm-6">
						<button class="btn btn-outline-primary" id="btnaumentar3" title="Aumentar">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</button>
					</div>
					<div class="col-sm-6">
						<button class="btn btn-outline-info pull-right" id="btndisminuir3" title="Disminuir">
							<i class="fa fa-minus" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		/*document.getElementById("btnaumentar1").addEventListener("click", aumentar, false);
		document.getElementById("btndisminuir1").addEventListener("click", disminuir, false);
		document.getElementById("btnaumentar2").addEventListener("click", aumentar, false);
		document.getElementById("btndisminuir2").addEventListener("click", disminuir, false);
		document.getElementById("btnaumentar3").addEventListener("click", aumentar, false);
		document.getElementById("btndisminuir3").addEventListener("click", disminuir, false);*/

		var botones = document.querySelectorAll("button");
		console.log(botones);

		for (var i = 0; i < botones.length; i++) {
			botones[i].addEventListener("click", aumentar, false);
			botones[i].addEventListener("click", disminuir, false);
		};
	});

	function aumentar (e) {
		var zonaClick;

		if (e.target == btnaumentar1) {
			zonaClick = "#noticia1";
		}

		else if (e.target == btnaumentar2) {
			zonaClick = "#noticia2";
		}

		else if (e.target == btnaumentar3) {
			zonaClick = "#noticia3";	
		}

		var tamanioDefecto = $(zonaClick).css("fontSize");
		tamanioDefecto = parseInt(tamanioDefecto);

		$(zonaClick).css('fontSize', tamanioDefecto*1.05);

		$(zonaClick).css({
			backgroundColor: '#d9bd9c',
			color: '#261408',
			textAlign: 'justify'
		});
	}


	function disminuir (e) {
		var zonaClick;

		if (e.target == btndisminuir1) {
			zonaClick = "#noticia1";
		}

		else if (e.target == btndisminuir2) {
			zonaClick = "#noticia2";
		}

		else if (e.target == btndisminuir3) {
			zonaClick = "#noticia3";	
		}

		var tamanioDefecto = $(zonaClick).css("fontSize");
		tamanioDefecto = parseInt(tamanioDefecto);

		$(zonaClick).css('fontSize', tamanioDefecto*0.95);
		
		$(zonaClick).css({
			backgroundColor: '#fcd99a',
			color: '#261408',
			textAlign: 'justify'
		});
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
