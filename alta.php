<!DOCTYPE html>
<html>
<?php
  session_start();
  if ($_SESSION["sesionOK"]!="si"){
    header('Location:login.html');
    exit;
  } 
?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Publica</title>
    <link rel="stylesheet" type="text/css" href="css/styloLogin.css">
    <script type="text/javascript" src="js/validar.js"></script>
  </head>
  <body>
   <br><br> <h1>Publicar nueva noticia</h1><br>
    <form action="procesarAlta.php" method="post" name="formulario" class="formulario" onSubmit='return validarFormNot(this)'   enctype="multipart/form-data"> 
      <table>
        <tr>
          <td>Titulo:</td>
          <td><input type="text" name="titulo"></td>
          <td id="errorTitulo" style="display:none;"><label style="color: red;">*Ingrese nombre de título</label></td>
        </tr>
        <tr>
          <td>Sección:</td>
          <td><select name="seccion">
                <option value="nada">--Seleccione sección--</option>
                <option value="economia">Economía</option>
                <option value="cultural">Cultural</option>
                <option value="deportes">Deportes</option>
                <option value="salud">Salud</option>
                <option value="chistes">Chistes</option>
              </select>
          </td>
          <td id="errorSeccion" style="display:none;"><label style="color: red;">*Seleccione sección</label></td>
        </tr>
         <tr>
          <td>Imagen</td>
          <td><input type="file" name="img"></td>
          <td id="errorImg" style="display:none;"><label style="color: red;">*Seleccione una imagen</label></td>
        </tr>
        <tr>
          <td>Noticia:</td>
          <td><textarea rows="8" cols="40" name="noticia" placeholder="Texto noticia..."></textarea></td>
          <td id="errorNoticia" style="display:none;"><label style="color: red;">*Ingrese noticia</label></td>
        </tr>       
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="registrar" value="Publicar">
          </td>
        </tr>
       </table>
    </form>
</body> 
</html>