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
      <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon" />
 </head>
 <body>
      <?php
        $ID=$_POST['idNoticia'];
        $campoActualizar=$_POST['campo'];
        
        $tituloNuevo=$_POST['titulo'];
        $noticiaM=$_POST['noticia'];
        $seccionNueva=$_POST['seccion'];
        $archivo=$_FILES['img']['tmp_name'];
        $destinoNuevo="imagenes/".$_FILES['img']['name'];
        move_uploaded_file($archivo, $destinoNuevo);

        include("acceso.php");
        
        switch ($campoActualizar) {
          case 1:
            $sql="UPDATE noticias SET titulo='$tituloNuevo' WHERE id=$ID";
          break;
          case 2:
            $sql="UPDATE noticias SET noticia='$noticiaM' WHERE id=$ID";
          break;
          case 3:
            $sql="UPDATE noticias SET imagen='$destinoNuevo' WHERE id=$ID";
          break;
          case 4:
            $sql="UPDATE noticias SET seccion='$seccionNueva' WHERE id=$ID";
          break;          
          }
      $resultado = mysql_query($sql);
        if($resultado){
        echo "<h1><label style='color:red;'>¡La Noticia ha sido modificada con éxito!</label></h1><br>";
        echo "<img src='imagenes/megusta.jpg'>";
        echo "<a href='modificar.php'>Ok</a>";
      }
        else{
          echo "<h1><label style='color:red;'>¡Fallo al modificar noticia :(!</label></h1><br>";
          echo "<img src='imagenes/nolike.jpg'>";
        }
       mysql_close($dp);
     ?> 
 </body>
</html>