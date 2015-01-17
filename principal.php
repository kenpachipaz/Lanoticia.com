<!DOCTYPE html>
<?php
  session_start();
  if ($_SESSION["sesionOK"]!="si"){
    header('Location:login.html');
    exit;
  } 

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Publica</title>
		<link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/stylo.css">
		<script type="text/javascript" src="js/mostrarSeccion.js"></script>
	</head>
	<body>
		<header>
			<div id="cabeceraP"></div>
		</header>
		<nav class="menu">
			<ul id="menuP" class="menuh">
				<li><a href="#" onclick="mostrarSeccion(0);">Bienvenida</a></li>
				<li><a href="#" onclick="mostrarSeccion(1);" >Ver noticias</a></li>
				<li><a href="#" onclick="mostrarSeccion(2);">Nueva noticia</a></li>
				<li><a href="#" onclick="mostrarSeccion(3);">Eliminar noticia</a></li>
				<li><a href="#" onclick="mostrarSeccion(4);">Modificar noticia</a></li>
				<li><a href="cerrarSesion.php">Salir</a></li>
			</ul>
		</nav>
		<section class="cuerpo">
			<div id="bienvenida">
				<center>
					<h2>Bienvenido <?php session_start(); echo $_SESSION['Nombre'];?></h2>
					<img src="imagenes/bienvenido.png">
				</center>
			</div>
			<iframe id="consulta" src="consulta.php" style="display:none;">Tu navegador no soporta iframe</iframe>
			<iframe id="alta" src="alta.php" style="display:none;">Tu navegador no soporta iframe</iframe>
			<iframe id="eliminar" src="eliminar.php" style="display:none;">Tu navegador no soporta iframe</iframe>
			<iframe id="modificar" src="modificar.php" style="display:none;">Tu navegador no soporta iframe</iframe>
		</section>
		<footer>
			<hr>
			<p align="center">Copyright&copy; 2014, La Noticia</p>
		</footer>
	</body>
</html>