<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['user'])){
    // Le doy la bienvenida al usuario.
    echo 'Bienvenido profesor <strong>' . $_SESSION['user'] . '</strong>, <a href="cerrar-sesion.php">cerrar sesión</a>';
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: index.html"); 
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Alumno</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
        .container {
            margin-top: 100px
        }
    </style>
</head>

<body class="container-fluid">
<p><img src="images/maestro.jpg" alt="Girl in a jacket" style="float:right;width:300px;height:127px;"></p> 
  <h1>Bienvenido profesor</h1>
  <p>Ingrese su  informacion ...</p>
  <div class="container">
        <form class="form-horizontal" action="datos2.php" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nombre del profesor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" placeholder="Ingresa el nombre..." required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Apellidos" id="inputPassword3" placeholder="Escribe tus apellidos ..." required>
                </div>
            </div>
            <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                <input type="date" id="birthday" name="birthday">
                </div>
            </div>

            

            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html> 