<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 20 > JavaScript</title>
	<!--link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-theme.css"-->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">

</head>

<style>
	#imagen_grande{
		position: absolute;
		margin-left: 20%;
		margin-right: auto;
		left: 0;
		right: 0;
		width: 700px;
		height: 405px;
		z-index: 1;
		/*border: dotted 2px #9C27B0;*/
		/*background-color: #E1BEE7;*/
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
		<h1 class="text-center text-primary">Lección # 20  -- Eventos, Funciones next() y bind() </h1>
	</div>

	<div class="container">
		<div class="row bg-dark text-white centrar-contenido">
			<div class="container-fluid">
				<h3 class="text-center">Sintaxis bind()</h3>
				<div class="row">
					<div class="col-sm-6">$( "#elem1" ).click( abrir );</div>
					<div class="col-sm-6">$( "#elem1" ).bind( "click", datos, abrir );</div>
					<div class="col-sm-6">$( "#elem1" ).mouseover( abrir );</div>
					<div class="col-sm-6">$( "#elem1" ).bind( "click mouseover", datos, abrir );</div>
				</div>
			</div>
		</div>

		<h2 class="text-center text-capitalize text-danger">Ejemplo No Tan Práctico</h2>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 1</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, accusantium magni adipisci ullam animi doloremque fugiat inventore, quo 
			omnis nisi sit, 
		</div>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 2</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eos atque accusamus cupiditate doloribus ut pariatur, asperiores, hic fuga 
			exercitationem ea quia animi tenetur quod nihil, odit. Facere, praesentium. Doloremque!
		</div>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 3</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad saepe, amet veritatis quam debitis. Hic veritatis reiciendis at necessitatibus cupiditate 
			placeat est porro quam expedita asperiores praesentium, tempora, nulla quidem.
		</div>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 4</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam ducimus tempore hic laboriosam molestiae error reprehenderit dolore tenetur harum quo, 
			id adipisci, magnam cupiditate provident dolor magni quibusdam! Dolor, ab.
		</div>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 5</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quae deleniti vero labore rerum, quam at velit dicta! Eaque laudantium cumque 
			officiis in, nostrum voluptatibus tempore magnam quibusdam minus iusto!
		</div>

		<h4 class="text-capitalize text-primary"><i class="fa fa-plus mas_menos text-primary" aria-hidden="true"></i> Pregunta 6</h4>
		<div class="centrar-contenido text-justify respuesta">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat hic veniam qui vel, vero quod reprehenderit est excepturi delectus iste nobis 
			voluptatum libero dolor recusandae, aut asperiores placeat debitis iusto!
		</div>




		<div class="row centrar-contenido">
			<div id="imagen_grande"><img src="" class="img-thumbnail img-responsive" id="img_sustitucion"></div>

			<div class="col-sm-12 text-justify">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde eveniet et mollitia error, dolore enim sit illum expedita dolorum nemo modi 
					praesentium inventore laudantium dolor delectus incidunt est odit consequatur!	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis atque officia, iste possimus veniam et adipisci quia, ea rerum omnis fuga dolore 
					iusto! Quisquam nemo, necessitatibus nostrum. Dolorem, deleniti nostrum!
				</p>
			</div>

			<div class="col-sm-9 text-justify">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis perspiciatis officiis aliquam nemo dolores. Eveniet et architecto magni ea. 
					Iusto esse tempore, dolores recusandae consectetur temporibus, eligendi maxime. Quisquam, quibusdam.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor accusamus nulla, modi non ducimus, odio provident minima cumque porro quia fuga dolorem. Odio fuga maxime quasi, cum nam aspernatur! Perspiciatis.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias facilis quam molestiae mollitia, debitis odio quae, provident consequuntur vel, incidunt dignissimos illo vero nam magnam consequatur perferendis beatae cumque amet!
				</p>
			</div>

			<div class="col-sm-3">
				<img src="../img/Impala.jpg" class="img-thumbnail img-responsive" id="ampliar_img">
			</div>

			<div class="col-sm-12 text-justify">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde eveniet et mollitia error, dolore enim sit illum expedita dolorum nemo modi 
					praesentium inventore laudantium dolor delectus incidunt est odit consequatur!	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis atque officia, iste possimus veniam et adipisci quia, ea rerum omnis fuga dolore 
					iusto! Quisquam nemo, necessitatibus nostrum. Dolorem, deleniti nostrum!
				</p>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$(".respuesta").hide();
		
		$(".container h4").click(function() {
			$(".respuesta").toggle(function() {
				$(this).next(".respuesta").fadeIn();
			}, function() {
				$(this).next(".respuesta").fadeOut();
				$(".mas_menos").removeClass('fa fa-plus mas_menos');
				$(".mas_menos").addClass('fa fa-minus mas_menos');
			});
		});


		var rutaImagen = $("#ampliar_img").attr('src');
		$("#imagen_grande").hide();

		$("#ampliar_img").bind('click', rutaImagen, abriendoImagen);
	});

	function abriendoImagen (e) {
		e.stopPropagation(); // --- PARA QUE EL EVENTO NO SE PROPAGE A OTROS OBJETOS QUE CONTENGAN AL OBJETO DONDE ESTOY ---//
		$("#imagen_grande").show();
		$("#img_sustitucion").replaceWith('<img src="'+ e.data +'" class="img-thumbnail img-responsive">');
	}


	$(document).bind("click keypress", function(){
		$("#imagen_grande").hide();
	});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
