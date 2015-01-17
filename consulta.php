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
    <link rel="stylesheet" type="text/css" href="css/buscar-en-tabla.css">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/buscar-en-tabla.js"></script>
  </head>
  <body>
    <div id="divContenedor">
      <div id="divTabla">
        <label for="txtBuscar">Buscar: </label>
        <input type="search" id="txtBuscar" autofocus
        placeholder="Digite el texto que desea encontrar y presione la ENTER. Para cancelar la tecla ESCAPE.">
        
        <table border="1" id="tblTabla" width="100%">
          <thead>
             <th>ID Noticia</th>
             <th >Título</th>
             <th>Noticia</th>
             <th>Fecha</th>
             <th>Sección</th>
             <th>Url Imagen</th>
          </thead>
          <tbody>
            <tr>
              <?php
                include("acceso.php");
                mysql_query("SET NAMES 'UTF-8'");
                $consulta = mysql_query("SELECT * FROM noticias");
                while($row = mysql_fetch_array($consulta)) {                            
              ?>
                <td><?php echo $row["id"] ?></td>        
                <td><?php echo $row["titulo"] ?></td>            
                <td><?php echo $row["noticia"]?></td>          
                <td><?php echo $row["fecha"]?></td>
                <td><?php echo $row["seccion"]?></td>
                <td><?php echo $row["imagen"]?></td>             
              </tr>                                        
              <?php } ?>
          </tbody>
          
        </table>
      </div>
    </div>
  </body>
</html>