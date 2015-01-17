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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Publica</title>
    <link rel="stylesheet" type="text/css" href="css/styloLogin.css">
    <script type="text/javascript" src="js/validar.js"></script>
  </head>
  <body>
   <br><br> <h1>Eliminar noticias</h1><br>
    <form action="procesarEliminar.php" method="post" name="formulario" class="formulario"> 
      <table>
        <tr>
          <td>ID Noticia:</td>
          <td><input type="number" name="idNoticia" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Eliminar">
          </td>
        </tr>
       </table>
    </form>
</body> 
</html>