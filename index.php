<!DOCTYPE html>
 <?php
    // Obtenemos y traducimos el nombre del día
    $nombreDia=date("l");
    if ($nombreDia=="Monday") $nombreDia="Lunes";
    if ($nombreDia=="Tuesday") $nombreDia="Martes";
    if ($nombreDia=="Wednesday") $nombreDia="Miércoles";
    if ($nombreDia=="Thursday") $nombreDia="Jueves";
    if ($nombreDia=="Friday") $nombreDia="Viernes";
    if ($nombreDia=="Saturday") $nombreDia="Sabado";
    if ($nombreDia=="Sunday") $nombreDia="Domingo";

    // Obtenemos el número del día
    $dia=date("d");

    // Obtenemos y traducimos el nombre del mes
    $meses =  array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
					"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $mes= $meses[(date("n"))-1];
    // Obtenemos el año y semana
    $year=date("Y");     
 ?>
 <script type="text/javascript">

	function mostrarNoticia(seccion , tiempo){
		location.href="noticias.php?seccion="+seccion+"&tiempo="+tiempo+"";
	}
 </script>
  <style type="text/css">
 	
 </style>
<html>
	<head>
		<meta charset="UTF-8">
		<title>La Noticia</title>
		<link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/stylo.css">
		<script type="text/javascript" src="js/mostrarSeccion.js"></script>
	</head>
	<body>
		<header>
			<div id="cabecera"></div>
		</header>
		<nav class="menu">
			<ul class="menuh">
				<li><a href="#">Inicio</a></li>
				<li><a href="#" >Economía</a>	
					<ul>
						<li><a href="#" onclick="mostrarNoticia(0,0);">Hoy</a></li>
						<li><a href="#" onclick="mostrarNoticia(0,1);">De la semana</a></li>
						<li><a href="#" onclick="mostrarNoticia(0,2);">Del mes</a></li>
					</ul>
				</li>
				<li><a href="#cultural">Cultural</a>
					<ul>
						<li><a href="#" onclick="mostrarNoticia(1,0);">Hoy</a></li>
						<li><a href="#" onclick="mostrarNoticia(1,1);">De la semana</a></li>
						<li><a href="#" onclick="mostrarNoticia(1,2);">Del mes</a></li>
					</ul>
				</li>
				<li><a href="#deportes">Deportes</a>
					<ul>
						<li><a href="#" onclick="mostrarNoticia(2,0);">Hoy</a></li>
						<li><a href="#" onclick="mostrarNoticia(2,1);">De la semana</a></li>
						<li><a href="#" onclick="mostrarNoticia(2,2);">Del mes</a></li>
					</ul>
				</li>
				<li><a href="#salud">Salud</a>
					<ul>
						<li><a href="#" onclick="mostrarNoticia(3,0);">Hoy</a></li>
						<li><a href="#" onclick="mostrarNoticia(3,1);">De la semana</a></li>
						<li><a href="#" onclick="mostrarNoticia(3,2);">Del mes</a></li>
					</ul>
				</li>
				<li><a href="#chistes">Chistes</a>
					<ul>
						<li><a href="#" onclick="mostrarNoticia(4,0);">Hoy</a></li>
						<li><a href="#" onclick="mostrarNoticia(4,1);">De la semana</a></li>
						<li><a href="#" onclick="mostrarNoticia(4,2);">Del mes</a></li>
					</ul>
				</li>
			</ul>

		</nav>
		<section class="cuerpo">
			<br><br><br><br>
		<?php    
			$fecha= "$nonmbreDia $dia de $mes de $year";
   			 session_start();
   			 $_SESSION['Fecha']=$fecha;
				
			include("acceso.php");
			$sqlQuery="SELECT * FROM noticias WHERE fecha='$fecha'";
			$bandera=false;
			$resultado=mysql_query($sqlQuery);
			while($row=mysql_fetch_array($resultado)){ 

			$seccion= $row['seccion'];
		?>

			<script type="text/javascript">
				function verID(){
					location.href="login.html?valor=1";
				}
			</script>
			<table>
				<tr>
					<td rowspan="5"><img class="imagen" src="<?php echo $row['imagen']; ?>" alt="imagen"><td>
					<td colspan="2" ><b><?php echo $row['titulo']; ?><b></td>
				<tr>
				<tr>
					<td><?php echo "Sección $seccion";?></td>
					<td style="text-align: right;"><?php echo $row['fecha'];?></td>
				</tr>
				<tr>
					<td colspan="2" rowspan="3"><p><?php echo $row['noticia'];?></p></td>
				</tr>
			</table>
			<br><br>
		<?php  
			$bandera=true;
		} 
			if(!$bandera)
				echo "<h2 align='center'>No hay noticias para este día</h2>";
			mysql_close();
		?>
		</section>
		<footer>
			<hr>
			<p class="img"><img src="imagenes/facebook.png">&nbsp;<img src="imagenes/twitter.png"></p><br>
			<p id="txtPie" align="center">Copyright&copy;2014 La Noticia</p>
		</footer>
	</body>
</html>