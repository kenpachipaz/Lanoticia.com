<html>
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
	</head>
	<body>
		<div id="contenedor">
			<header>
				<div id="marca"></div>
			</header>
			<section>
				<h1>Acceso</h1>
				<form action="logea.php" method="POST">
					<table>
						<tr>
							<td>Usuario:</td>
							<td><input type="text" name="usuario" placeholder="usuario" required /></td>
						</tr>
						<tr>
							<td>Contraseña:</td>
							<td><input type="password" name="password" placeholder="password" required /></td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="acceso" value="Acceder"/>
							</td>
						</tr>
					</table>					
				</form>
			</section>	
			<footer>
				<h2>Copyright&copy SIGE|sige.co</h2>
			</footer>	
		</div>
	</body>
</html>