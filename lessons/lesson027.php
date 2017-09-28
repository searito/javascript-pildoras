<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Lección # 27 > JavaScript</title>
          <!-- Meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />  <!-- w3c recomends this meta tag  -->
	<meta http-equiv="Content-Script-Type" content="text/javascript" />  <!-- w3c recomends this meta tag  -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="robots" content="all" />
        <!-- Stylesheets -->
	<link rel="stylesheet" href="../js/plugins-navigation/demo/css/style.css" type="text/css" media="screen, projection" />
	<link rel="shortcut icon" href="../img/jslogo.png" width="32" height="32">
	    <!-- Javascripts -->
    <script language="javascript" type="text/javascript" src="../js/plugins-navigation/demo/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="../js/plugins-navigation/demo/js/nav2.2.js"></script>
    <script language="javascript" type="text/javascript">
    		$(document).ready(function(){
				$("#JqueryMenu").navPlugin({
					'itemWidth': 'auto',
					'itemHeight': 30,
					'navEffect': 'slide',
					'speed': 250
				});
			});
    </script>

</head>

<body>

      <div id="wrap">
      <!--div class="content"-->

      	   <div id="dropdown">

                <ul id="JqueryMenu">
                    <li><a href="#">Archivo</a>
                        <ul>
                            <li><a href="#">Abrir</a></li>
                            <li><a href="#">Guardar</a></li>
                            <li><a href="#">Guardar Como</a>
                            <li><a href="#">Exportar</a>
                            <li><a href="#">Salir</a></li>
                        </ul></li>
                    
                    <li><a href="#">Edición</a>
                    	<ul>
                    		<li><a href="#">Cortar</a></li>
                    		<li><a href="#">Copiar</a></li>
                    		<li><a href="#">Pegar</a>
                    			<ul>
                    				<li><a href="#">Pegado Simple</a></li>
                    				<li><a href="#">Pegado Especial</a></li>
                    			</ul>
                    		</li>
                    		<li><a href="#">Deshacer</a></li>
                    	</ul>
                    </li>
                    <li><a href="#">List Item 3</a>
						<ul>
                            <li><a href="#">Item 3 A</a></li>
                            <li><a href="#">Item 3 B</a></li>
                            <li><a href="#">Item 3 C</a>
                                <ul>
                                    <li><a href="#">C 1</a>
                                        <ul>
                                            <li><a href="#">C1 a</a></li>
											<li><a href="#">C1 b</a></li>
											<li><a href="#">C1 c</a></li>
                                        </ul></li>
                                </ul></li>
                            <li><a href="#">Item 3 D</a></li>
                            <li><a href="#">Item 3 E</a>
								<ul>
                                    <li><a href="#">E 1</a>
                                        <ul>
                                            <li><a href="#">E1 a</a></li>
											<li><a href="#">E1 b</a></li>
											<li><a href="#">E1 c</a></li>
											<li><a href="#">E1 d</a></li>
											<li><a href="#">E1 e</a></li>
                                        </ul></li>
                                </ul></li>
                            <li><a href="#">Item 3 F</a></li>
                            <li><a href="#">Item 3 G</a></li>
                            <li><a href="#">Item 3 H</a>
								<ul>
                                    <li><a href="#">H 1</a>
                                        <ul>
                                            <li><a href="#">H1 a</a></li>
											<li><a href="#">H1 b</a></li>
                                        </ul></li>
                                </ul></li>
                            <li><a href="#">Item 3 I</a></li>
                            <li><a href="#">Item 3 J</a></li>
                            <li><a href="#">Item 3 K</a></li>
                            <li><a href="#">Item 3 L</a></li>
                        </ul></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                    <!--li><a href="#">Item 6</a></li-->
                </ul>

           </div>  <!-- end of navmenu -->
           
      <!--/div-->  <!-- end of content -->
      </div>  <!-- end of wrap div -->
      
</body>
</html>