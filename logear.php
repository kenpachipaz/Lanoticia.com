<?php
     $Usuario=$_POST['login'];
     $Password=$_POST['password'];
     include("acceso.php");
            
    $sql="SELECT Nombre, Password, Usuario FROM usuarios WHERE Usuario ='$Usuario' AND Password='$Password'";
    $resultado=mysql_query($sql);
    $row=mysql_fetch_array($resultado);
    $Nombre=$row['Nombre'];
            
    if($row['Password']==$Password){
         session_start();
         $_SESSION["sesionOK"]="si";
         $_SESSION['Nombre']=$row['Nombre'];
         header('Location:principal.php');
     }else {?>
              <script>alert ('Datos Incorrectos...');
              location.href="login.html";
              </script>

            <?php } 
        ?>
        
