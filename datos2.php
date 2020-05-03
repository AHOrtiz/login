<?php
 @session_start();
 if($_POST["nom"]&& $_POST["Apellidos"]&& $_POST["birthday"]){
     $_SESSION["nombre"]=$_POST["nom"];
     $_SESSION["Ap"]=$_POST["Apellidos"];
     $_SESSION["bir"]=$_POST["birthday"];
    
  
 }
   
   
  
   echo 'profesor <strong>' . $_SESSION['user'].'<br>' . 'Nombre del profesor:  '.$_SESSION["nombre"].'<br>'.'Apellidos: '.$_SESSION["Ap"].'<br>'.'Fecha de nacimiento : '.$_SESSION["bir"].'<br>'.'</strong>, <a href="principal.php">Regresar</a>';

     ?>