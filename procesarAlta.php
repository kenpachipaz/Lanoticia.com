<?php
  session_start();
  if ($_SESSION["sesionOK"]!="si"){
    header('Location:login.html');
    exit;
  } 

?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Publica</title>
    <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon" />
  </head>
  <body>
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
          $semana=date("W");
        
        $titulo=$_POST['titulo'];
        $seccion=$_POST['seccion'];
        $noticia=$_POST['noticia'];
        $fecha= "$nonmbreDia $dia de $mes de $year";
        $archivo=$_FILES['img']['tmp_name'];
        $destino="imagenes/".$_FILES['img']['name'];
        move_uploaded_file($archivo, $destino);

        include("acceso.php");
        
        $sql="INSERT INTO noticias(titulo,noticia,fecha,seccion,imagen, semana, mes, year) VALUES('$titulo','$noticia','$fecha','$seccion','$destino', $semana, '$mes', $year)";
       $resultado = mysql_query($sql);
       if($resultado){
        echo "<h1><label style='color:red;'>¡La Noticia ha sido publicada con éxito!</label></h1><br>";
        echo "<img src='imagenes/megusta.jpg'><br>";
        echo "<a href='alta.php'>Ok</a>";
      }
        else{
          echo "<h1><label style='color:red;'>¡Fallo al publicar noticia :(!</label></h1><br>";
          echo "<img src='imagenes/nolike.jpg'>";
        }
       mysql_close($dp);
     ?>
  </body> 
</html> 