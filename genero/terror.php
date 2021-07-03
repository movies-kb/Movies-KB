<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../php/cerrar_sesion.php";
            </script> 

        ';
        session_destroy();
        die(); 
    }


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img2/cine.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terror | Kodak Black</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--FONT OSWALD-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    
    
    <!--CUSTON CSS-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="particles-js"></div>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="conteiner">
      <nav class="nav-main">
        <a href="los_simpsons.php"><img src="img2/cine.png" alt="Logo cine" class="nav-brand"></a>
       <ul class="nav-menu show">
           <li>
              <a href="../bienvenida.php">Inicio</a>
           </li>
           <li>
            <a href="los_simpsons.php">Peliculas</a>
           </li>
           <li>
            <a href="los_simpsons.php">Series</a>
           </li>
            <li>
              <a href="../php/cerrar_sesion.php">Cerrar Sesion</a>
           </li>
       </ul>
       <ul class="nav-menu-right">
           <li>
               <a href="#">
                   <i class="fas fa-search"></i>
               </a>
           </li>
       </ul>
    </nav>
    
     <hr>
      
        <!--SHOWCASE-->

    <div class="news-cards">


      <div>
         <a href="butchers.php" ><img class="img-radius" src="img/butchers.jpg" alt="News 1"></a>

         <h2><a href="butchers.php">| Butchers |<h3>Butchers es una película canadiense de terror dirigida por Adrian Langley. Pertenece al subgénero del slasher y tiene como claros referentes algunos clásicos del terror como La Matanza de Texas o Las Colinas tienen Ojos.</h3></a></h2>
      </div>

      <div>
         <a href="temporada-1/los-simpsons-episodio-02.php" ><img class="img-radius" src="img/el-conjuro3.png" alt="News 2"></a>

         <h2><a href="temporada-1/los-simpsons-episodio-02.php">El Conjuro 3: El diablo me obligó a hacerlo<h3>Los investigadores paranormales Ed y Lorraine Warren se encuentran con lo que se convertiría en uno de los casos más sensacionales de sus archivos. La lucha por el alma de un niño los lleva más allá de todo lo que habían visto antes, para marcar la primera vez en la historia de los Estados Unidos que un sospechoso de asesinato reclamaría posesión demoníaca como defensa.​​</h3></a></h2>
      </div>


    </div>

       
         </section>
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

    <div class="footer-links">
       <div class="footer-container">
          <ul>
            <li>
              <a href="#">
                <h3>Politica | 1 |</h3>
              </a>
            </li>
            <li>
              <a href="#">Politica | 1 |</a>
            </li>
            <li>
              <a href="#">Politica | 2 |</a>
            </li>
          </ul>

          <ul>
            <li>
              <a href="#">
                <h3>Politica | 2 |</h3>
              </a>
            </li>
            <li>
              <a href="#">Politica | 1 |</a>
            </li>
            <li>
              <a href="#">Politica | 2 |</a>
            </li>
          </ul>

            <ul>
            <li>
              <a href="#">
                <h3>Politica | 3 |</h3>
              </a>
            </li>
            <li>
              <a href="#">Politica | 1 |</a>
            </li>
            <li>
              <a href="#">Politica | 2 |</a>
            </li>
            </ul>

            <ul>
            <li>
              <a href="#">
                <h3>Politica | 4 |</h3>
              </a>
            </li>
            <li>
              <a href="#">Politica | 1 |</a>
            </li>
            <li>
              <a href="#">Politica | 2 |</a>
            </li>
          </ul>
        </div>
    </div>


      <!-- Footer -->
      <footer class="footer">
      <h3>Kodak Black - ©Copyright 2020-2021</h3>
      </footer>
      <!-- particle.js -->
      <script src="js/particles.min.js"></script>
      <script src="js/app.js"></script>
      <!-- particles.js -->
   
      <!--SCROLL REVEAL-->
      <script src="https://unpkg.com/scrollreveal"></script>


      <!--custom js-->
      <script src="main.js"></script>

</body>
</html>