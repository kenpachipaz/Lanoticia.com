<!DOCTYPE html>
<?php 
	session_start();
	$fecha=$_SESSION['Fecha'];
	$seccion=$_GET['seccion'];
	$tiempo=$_GET['tiempo'];
	$semana=date("W");
	$year=date("Y");
	$meses =  array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
					"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $mes= $meses[(date("n"))-1];

?>
<script type="text/javascript">

	function mostrarNoticia(seccion , tiempo){
		location.href="noticias.php?seccion="+seccion+"&tiempo="+tiempo+"";
	}
 </script>
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
				<li><a href="index.php">Inicio</a></li>
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
				include("acceso.php");

				switch ($seccion) {
					case 0:
						switch ($tiempo) {
							case 0:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='economia' AND fecha='$fecha'";
							break;
							case 1:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='economia' AND semana=$semana AND year=$year ORDER BY fecha ASC";
							break;
							case 2:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='economia' AND mes='$mes' AND year=$year ORDER BY fecha ASC";
							break; 
						}
					break;
					case 1:
						switch ($tiempo) {
							case 0:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='cultural' AND fecha='$fecha'";
							break;
							case 1:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='cultural' AND semana=$semana AND year=$year ORDER BY fecha ASC";
							break;
							case 2:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='cultural' AND mes='$mes' AND year=$year ORDER BY fecha ASC";
							break;
						}
					break;
					case 2:
						switch ($tiempo) {
							case 0:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='deportes' AND fecha='$fecha'";
							break;
							case 1:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='deportes' AND semana=$semana AND year=$year ORDER BY fecha ASC";
							break;
							case 2:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='deportes' AND mes='$mes' AND year=$year ORDER BY fecha ASC";
							break;
						}
					break;
					case 3:
						switch ($tiempo) {
							case 0:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='salud' AND fecha='$fecha'";
							break;
							case 1:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='salud' AND semana=$semana AND year=$year ORDER BY fecha ASC";
							break;
							case 2:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='salud' AND mes='$mes' AND year=$year ORDER BY fecha ASC";
							break;
						}
					break;
					case 4:
						switch ($tiempo) {
							case 0:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='chistes' AND fecha='$fecha'";
							break;
							case 1:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='chistes' AND semana=$semana AND year=$year ORDER BY fecha ASC";
							break;
							case 2:
								$sqlQuery="SELECT * FROM noticias WHERE seccion='chistes' AND mes='$mes' AND year=$year ORDER BY fecha ASC";
							break;
						}
					break;
				}

			$resultado=mysql_query($sqlQuery);
			while($row=mysql_fetch_array($resultado)){ 
				$seccionNot=$row['seccion'];
		?>
			<table>
				<tr>
					<td rowspan="5"><img class="imagen" src="<?php echo $row['imagen']; ?>" alt="imagen"><td>
					<td colspan="2"><b><?php echo $row['titulo']; ?><b></td>
				<tr>
				<tr>
					<td><?php echo "Sección $seccionNot";?></td>
					<td style="text-align: right;" ><?php echo $row['fecha'];?></td>
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
				echo "<h2 align='center'>Noticias NO disponibles</h2>";
			mysql_close();
		?>
		</section>
		<footer>
			<hr>
			<p align="center">Copyright&copy; 2014, La Noticia</p>
		</footer>
	</body>
</html>