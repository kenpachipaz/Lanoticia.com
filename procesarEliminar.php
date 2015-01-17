<?php
  session_start();
  if ($_SESSION["sesionOK"]!="si"){
    header('Location:login.html');
    exit;
  } 
?>
<html>
 <head>
   <title>Actualización</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <body>
      <?php
        include("acceso.php");
        $ID=$_POST['idNoticia'];
        
        $sql="DELETE FROM noticias WHERE id=$ID";
        $resultado = mysql_query($sql);

        if($resultado){
        echo "<h1><label style='color:red;'>¡La Noticia ha sido eliminada con éxito!</label></h1><br>";
        echo "<img src='imagenes/megusta.jpg'><br>";
        echo "<a href='eliminar.php'>Ok</a>";
      }
        else{
          echo "<h1><label style='color:red;'>¡Fallo al eliminar noticia :(!</label></h1><br>";
          echo "<img src='imagenes/nolike.jpg'>";
        }
       mysql_close($dp);
     ?> 
 </body>
</html>