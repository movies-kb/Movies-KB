<?php

     session_start();
   
     if(isset($_SESSION['usuario'])){
         header("location: bienvenida.php");
     }

      


?>




<!DOCTYPE html>

  <head>
    <link rel="shortcut icon" type="image/x-icon" href="img/cine.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Movies KB</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
 
   <div class="login-box">
   <a href="index.php"><img class="avatar" src="img/cine.png" alt="Logo"></a>
      <h1>bienvenido/a, ¿que quieres hacer?</h1>
      <center>
      <span><a href="login.php">Inicia Sesión</a></span>
      <span>o <a href="singup.php">Registrate</a></span>
      </center>
    </div>
  </body>
</html>