<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor antes debes iniciar sesión");
                window.location = "index.php";
            </script> 

        ';
        session_destroy();
        die(); 
    }


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/cine.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos | Movies KB</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--FONT OSWALD-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <!--CUSTON CSS-->
    <link rel="stylesheet" href="styles.css">


</head>
<body>

<?php require 'search/search.php' ?> 

<div id="particles-js"></div>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="conteiner">
     
    <?php require 'navegation/nav.php' ?> 
    
     <hr>

        <!-- INICIO NEWS CARDS-->
        <DIV class="news-cards">
           <div>
               <a href="e/estrenos.php"><img class="img-radius" src="img/estreno.jpg" alt="News 1"></a>
            <center>
               <a href="e/estrenos.php" class="btn2">|  Estrenos  |</a><i class="fas fa-angle-duoble-rigth"></i></a>
            </center>           
           </div>

           <div>
               <a href="n/netflix.php"><img class="img-radius" src="img/netflix.jpg" alt="News 2"></a>
           <center>
               <a href="n/netflix.php" class="btn2">|  Originales de Netflix  |</a><i class="fas fa-angle-duoble-rigth"></i></a>       
           </center>   
           </div>
        </DIV>    
  
        <div class="news-cards">
            <div>
            <a href="pe/peliculas.php"><img class="img-radius" src="img/deadpool.jpg" alt="News 2"></a>
                <center>
                <a href="pe/peliculas.php" class="btn2">|  Proximos estrenos  |</a><i class="fas fa-angle-duoble-rigth"></i></a> 
                </center>              
            </div>

            <div>
            <a href="s/series.php"><img class="img-radius" src="serie/img/temporada-1.jpg" alt="News 2"></a>
                <center>
                <a href="s/series.php" class="btn2">|  Series  |</a><i class="fas fa-angle-duoble-rigth"></i></a>   
                </center>               
            </div>
        </div> 

<!-- FINAL DEL NEW CARDS -->

        <section class="social">
             <p>Mis Redes Sociales</p>
             <div class="links">
                <a href="https://www.facebook.com/profile.php?id=100010066055515">
                    <i class="fab fa-facebook-f"></i>     
                </a>
                <a href="https://twitter.com/GoadProject">
                    <i class="fab fa-twitter"></i>     
                </a>
                <a href="https://www.instagram.com/alextoconas/">
                    <i class="fab fa-instagram"></i>     
                </a>
             </div>
         </section>    

    </div>

  
    <!-- Footer -->

    <?php require 'footer/footer.php' ?>

      <!-- particle.js -->
      <script src="js/particles.min.js"></script>
      <script src="js/app.js"></script>
      <!-- particles.js -->
   
      <!--SCROLL REVEAL-->
      <script src="https://unpkg.com/scrollreveal"></script>


      <!--custom js-->
      <script src="main.js"></script>
  
      <script src="js2/search.js"></script>
</body>
</html>