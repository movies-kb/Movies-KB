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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse | Movies KB</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
</head>
<body>


        <div class="login-box">
        <a href="index.php"><img class="avatar" src="img/cine.png" alt="Logo"></a>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register"> 

                    <h1>Registrarse</h1>
    <center>
                    <span>o <a href="login.php">Iniciar Sesión</a></span>
    </center>
                <form action="singup .php" method="post">
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña"name="contraseña">
                <input type="submit" value="Acceder"> 
                <a href="login.php">¿Tienes una cuenta?</a>
            </form>
        </div>    
</body>
</html>