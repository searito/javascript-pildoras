<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección # 37 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 37 -- Depuración De Código</h1>
	</div>

	<div class="container">
		<h2 class="text-center text-danger">Pruebas De Consola</h2>

		<div class="row centrar-contenido">
			<div class="col-sm-6">
				<div class="card text-white bg-dark">
					<div class="card-body">
						<form action="" id="frm_send" method="POST">
							<div class="form-group">
								<label for="">Opiniones y Comentarios</label>
								<textarea name="comentarios" id="comentarios" cols="30" rows="10" class="form-control"></textarea>
								<span id="contar"></span>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-sm-6 border rounded bg-secondary centrar-contenido" id="area_preguntas">
				<div id="pregunta"></div>
				<div id="respuestas"></div>
				<div id="resultado"></div>

				<input type="button" id="siguiente" class="btn btn-primary btn-block" value="Comezar Quiz">
			</div>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>

<script>
	$(document).ready(function() {
		var conta = 1;

		$("#comentarios").keyup(function() {
			console.log("Se Ha Disparado El Evento keyup");

			var texto = $(this).val();
			
			//var acum = conta++;

			console.log('Esto Has Escrito ' + texto + ' Has Pulsado El Teclado ' + conta++ + ' veces');
		});



		// -------------------- INICIO DEL QUIZ -------------------------------//

		var record = 0;

		var pregunta = [
			['Cuantas Lunas Tiene La Tierra?', 1, [0, 1, 2, 3]],
			['Cuantas Lunas Tiene Saturno?', 31, [0, 14, 31, 160]],
			['Cuantas Lunas Tiene Marte?', 2, [0, 2, 11, 15]]
		];

		var PreguntasTotales = pregunta.length;

		
		function hazPreguntas () {
			var preguntaActual = pregunta.pop();
			$("#pregunta").text(preguntaActual[0]).attr('class', 'text-center').css('fontSize', '20px');

			var respuestas = construyeRespuestas(preguntaActual[2]);
			$("#respuestas").html(respuestas);

			$("#respuestas input").click(function() {
				if ($(this).val() == preguntaActual[1]) {
					record++;
					$("#resultado").prepend('<div class="alert alert-success" role="alert">Correcto...!!!</div>');
				}else{
					$("#resultado").prepend('<div class="alert alert-danger" role="alert">Error. La Respuesta Correcta Es '+ preguntaActual[1] +' Lunas</div>');
				}

				$("#siguiente").show();
			});
		}


		function construyeRespuestas (respuestas) {
			 var respuestaHTML = "";

			 for (var i = 0; i < respuestas.length; i++) {
			 	respuestaHTML += "<div class='form-check form-check-inline'>";
			 	respuestaHTML += "<label class='form-check-label'>";
			 	respuestaHTML += "<input type='radio' name='pregunta' class='form-check-input' value='";
			 	respuestaHTML += respuestas[i] + "'>" + " " + respuestas[i] + " Lunas";
			 	respuestaHTML += "</label></div>";
			 }

			 return respuestaHTML;
		}


		function dameResultados () {
			 var resultados = "<div class='alert alert-warning' role='alert'>Tienes "+ record +" de "+ PreguntasTotales +" Preguntas Correctas...</div>";

			 $("#area_preguntas").html(resultados);
		}


		$("#siguiente").click(function() {
			$(this).hide();
			$("#resultado").text('');

			if (pregunta.length == PreguntasTotales) {
				$(this).val('Siguiente Pregunta >>');
			}
			else if (pregunta.length == 1) {
				$(this).val('Mostrar Resultados');
			}
			if (pregunta.length > 0) {
				hazPreguntas();
			}else{
				dameResultados();
			}
		});

	});

			
</script>

<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script-->

</body>
</html>
