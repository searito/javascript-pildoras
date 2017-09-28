<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lección #10 > JavaScript</title>
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
		<h1 class="text-center text-primary">Lección # 10 -- Funciones Con Eventos</h1>
	</div>

	<div class="container">
		<h3 class="display-4 text-center text-danger">Eventos Más Importantes</h3><hr>

		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<thead class="table-inverse">
					<th class="text-center">Evento</th>
					<th class="text-center">Descripción</th>
					<th class="text-center">Elemento</th>
				</thead>

				<tbody class="text-center">
					<tr>
						<td>onblur</td>
						<td class="text-capitalize">Deselecciona El elemento</td>
						<td class="text-left">
							&lt;button&gt;, &lt;input&gt;, &lt;label&gt;, &lt;select&gt;, &lt;textarea&gt;, &lt;body&gt; 
						</td>
					</tr>
					<tr>
						<td>onchange</td>
						<td class="text-capitalize">deselecciona un elemento que se ha modificado</td>
						<td class="text-left">
							&lt;input&gt; , &lt;select&gt; , &lt;textarea&gt; 
						</td>
					</tr>
					<tr>
						<td>onclick</td>
						<td class="text-capitalize">pinchar y soltar el ratón</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>ondblclick</td>
						<td class="text-capitalize">pinchar dos veces seguidas con el ratón</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>onfocus</td>
						<td class="text-capitalize">seleccionar un elemento</td>
						<td class="text-left">
							&lt;button&gt;, &lt;input&gt;, &lt;label&gt;, &lt;select&gt;, &lt;textarea&gt;, &lt;body&gt;
						</td>
					</tr>
					<tr>
						<td>onkeydown</td>
						<td class="text-capitalize">pulsar una tecla (sin soltar)</td>
						<td class="text-left">
							Elementos De Formulario y &lt;body&gt;
						</td>
					</tr>
					<tr>
						<td>onkeypress</td>
						<td class="text-capitalize">pulsar una tecla</td>
						<td class="text-left">
							Elementos De Formulario y &lt;body&gt;
						</td>
					</tr>
					<tr>
						<td>onkeyup</td>
						<td class="text-capitalize">soltar una tecla pulsada</td>
						<td class="text-left">
							Elementos De Formulario y &lt;body&gt;
						</td>
					</tr>
					<tr>
						<td>onload</td>
						<td class="text-capitalize">la página se ha cargado completamente</td>
						<td class="text-left">&lt;body&gt;</td>
					</tr>
					<tr>
						<td>onmousedown</td>
						<td class="text-capitalize">pulsar sin soltar un botón del ratón</td>
						<td class="text-left">Todos Los ELementos</td>
					</tr>
					<tr>
						<td>onmousemove</td>
						<td class="text-capitalize">mover el ratón</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>onmouseout</td>
						<td class="text-capitalize">el ratón "sale" del elemento (pasa por encima de otro elemento)</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>onmouseover</td>
						<td class="text-capitalize">el ratón "entra" en el elemento (pasa por encima del elemento)</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>onmouseup</td>
						<td class="text-capitalize">soltar el botón que estaba pulsando en el ratón</td>
						<td class="text-left">Todos Los Elementos</td>
					</tr>
					<tr>
						<td>onreset</td>
						<td class="text-capitalize">inicializar el formulario (borra todos sus datos)</td>
						<td class="text-left">&lt;form&gt;</td>
					</tr>
					<tr>
						<td>onresize</td>
						<td class="text-capitalize">se ha modificado el tamaño de la ventada del navegador</td>
						<td class="text-left">&lt;body&gt;</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>

<script src="../js/jquery.js"></script>
<script src="../js/lesson009.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>