<?php
@session_start();
  if(isset($_SESSION['user'])=='usuario1'){
    
  
    setcookie("nombre",  $_SESSION["nombre"],time()+100);    
    setcookie("apellidos",  $_SESSION["Ap"],time()+100);

    setcookie("fecha",  $_SESSION["bir"],time()+100);
    
  }else if (isset($_SESSION['user'])=='usuario2')
  {
    setcookie("nombre",  $_SESSION["nom"],time()+100);    
    setcookie("carrera", $_SESSION["car"],time()+100);
  }
    
    

?>

<p> Bienvenido <?php echo($_SESSION["nombre"]) ?></p>
<p>Apellido: <?php echo($_SESSION["Ap"])?> </p>
<p>Fecha de nacimeinto:  <?php echo($_SESSION["bir"])?> </p>

<p> Bienvenido <?php echo($_SESSION["nom"]) ?></p>
<p> Carrera <?php echo($_SESSION["car"]) ?></p>