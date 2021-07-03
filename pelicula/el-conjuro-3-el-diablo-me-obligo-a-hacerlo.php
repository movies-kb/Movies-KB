<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("👑 😊 ϟ Por favor, antes debes iniciar sesión ϟ 😊 👑");
                window.location = "../login.php";
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
    <title>Ver ϟ El conjuro 3 - El diablo me obligo a hacerlo | Movies KB</title>

    <meta name="keywords" content="peliculas de accion, peliculas online, peliculas de terror, peliculas 2020, peliculas de comedia, peliculas completas, peliculas gratis, peliculas romanticas, peliculas de terror 2020 , series y peliculas hd 2020 , filmoves">
<meta name="description" content="Los investigadores paranormales Ed y Lorraine Warren se encuentran con lo que se convertir&iacute;a en uno de los casos m&aacute;s sensacionales de sus archivos. La lucha por el alma de un ni&ntilde;o los lleva m&aacute;s all&aacute; de todo lo que hab&iacute;an visto antes, para marcar la primera v...">
<meta property="og:title" content="Ver El Conjuro 3: El diablo me obligó a hacerlo Online"/>
<meta property="og:description" content="Los investigadores paranormales Ed y Lorraine Warren se encuentran con lo que se convertir&iacute;a en uno de los casos m&aacute;s sensacionales de sus archivos. La lucha por el alma de un ni&ntilde;o los lleva m&aacute;s all&aacute; de todo lo que hab&iacute;an visto antes, para marcar la primera v..."/>
<meta name="a.validate.01" content="293ee0f2fad53986389b1703dd9edac8f86f" /> 
<meta property="og:type" content="website"/>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--FONT OSWALD-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    
    
    <script src="js2/jquery.js"></script>
    <script src="js2/jquery.dataTables.min.js"></script>
    
    <!--CUSTON CSS-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

 <!-- inicio de la busqueda -->

 <?php require 'search/search.php' ?>

<!-- fin de la busqueda -->
  <div id="particles-js"></div>     
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="conteiner">
    <nav class="nav-main">
        <a href="bienvenida.php"><img src="img/movieskb.png" alt="Logo" class="nav-brand"></a>
        <center>
       <ul class="nav-menu show">
           
           <li>
               <a href="../bienvenida.php">| Movies KB |</a>
            </li>
            <li>
               <a href="../generos.php">| Generos |</a>
            </li>
            <li>
               <a href="../peliculas.php">| Peliculas |</a>
            </li>
            <li>
               <a href="../series.php">| Series |</a>
           </li>
           <li>
               <a href="../estrenos.php">| En Estreno |</a>
            </li>
            <li>
               <a href="../php/cerrar_sesion.php">| Cerrar Sesion |</a>
            </li>
       </ul>
       </center> 
       <ul class="nav-menu-right">
           
       </ul>
    </nav>
         <!-- INICIO DEL SHOWCASE -->

         <div class="main" >
        <div class="movie-info mg-b-16">
    <div class="ed-container">
        <div class="movie-info__container">
            <div class="movie-info__poster mg-r-16">
                <div class="card-tvshow shadow-sm from-lg">
                    <div class="card-tvshow__image">
                        <figure>
                            <img id="cover" class="lazyload" src="https://www.filmoves.com/storage/movies/June2021/335V7hCgdh9uYofHrO1d.jpg"
                                alt="El Conjuro 3: El diablo me obligó a hacerlo">
                        </figure>
                    </div>
                </div>
            </div>
            
            <div class="movie-info__details">
                <h1 class="h3 s-mb-1 font-weight-bold color-titles">El Conjuro 3: El diablo me obligó a hacerlo</h1>
                <p class="mg-b-8"> <span>The Conjuring: The Devil Made Me Do It</span></p>

                <div class="col" style="display: flex;">
                <div class="circles x-small" data-fill="89" hour style="--color:#f5b50a">
                        <span>89 % </span>
                        <div class="bar"></div>
                </div>
                <div class="col-xs-8 col-md-8 star-rating" title="89%" style=" width: 89 %; display:inline-block; margin-bottom:-5px;">
                                <div class="back-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    
                                    <div class="front-stars" style="width: 89%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p class="rate">
                                        <span>
                                     4.7 pts
                                        </span> / de 5
                                    </p>
                </div>          
            </div>            
            <div class="col" style="display: flex;">
                <p class="s-mb-2">112 minutos | 2021 |  </p>
                <div style="padding-left: 6px;
                padding-top: 3px;">
                        <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/Movies-KB-110223284631104/?ref=pages_you_manage" width="92" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>

                 </div>
                <div class="page-description s-mb-1">
                    <p>Los investigadores paranormales Ed y Lorraine Warren se encuentran con lo que se convertir&iacute;a en uno de los casos m&aacute;s sensacionales de sus archivos. La lucha por el alma de un ni&ntilde;o los lleva m&aacute;s all&aacute; de todo lo que hab&iacute;an visto antes, para marcar la primera vez en la historia de los Estados Unidos que un sospechoso de asesinato reclamar&iacute;a posesi&oacute;n demon&iacute;aca como defensa.</p>
                </div>
                
                <div class="s-mb-4 tags-genres">
                                        <a href="../genero/terror.php" class="tags-genres__item">Terror</a>                                            <a href="../genero/suspenso.php" class="tags-genres__item">Suspenso</a>                            
                </div>
                <div class="mg-b-8">
    
                    <div class="share-media">
                        <div class="social-media">

                        <!-- PONER EL LINK DE MI PAGUINA WEB PARA FACEBOOK sharer -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FMovies-KB-110223284631104">
                        <i class="fab fa-facebook-f" high="100px">Compartir</i>
                       </a>
                            <!-- FIN EL LINK DE MI PAGUINA WEB PARA FACEBOOK -->

                            <!-- COMPARTIR TWEETER -->


                            <div class="sm" style="width: auto">
                                <a href="https://twitter.com/intent/tweet?url=https://movies-kb.000webhostapp.com/pelicula/el-conjuro-3-el-diablo-me-obligo-a-hacerlo.php" class="twitter-share-button" data-show-count="false">Tweet</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <!-- FIN DEL COMPARTIR TWEETER -->

                            <div class="clear"></div>
                        </div>
                        <!--<div class="url">
                            <input type="text" value="https://filmoves.com/pelicula/el-conjuro-3-el-diablo-me-obligo-a-hacerlo">
                        </div>-->
                        <div class="clear"></div>
                    </div>
                </div>
                            </div>
        </div>
    </div>
 
    
</div>
         
         <iframe class="video" SRC="https://uqload.com/embed-p9ixb5prt6ka.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=640 HEIGHT=360 allowfullscreen></iframe>

          <!-- inicio de recargar automaticamente la paguina -->

          <div title="Click Aquí para recargar " onclick="window.location.reload(); " class="btn " style="width:100%;max-width:320px;background:orangered;margin:15px
                auto 5px auto;display:block;white-space: nowrap;-ms-text-overflow: ellipsis;text-overflow: ellipsis;overflow:
                hidden ">
            <i class="icon ion-refresh " style="display: inline-flex;position: relative;bottom: -2px; "></i> No carga el video?
            Vuelve a intentarlo aquí
        </div>
        
                
        <div title="Click Aquí para descargar" onclick="window.open('https://pasfox.com/zRqCp')" target="_blank" class="btn " style="width:100%;max-width:320px;background:#007aff;margin:15px
        auto 5px auto;display:block;white-space: nowrap;-ms-text-overflow: ellipsis;text-overflow: ellipsis;overflow:
        hidden ">
            <i class="icon ion-download " style="display: inline-flex;position: relative;bottom: -2px; "></i> DESCARGAR     - El Conjuro 3: El diablo me obligó a hacerlo
        </div>


          <!-- FIN DEL SHOWCASE -->
      
          
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
      <footer class="footer">
      <h3>Movies KB   |   ©Copyright 2020 - 2021</h3>
      </footer>
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