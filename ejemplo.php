<html>

<head>

<script>



</script>

</head>

<body>

<h1>HOLA USO DE EXPLODE()</h1>

<?php

	$fecha=date("d-m-Y");
	echo $fecha;
	echo "<br>";

	$array= explode("-", $fecha);

	echo $array[0];
	echo "<br>";
	echo $array[1];
	echo "<br>";
	echo $array[2];
?>

</body>

</html>