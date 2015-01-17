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
  <br><br>
    <h1>Modificar noticia</h1>
    <form name="menu" class="formulario">
        <table>
          <tr>
            <td>Modificar noticia:</td>
            <td><select name="opcion" onChange="mostrar(this.form)">
                <option value="0">--Seleccione Campo--</option>
                <option value="1">Titulo</option>
                <option value="2">Noticia</option>
                <option value="3">Imagen</option>
                <option value="4">Sección</option>
              </select>
            </td>                
          </tr>
        </table>
    </form> 
  <!-- Modificar Titulo-->
  <div id="divTitulo" style="display: none;">
    <form action="procesarModificar.php" name="formulario" class="formulario" method="post" >
    <table >
          <tr>
            <td>ID noticia:</td>
            <td><input type="number" name="idNoticia" required/></td> <tr>
            <td><input type="number" name="campo" value="1" style="display:none;"/></td> <tr>
          <tr>
            <td>Nuevo título de la noticia:</td>
            <td><input type="text" name="titulo" required/></td>
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Modificar"></td>            </tr>
        </table>
      </form>
  </div>  
  <!-- Modificar noticia -->
  <div id="divNoticia" style="display: none;">
    <form action="procesarModificar.php" name="formulario" class="formulario" method="post">
    <table >
          <tr>
            <td>ID noticia:</td>
            <td><input type="number" name="idNoticia" required/></td>  
            <td><input type="number" name="campo" value="2" style="display:none;"/></td> <tr>  
          <tr>
          <tr>
            <td>Nueva noticia:</td>
            <td><textarea rows="8" cols="40" name="noticia" placeholder="Texto noticia..." required></textarea></td>  
          </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Modificar"></td>
            </tr>
    </table>
    </form>
  </div>
    <!-- Modificar Imagen  -->
    <div id="divImg" style="display: none;">
      <form action="procesarModificar.php" name="formulario" class="formulario" method="post" enctype="multipart/form-data">
      <table >
          <tr>
            <td>ID noticia:</td>
            <td><input type="number" name="idNoticia" required/></td>  
            <td><input type="number" name="campo" value="3" style="display:none;"/></td>            
          </tr>
          <tr>
            <td>Nueva imagen:</td>
            <td><input type="file" name="img" required></td>  

          <t/r>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Modificar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Modificar Sección -->
    <div id="divSeccion" style="display: none;">
      <form action="procesarModificar.php" name="formulario" class="formulario" method="post" onSubmit='return validarCampo(this)'>
      <table >
          <tr>
            <td>ID noticia:</td>
            <td><input type="number" name="idNoticia" required/></td>   
            <td><input type="number" name="campo" value="4" style="display:none;"/></td> <tr>  
             <td id="errorSeccion" style="display:none;"><label style="color: red;">*Seleccione sección</label></td>    
          </tr>
          <tr>
            <td>Nuevo sección:</td>
            <td><select name="seccion" required>
                <option value="nada">--Seleccione sección--</option>
                <option value="economia">Economía</option>
                <option value="cultural">Cultural</option>
                <option value="deportes">Deportes</option>
                <option value="salud">Salud</option>
                <option value="chistes">Chistes</option>
              </select>
            </td>
          </tr>   
          <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Modificar"></td>
            </tr>         
        </table>
      </form>
  </body> 
</html>