<?php
 @session_start();
 if($_POST["Nom"]&& $_POST["Carrera"]){
     $_SESSION["nom"]=$_POST["Nom"];
     $_SESSION["car"]=$_POST["Carrera"];
  
 }
   
   
   echo 'Información alumno <strong>' . $_SESSION['user'].'<br>' . 'Nombre del alumno '.$_SESSION["nom"].'<br>'.'pertenece a la carrera :'.$_SESSION["car"].'<br>'.'</strong>, <a href="principal2.php">Regresar</a>';

     ?>