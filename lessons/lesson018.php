<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 18 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 18  -- Función each() y Funciones Anónimas</h1>
	</div>

	<div class="container">
		<h2 class="text-danger text-center">Ejemplo No Tan Práctico</h2>

		<div class="row text-justify">
			<div class="col-sm-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis fugiat ut sit quo saepe excepturi aliquam labore tempora 
				eligendi, voluptas, repellat laudantium voluptatibus numquam nobis, deleniti rerum ratione magnam.
				Lorem ipsum dolor sit amet, consectetur <a href="https://www.facebook.com/nataliepollyportman/photos/
				a.832002586901983.1073741829.684705578298352/1130852643683641/?type=3&theater">Foto De Natalipa</a> 
				adipisicing elit. Doloremque, saepe iste nihil ut atque assumenda aut. 
				Atque repellendus provident 
				possimus neque id molestias saepe, iusto itaque nihil explicabo, veniam nisi. <br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iusto laudantium numquam ab sed, soluta ex tenetur beatae saepe 
				laborum hic aperiam suscipit rerum veritatis debitis? Voluptas, assumenda sapiente nam. 
				<a href="https://www.facebook.com/Sear022">Mi Perfil De Facebook</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus odio, error dicta quibusdam aliquam quisquam repellendus obcaecati 
				aspernatur, autem suscipit est accusantium adipisci iure ab pariatur culpa at laudantium sapiente. <br><br>
			</div>

			<div class="col-sm-8">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quam, officiis aliquam placeat sapiente dolor nemo accusamus 
				non vero, omnis delectus cum consectetur, esse itaque architecto sed ipsa rem rerum.
				Lorem ipsum dolor <a href="https://twitter.com/534r_022">Mi Perfil De Twitter</a> sit amet, consectetur adipisicing elit. 
				Veniam culpa dignissimos, ab suscipit! Voluptate nostrum illo id porro 
				repudiandae aliquid quis, ad facere vitae, mollitia debitis, quibusdam vel. Veniam, vitae? <br><br>

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quam, officiis aliquam placeat sapiente dolor nemo accusamus 
				non vero, omnis delectus cum consectetur, <a href="https://github.com/searito">Mi Perfil De Git</a> esse itaque architecto sed ipsa rem rerum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam culpa dignissimos, ab suscipit! Voluptate nostrum illo id porro 
				repudiandae aliquid quis, ad facere vitae, mollitia debitis, quibusdam vel. Veniam, vitae?
			</div>

			<div class="col-sm-4 border border-primary" id="enlaces">
				<h3 class="text-center text-secondary">Lista De Enlaces</h3>
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		$("a[href^='https//']").each(function() {
			var linkExterno = $(this).attr('href');
			$("#enlaces").append("<li class='list-group-item'>"+ linkExterno +"</li>");
			console.log(linkExterno);
		});
	});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
