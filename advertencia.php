<html>
<?php
  session_start();
  if ($_SESSION["sesionOK"]!="si"){
    header('Location:login.html');
    exit;
  } 
?>

 <h1><label style="color:red;">¡ADVERTENCIA!</label></h1>
 <img src="imagenes/advertencia.jpg">
 <h2>Usted está tratando de acceder a páginas que no le corresponde. 
  Para tener acceso a esta página inicie sesión.
 </h2>
