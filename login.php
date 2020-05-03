<?php
  session_start();
 
  
  $user= $_POST['user'];
  $password = $_POST['password'];
  $user1 = "usuario1";  
  $pass1 = "pass1";  
  $user2 = "usuario2";  
  $pass2 = "pass2";  
  $user3 = "usuario3";  
  $pass3 = "pass3"; 

  switch ($user) {    
     case $user1:    
    if ($password == $pass1) { 
        $_SESSION['user'] = $user1;
        header("HTTP/1.1 302 Moved Temporarily"); 
        header("Location: principal.php"); 
        
    
     } else {
        echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';  
                    
    
    }
    break;
    case $user2:
        
     if ($password == $pass2) {
        $_SESSION['user'] = $user2;
        header("HTTP/1.1 302 Moved Temporarily"); 
        header("Location: principal2.php"); 
        
         
        
    } 
    else {
        echo 'El usuario o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';  
    }
        
    break;
        
    
        
     default:
        
    }
    
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
   
 
?>