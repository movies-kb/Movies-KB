<?php

     session_start();
   
     if(isset($_SESSION['usuario'])){
         header("location: bienvenida.php");
     }

      


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/cine.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/cine.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | movies KB</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
</head>
<body>


<div class="login-box">
<a href="index.php"><img class="avatar" src="img/cine.png" alt="Logo"></a>
    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
    
    <center>
      <h2>Iniciar Sesión</h2>
      
      <span>o <a href="singup.php">Registrate</a></span>
    </center>

    <input type="text" placeholder="Correo Electronico" name="correo">
    <input type="password" placeholder="Contraseña" name="contraseña">
    <input type="submit" value="Acceder"> 


    <a href="singup.php">¿No tienes una cuenta?</a>
    </form>
</div>
</body>
</html>