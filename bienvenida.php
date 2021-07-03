<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("📺 😊 ϟ Por favor, antes debes iniciar sesión ϟ 😊 📺");
                window.location = "index.php";
            </script> 

        ';
        session_destroy();
        die(); 
    }


?>




<!DOCTYPE html>

<!doctype html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#020615"/>
    <meta name="propeller" content="60d0ec0eea1021694b4d76db1cb2ba91">
    <title>MOVIES KB 🎬📺 | Ver Peliculas y Series HD Online Gratis</title>
<meta name="keywords" content="peliculas de accion, peliculas online, peliculas de terror, peliculas 2020, peliculas de comedia, peliculas completas, peliculas gratis, peliculas romanticas, peliculas de terror 2020 , series y peliculas hd 2020 , filmoves">
<meta name="description" content="Filmoves - Te Ofrece Las Mejores Peliculas y series Online en calidad HD . En Español Latino, Peliculas De Accion, Terror Entre Otros y En Estreno, Donde Puede Descargar Gratis En HD . Filmoves">
<meta property="og:title" content="FILMOVES - Ver Peliculas y Series HD Online Gratis"/>
<meta property="og:description" content="Filmoves - Te Ofrece Las Mejores Peliculas y series Online en calidad HD . En Español Latino, Peliculas De Accion, Terror Entre Otros y En Estreno, Donde Puede Descargar Gratis En HD . Filmoves"/>
<meta name="a.validate.01" content="293ee0f2fad53986389b1703dd9edac8f86f" /> 
<meta property="og:type" content="website"/>
<meta content="https://filmoves.com/assets/img/coverfb.jpg" property="og:image"/>
<meta property="og:image:type" content="image/jpg"/>
<meta property="og:image:width" content="600"/>
<meta property="og:image:height" content="315"/>
<meta property="fb:app_id" content="352100542110712"/>
<meta content="" property="og:url"/>
<meta name="csrf-token" content="WGfB6VvUjPkkdgnVhBGi86K5QNG5VoGstU4tQ8C8">
<link rel="icon" type="image/ico" href="https://filmoves.com/favicon.ico" />
<link rel="canonical" href="https://filmoves.com" />
<meta name="classification" content="Peliculas y Series Online HD Gratis">
<meta name="Pagetopic" content="Entreteniment">
<meta name="Audience" content="All">
<meta name="author" content="Filmoves">
<meta name="distribution" content="global">

 
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://filmoves.com/css/grid.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://filmoves.com/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://filmoves.com/css/owl.theme.default.min.css">
     
<link rel="icon" size="16x16" type="image/png" sizes="16x16" href="img/kb1.png">
           
</head>
<body>
<!--preloader -->

<div class="loading1" id="loading1" >
    <div class="logo">
      <img src="img/kb.png" class="img-responsive" alt="Movies KB">
    </div> 
    
 <!--    
        <div class="logo">
      <img src="img/kb.png" class="img-responsive" alt="Movies KB">
    </div>
           -->


       
    <br>
    <div class="loading1-text">
      <span class="loading1-text-words">L</span>
      <span class="loading1-text-words">O</span>
      <span class="loading1-text-words">A</span>
      <span class="loading1-text-words">D</span>
      <span class="loading1-text-words">I</span>
      <span class="loading1-text-words">N</span>
      <span class="loading1-text-words">G</span>

    </div>
  </div>



<div class="body-overlay-bg"></div>
<!-- preloader -->
<div class="preloader">
  <div class="status">
    <div class="status-message">
    </div>
  </div>
</div>
<!-- end preloader -->

<div class="header">
    <div class="container">
        <div class="ed-item s-100">
            <div class="hd-left">
        <div class="bmenu">
            <i class="fas fa-bars"></i>
     
    </div>
    <div class="hd-right">

        <ul class="hd-menu">
    <div class="hd-logo">
        <a href="/" title="Movies KB"><img src="img/kb.png" alt=""></a>
        </div>

            <li class="li-active"><a title="Ir al Inicio" href="bienvenida.php"> Inicio</a></li>
            <li><a title="Búscar Peliculas" href="search/search.php">Búscar Pelicula</a></li>
            <li><a class="js-generos"><i class="fas fa-angle-down" style="font-size: 1em;"></i> Generos</a></li>
                <ul class="generos-menu gen-content style-scroll" style="display: none">
                                         <li>
                     <a href="genero/accion.php"><i class="fas fa-angle-right"></i> Accion</a>
                    </li>   
                                         <li>
                     <a href="genero/animacion.php"><i class="fas fa-angle-right"></i> Animación</a>
                    </li>   
                                         <li>
                     <a href="genero/anime.php"><i class="fas fa-angle-right"></i> Anime</a>
                    </li>   
                                         <li>
                     <a href="genero/aventura.php"><i class="fas fa-angle-right"></i> Aventura</a>
                    </li>   
                                         <li>
                     <a href="genero/ciencia-ficcion.php"><i class="fas fa-angle-right"></i> Ciencia Ficción</a>
                    </li>   
                                         <li>
                     <a href="genero/comedia.php"><i class="fas fa-angle-right"></i> Comedia</a>
                    </li>   
                                         <li>
                     <a href="genero/dc-comics.php"><i class="fas fa-angle-right"></i> DC Comics</a>
                    </li>   
                                         <li>
                     <a href="genero/deportes.php"><i class="fas fa-angle-right"></i> Deportes</a>
                    </li>   
                                         <li>
                     <a href="genero/disney.php"><i class="fas fa-angle-right"></i> Disney</a>
                    </li>   
                                         <li>
                     <a href="genero/documental.php"><i class="fas fa-angle-right"></i> Documental</a>
                    </li>   
                                         <li>
                     <a href="genero/drama.php"><i class="fas fa-angle-right"></i> Drama</a>
                    </li>   
                                         <li>
                     <a href="genero/familia.php"><i class="fas fa-angle-right"></i> Familia</a>
                    </li>   
                                         <li>
                     <a href="genero/fantasia.php"><i class="fas fa-angle-right"></i> Fantasía</a>
                    </li>   
                                         <li>
                     <a href="genero/historia.php"><i class="fas fa-angle-right"></i> Historia</a>
                    </li>   
                                         <li>
                     <a href="genero/horror.php"><i class="fas fa-angle-right"></i> Horror</a>
                    </li>   
                                         <li>
                     <a href="genero/marvel.php"><i class="fas fa-angle-right"></i> Marvel</a>
                    </li>   
                                         <li>
                     <a href="genero/musica.php"><i class="fas fa-angle-right"></i> Música</a>
                    </li>   
                                         <li>
                     <a href="genero/netflix.php"><i class="fas fa-angle-right"></i> Netflix</a>
                    </li>   
                                         <li>
                     <a href="genero/romance.php"><i class="fas fa-angle-right"></i> Romance</a>
                    </li>   
                                         <li>
                     <a href="genero/suspenso.php"><i class="fas fa-angle-right"></i> Suspenso</a>
                    </li>   
                                         <li>
                     <a href="genero/terror.php"><i class="fas fa-angle-right"></i> Terror</a>
                    </li>   
                                         <li>
                     <a href="genero/thriller.php"><i class="fas fa-angle-right"></i> Thriller</a>
                    </li>   
                                        
                </ul>
            <li><a title="Ver Peliculas Online" href="peliculas.php">Peliculas</a></li>    
            <li><a title="Ver Series Online" href="series.php">Series</a></li>
            <li><a title="Ver Películas en estreno" href="estrenos.php"> En Estreno</a></li>
            <li><a title="Ver Películas en estreno" href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>

        </div>
        <div class="clear"></div>
    </div>
    </div>
       
    
     <!-- aqui esta el logo -->
        </div>
    </div>
</div>
<div class="menumobile">
</div>
    
    </div>
</div>
    <div class="main" >
            <div class="premiere-series" style="padding-bottom:20px;">
    
<section class="destacado" style="margin-bottom:-1px;">
    <div class="ed-container">
        <div class="ed-item l-50 destacado-info">
            <h2 class="s-mb-3" style="line-height:1.2em;">Luca <span class="bagde-yellow">PELICULA</span></h2>
            <p>Ambientada en un precioso pueblo costero de la Riviera italiana, narra la historia sobre el paso a la edad adulta de un chico que vive un verano inolvidable lleno de helados, pasta e infinitos paseos en scooter. Luca comparte estas aventuras con su nuevo mejor amigo, pero toda la diversi&oacute;n se...</p>
            <a href="pelicula/luca.php" class="button bg-primary"><i class="fa fa-play"></i> Ver Pelicula</a>
           
                        <div id="button-sound" style="display:none;"class="sound sound-mute">
                    <img class="lazyload owl-lazy" id="img-sound" data-src="https://filmoves.com/assets/img/sound-off.png" alt="">
            <!--    <div class="sound--icon fa fa-volume-off"></div>
                <div class="sound--wave sound--wave_one"></div>
                <div class="sound--wave sound--wave_two"></div>-->
            </div>
                          
        </div>
    </div>
         <div id="iframevideo" class="destacado-overlay" style="visibility:hidden;">
            <iframe id="player" allow="autoplay;" 
            style="
            position: absolute;
            z-index: -2;
            top: -149px;
            left: 0;
            height: 131vh;
            width: 100vw;
            object-fit: cover;
            object-position: top;"
            src="https://www.youtube.com/embed/kw50vQA1S-o?autoplay=1&enablejsapi=1&mute=1&controls=0&loop=1&amp;showinfo=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    
        <div id ="imagenportada"class="destacado-overlay">
        <img  id="imagenfondo" src="https://image.tmdb.org/t/p/w1280//620hnMVLu6RSZW6a5rwO8gqpt0t.jpg" alt="">
    </div>
    
    
    <div class="destacado-overlayColor"></div>


</section> 
 
</div>
<!--Ns-NO9_Nj3k-->    <div class="ed-container">
  

    <div class="ed-item s-100 resCarousel" >
            <div class="main-peliculas">
                    <div class="title-detail">
                            <a>
                                 <h2 style="margin-bottom:-2px">Añadido recientemente</h2>
                            </a>
                        <div class="clear"></div>
                    </div>
                    <div class="slider-two">
                    <div class="owl-carousel owl-theme two" id="list">      
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="55%" style=" width: 55 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 55%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/seguridad">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/HUZKvcX0xDRO91wWhBWx.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Seguridad</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="80%" style=" width: 80 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 80%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/kenshin-el-guerrero-samurai-el-final">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/Q8biiejFdnRv0EZuhLRZ.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Kenshin, el guerrero samurái: El final</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="82%" style=" width: 82 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 82%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/ser-padre">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/aCaVy76vjLZ8JIK9Xsin.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Ser padre</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="83%" style=" width: 83 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 83%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/luca">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/igZ0lSD7vbdX87aubgUk.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Luca</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="74%" style=" width: 74 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 74%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/el-tiempo-en-sus-manos">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/QIH1UkHAR52MqIdJ7buK.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">El tiempo en sus manos</p>
                                <span class="YearPosition">1960</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="81%" style=" width: 81 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 81%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/el-nino-y-la-bestia">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/TPGMzSa3KvEOxwgPj7ov.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">El niño y la bestia</p>
                                <span class="YearPosition">2015</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="71%" style=" width: 71 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 71%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/death-saved-my-life">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/MggNhXXZJM3ncPUE0AIr.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Death Saved My Life</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="56%" style=" width: 56 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 56%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/confinados">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/HuxyZ0KvecT11CAatEU3.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Confinados</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="65%" style=" width: 65 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 65%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/batman-the-long-halloween-part-one">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/ztckpS81qNtiGLvdCoU5.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Batman: The Long Halloween Part One</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="59%" style=" width: 59 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 59%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/victor-frankenstein">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/Wi720P8RtFqnnGp5Khzy.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Victor Frankenstein</p>
                                <span class="YearPosition">2015</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="90%" style=" width: 90 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 90%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/wolfpack-unidad-de-combate">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/SZm88KJWC6YimANfRilO.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Wolfpack Unidad de Combate</p>
                                <span class="YearPosition">2019</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="54%" style=" width: 54 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 54%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/la-casa-%28cold-creek-manor%29">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/X4W78NLgXJT8TKaU1gdF.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">La casa (Cold Creek Manor)</p>
                                <span class="YearPosition">2003</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="61%" style=" width: 61 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 61%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/selva-tragica">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/swaXqrQkN5sfVCoU4I3J.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Selva Trágica</p>
                                <span class="YearPosition">2020</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="82%" style=" width: 82 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 82%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/la-skater">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/FGsMeHgHyMoiCL9mFr7N.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">La Skater</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="72%" style=" width: 72 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 72%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/juega-conmigo">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/DFvZ3nb7bkrwBWzXiexE.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Juega Conmigo</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="75%" style=" width: 75 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 75%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/en-un-barrio-de-nueva-york">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/8CskRat6adl3i0dlAXdU.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">En un barrio de Nueva York</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="83%" style=" width: 83 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 83%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/el-dragon-de-los-deseos">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/iySVryHNtcAVt7fZhaiB.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">El dragón de los deseos</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                                <div class="item item-pelicula movie-box-1">
                                                               <div class="stars" style="z-index:25;">
                                        <div class="col-xs-8 col-md-8 star-rating" title="66%" style=" width: 66 %; display:inline-block; margin-bottom:-5px;">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            
                                                            <div class="front-stars" style="width: 66%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                        </div>             
                                    
                                    </div>
                                <a href="https://filmoves.com/pelicula/spiral-saw">    
                                <div class="poster">
                                    <figure>
                                    <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/D501WuxML4AofEtnIzo7.jpg" data-src="" alt="">
                                    </figure>
                                </div>
                                <p class="item-description opacity-none">Spiral: Saw</p>
                                <span class="YearPosition">2021</span>
                            </a>
                        </div>
                                            </div>
                    <div class="left-t nonl-t" id="left-netflix"></div>
                    <div class="right-t" id="right-netflix"></div>
                    </div>
            </div>
    </div>
    
    <div class="ed-item s-100 resCarousel">
        <div class="main-peliculas">
                <div class="title-detail">
                        <a href="/estrenos">
                            <h2 style="margin-bottom:-2px">Estreno</h2>
                        </a>
                    <span class="more"><a href="/estrenos">  Ver todo  <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
                    <div class="clear"></div>
                </div>
                <div class="slider-two">
                <div class="owl-carousel owl-theme two" id="list">      
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="83%" style=" width: 83 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 83%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/luca">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/igZ0lSD7vbdX87aubgUk.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Luca</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="84%" style=" width: 84 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 84%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/el-conjuro-3-el-diablo-me-obligo-a-hacerlo">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/335V7hCgdh9uYofHrO1d.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">El Conjuro 3: El diablo me obligó a hacerlo</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="81%" style=" width: 81 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 81%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/cruella">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/qciRX0vYEHCh7WhPaZ2O.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Cruella</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="65%" style=" width: 65 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 65%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/ejercito-de-los-muertos">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/9wp8yTu9MkIJuh91oISd.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Ejército de los muertos</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="63%" style=" width: 63 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 63%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/la-mujer-en-la-ventana">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/Lqc6OZ724P9GjddBBZEc.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">La mujer en la ventana</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="66%" style=" width: 66 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 66%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/spiral-saw">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/D501WuxML4AofEtnIzo7.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Spiral: Saw</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="69%" style=" width: 69 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 69%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/oxigeno">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/azYwZNOqpInuC7SqA4Ot.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Oxígeno</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="79%" style=" width: 79 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 79%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/mortal-kombat">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/psUHycyvfKMZX5uuGJXt.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Mortal Kombat</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="76%" style=" width: 76 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 76%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/godzilla-vs-kong">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/W4ZD2ypC7xB1q8dVk6A9.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Godzilla vs Kong</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="59%" style=" width: 59 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 59%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/patrulla-trueno">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/lU3HfyuUL3i5c8eDNNdh.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Patrulla Trueno</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="72%" style=" width: 72 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 72%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/el-campamento-de-mi-vida">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/6wNF0TqXZRBHTIiESPLs.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">El campamento de mi vida</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="87%" style=" width: 87 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 87%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/nadie">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/0MEsuhs5fcYG75yL8u5p.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Nadie</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="66%" style=" width: 66 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 66%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/en-la-misma-ola">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/tVMxxrKDMLaEFIuZtdKs.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">En la misma ola</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="90%" style=" width: 90 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 90%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/la-liga-de-la-justicia-de-zack-snyder">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/RC0vos16mPW1jJ1o9plR.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">La Liga de la Justicia de Zack Snyder</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="87%" style=" width: 87 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 87%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/raya-y-el-ultimo-dragon">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/Zd7erpl4AUBBGuXso6y0.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Raya y el último dragón</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="73%" style=" width: 73 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 73%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/el-dia-del-si">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/vLmBa6Z8F1hfri0q34wL.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">El día del Sí</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="78%" style=" width: 78 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 78%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/guerra-de-likes">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/gmYBi3tLaYTMhCg0L6nk.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Guerra de Likes</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                                                       <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="73%" style=" width: 73 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 73%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/caos-el-inicio">    
                            <div class="poster">
                                <figure>
                                <img class="lazyload item-image owl-lazy" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/3w9Ae32V3N3SOhr3XjGD.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Caos: El inicio</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                    </div>
                
                <div class="left-t nonl-t" id="left-netflix"></div>
                <div class="right-t" id="right-netflix"></div>
                
                </div>
        </div>
    </div>

           
 <!-- Categorias-->
 <div class="ed-item s-100">
        <div class="main-peliculas">  
            <div class="categorias-home">
                <div class="owl-carousel owl-theme" id="categorias1"> 
                
                          <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/comedia/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/COMEDIA.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a>
                                 </div>
                        </div> 
                        <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/netflix/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/NETFLIX.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a> 
                                </div>
                        </div> 
                       
                        <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                            <a href="/genero/marvel/">
                             <div class="listing-container">
                                <div class="listing-image">
                                    <div class="buttons">
                                    </div>
                                        <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/MARVEL.jpg"  alt="">
                                   </div>
                            </div>
                            </a>
                            </div>
                        </div>
                    <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                                <a href="/genero/dc-comics/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/DC_COMICS.jpg"  alt="">
                                       </div>
                                </div>
                                </a>
                             </div>
                        </div>
                        
                          <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/disney/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/DISNEY.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a> 
                                </div>
                        </div> 
                        
                         <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                                <a href="/genero/anime/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/ANIME.jpg"  alt="">
                                       </div>
                                </div>
                                </a>
                             </div>
                        </div> 
                        
                        <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/accion/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/ACCION.jpg" alt="">
                                           </div>
                                    </div>
                                    </a>
                                 </div>
                        </div>
                        <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/animacion/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/ANIMACION.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a>
                                 </div>
                        </div>
                         
                        <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/ciencia-ficcion/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/CIENCIA_FICCION.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a>
                                 </div>
                        </div>
                        <div class="item item-pelicula"  style="height:100px;">
                                <div class="movie-box-4">
                                    <a href="/genero/aventura/">
                                     <div class="listing-container">
                                        <div class="listing-image">
                                            <div class="buttons">
                                            </div>
                                                <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/AVENTURA.jpg"  alt="">
                                           </div>
                                    </div>
                                    </a>
                                 </div>
                        </div>

                     
                        
                        <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                                <a href="/genero/drama/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/DRAMA.jpg"  alt="">
                                       </div>
                                </div>
                                </a>
                             </div>
                         </div>   
                        <div class="item item-pelicula"  style="height:100px;">
                        <div class="movie-box-4">
                            <a href="/genero/deportes/">
                             <div class="listing-container">
                                <div class="listing-image">
                                    <div class="buttons">
                                    </div>
                                        <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/DEPORTE.jpg"  alt="">
                                   </div>
                            </div>
                            </a>
                         </div>
                        </div>

                        <div class="item item-pelicula"  style="height:100px;">
                        <div class="movie-box-4">
                        <a href="/genero/fantasia/">
                         <div class="listing-container">
                            <div class="listing-image">
                                <div class="buttons">
                                </div>
                                    <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/FANTASIA.jpg"  alt="">
                               </div>
                            </div>
                        </a>
                        </div>
                        </div>
                        
                        <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                                <a href="/genero/terror/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/TERROR.jpg" alt="">
                                       </div>
                                </div>
                                </a>
                             </div>
                         </div>
                         
                        <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                                <a href="/genero/romance/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/ROMANCE.jpg" alt="">
                                       </div>
                                </div>
                                </a>
                             </div>
                        </div> 
                        <div class="item item-pelicula"  style="height:100px;">
                            <div class="movie-box-4">
                              <a href="/genero/musica/">
                                 <div class="listing-container">
                                    <div class="listing-image">
                                        <div class="buttons">
                                        </div>
                                            <img class="owl-lazy lazyload" data-src="https://filmoves.com/assets/img/genders/MUSICA.jpg"  alt="">
                                       </div>
                                </div>
                              </a>
                            </div>
                    </div>       
                </div>
            </div>
        </div>  
</div>
<!-- Categorias-->



    

<div class="ed-item s-100 resCarousel" >
    <div class="premiere-series">
            <section class="destacado" style="margin-botton:-5rem;height: 400px;">
        <div class="ed-container">
            <div class="ed-item l-50 destacado-info" style="margin-top: -1.5rem; margin-bottom:5rem; margin-left:-1rem;" >
                    <a href="https://filmoves.com/pelicula/seguridad">
                        <h4 id="titul">ORIGINAL DE NETFLIX</h2>
                    </a>
                <a href="https://filmoves.com/pelicula/seguridad">
                <h2 class="s-mb-3">Seguridad <span class="bagde-yellow">PELICULA</span></h2>
                <p>Cuando una adolescente local es acosada sexualmente y golpeada, se levanta revuelo en el pueblo y salen a la luz la corrupci&oacute;n y los prejuicios.</p>
            </a>
            <a href="https://filmoves.com/pelicula/seguridad" class="button bg-primary"><i class="fa fa-play"></i> Ver Pelicula</a>
            </div>
        </div>
      
        <div id="imagenfondo" class="destacado-overlay" style="padding-bottom: 40.25%;">
            <img src="https://image.tmdb.org/t/p/w1280//fV3gp5MWfqpXZrsICHaCy9csKo8.jpg" alt=""> 
        </div>
        <div class="destacado-overlayColor" style="width: 200%;"></div>
        <div class="destacado-overlayColorNetflix"></div>
    </section>
        </div>
</div>







<div class="ed-item s-100 resCarousel">
        <div class="main-peliculas">
                <div class="title-detail">
                        <a href="/genero/netflix/">
                            <h2 style="margin-bottom:-2px">Originales de Netflix</h2>
                        </a>
                    <span class="more"><a href="/genero/netflix/">Ver todo <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
                    <div class="clear"></div>
                </div>
                <div class="slider-two">
                <div class="owl-carousel owl-theme two" id="list">      
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="82%" style=" width: 82 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 82%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/ser-padre">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/aCaVy76vjLZ8JIK9Xsin.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Ser padre</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="55%" style=" width: 55 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 55%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/seguridad">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/HUZKvcX0xDRO91wWhBWx.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Seguridad</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="83%" style=" width: 83 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 83%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/el-dragon-de-los-deseos">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/iySVryHNtcAVt7fZhaiB.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">El dragón de los deseos</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="66%" style=" width: 66 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 66%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/roberto-baggio-la-divina-coleta">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/3tJMVb2jVYmFkgAJOAGh.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Roberto Baggio, la Divina Coleta</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="74%" style=" width: 74 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 74%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/david-copeland-el-hombre-que-aterrorizo-londres">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/WmU6W1eMhqUbIAb6PilG.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">David Copeland: El hombre que aterrorizó Londres</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="65%" style=" width: 65 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 65%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/ejercito-de-los-muertos">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/9wp8yTu9MkIJuh91oISd.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Ejército de los muertos</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="71%" style=" width: 71 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 71%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/yo-soy-todas-ellas">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/kWmtOpePMmAy71iIUXJ3.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Yo soy todas ellas</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="63%" style=" width: 63 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 63%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/la-mujer-en-la-ventana">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/Lqc6OZ724P9GjddBBZEc.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">La mujer en la ventana</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="71%" style=" width: 71 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 71%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/ferry">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/4ahgFvVJXGoVXIOKr2rV.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Ferry</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="69%" style=" width: 69 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 69%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/oxigeno">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/May2021/azYwZNOqpInuC7SqA4Ot.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Oxígeno</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="80%" style=" width: 80 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/kenshin-el-guerrero-samurai-el-final">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/June2021/Q8biiejFdnRv0EZuhLRZ.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Kenshin, el guerrero samurái: El final</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="64%" style=" width: 64 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 64%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/por-que-me-mataron-">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/iJ5e9h9X1Ha6OFEyECS2.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Por qué me Mataron?</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="0%" style=" width: 0 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 0%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/our-towns">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/gjoo9JBUAmAVXjHHDEz7.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Our Towns</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="62%" style=" width: 62 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 62%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/contigo-a-muerte">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/izPe82CUT2NOScvK4nWz.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Contigo a muerte</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="62%" style=" width: 62 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 62%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/madame-claude">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/q9GsoL0Bw8rYCJ6deA3E.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Madame Claude</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="58%" style=" width: 58 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 58%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/solo-di-que-si">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/LIkqW6d83NTVRiG6Fc6D.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Solo di que sí</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="59%" style=" width: 59 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 59%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/patrulla-trueno">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/April2021/lU3HfyuUL3i5c8eDNNdh.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">Patrulla Trueno</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="72%" style=" width: 72 %; display:inline-block; margin-bottom:-5px;">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                        <div class="front-stars" style="width: 72%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                    </div>             
                                
                                </div>
                            <a href="https://filmoves.com/pelicula/el-campamento-de-mi-vida">    
                            <div class="poster">
                                <figure>
                                <img class="owl-lazy lazyload item-image" src="https://filmoves.com/assets/img/lazyload.png" data-src="https://www.filmoves.com/storage/movies/March2021/6wNF0TqXZRBHTIiESPLs.jpg" data-src="" alt="">
                                </figure>
                            </div>
                            <p class="item-description opacity-none">El campamento de mi vida</p>
                            <span class="YearPosition">2021</span>
                        </a>
                    </div>
                                    </div>
                <div class="left-t nonl-t" id="left-netflix"></div>
                <div class="right-t" id="right-netflix"></div>
                </div>
        </div>
</div>


<!-- Agregue este modulo de Series-->
<div class="ed-item s-100 resCarousel"> 
        <div class="main-peliculas">
                <div class="title-detail">
                        <a href="/series">
                            <h2 style="margin-bottom:-2px">Series</h2>
                        </a>
                    <span class="more"><a href="/series">Ver todo <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
                    <div class="clear"></div>
                </div>
                <div class="slider-series">
                <div class="owl-carousel owl-theme two" id="list">    
                                            <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="90%" style=" width: 90 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 90%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/loki">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/June2021/QhKnKmA2OvM8G5MgcBeN.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Loki</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="67%" style=" width: 67 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 67%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/elite">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/October2019/3CYkL1gUmJdOGZgeFyLT.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Élite</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2018</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="81%" style=" width: 81 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 81%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/lupin">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/January2021/Zwbc8XrG6f46fwrkr4A8.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Lupin</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="87%" style=" width: 87 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 87%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/superman-y-lois">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/February2021/O8G945vhCeSbdS1bMaPV.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Superman y Lois</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="96%" style=" width: 96 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 96%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/star-wars-la-remesa-mala">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/May2021/6N9dOxLFFoPwrSVLukrc.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Star Wars: La remesa mala</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="82%" style=" width: 82 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 82%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/sweet-tooth-el-nino-ciervo">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/June2021/amPHtsTHRkKdzpXN5wEr.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Sweet Tooth: El niño ciervo</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="78%" style=" width: 78 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 78%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/dom">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/June2021/rQv0IMGFapeLm8UcwO3R.jpg" alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">DOM</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2021</span>
                        </a>
                    </div>
                                        <div class="item item-pelicula movie-box-1">
                            <div class="stars" style="z-index:25;">
                                    <div class="col-xs-8 col-md-8 star-rating" title="74%" style=" width: 74 %; display:inline-block; margin-bottom:-5px;">
                                            <div class="back-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                        
                                                    <div class="front-stars" style="width: 74%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                            </div>
                                    </div> 
                                            
                                
                                </div>
                        <a href="https://filmoves.com/serie/lucifer">    
                            
                                                        <div class="poster">
                                <figure style=" padding-bottom: 165px">
                                <img style="object-fit: cover;
                                box-shadow: 0 0 3px 2px rgba(0,0,0,.3);
                                margin: auto;
                               "class="lazyload item-image owl-lazy" data-src="https://www.filmoves.com/storage/tvshows/June2021/mrIPywtWusO3CCBXyfwG.jpg"  alt="">
                                </figure>
                            </div>
                                                        <p class="item-description opacity-none">Lucifer</p>
                            <span class="YearPosition" style="margin-bottom: 6px;">2016</span>
                        </a>
                    </div>
                                        
                </div>
                
                <div class="left-t nonl-t" id="series-home-left"></div>
                <div class="right-t" id="series-home-right"></div>
            
                </div> 
                    
        </div>
    </div>

    


<!-- Agregue este modulo de Accion-->
<div class="ed-item s-100">
     <div class="s-mb-3">
    <div class="title-detail">
        <h2>Proximos estrenos</h2>
        <span class="more"><a href="/proximos-estrenos/">Ver todo</a></span>
        <div class="clear"></div>
    </div>
    <div class="ed-grid rows-gap s-grid-2 m-grid-3 lg-grid-6">
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/the-batman">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/March2021/ZXa8p4s4tbVvd72kHAAc.jpg" alt="The Batman"></figure>
                <p class="s-mb-1">The Batman</p>
                <span class="YearPosition">2022</span>
            </a>
        </div>
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/cazafantasmas-mas-alla">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/January2021/qs3Dy9k2lg7TY97X0CLH.jpg" alt="Cazafantasmas: Más allá"></figure>
                <p class="s-mb-1">Cazafantasmas: Más allá</p>
                <span class="YearPosition">2021</span>
            </a>
        </div>
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/space-jam-a-new-legacy">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/April2021/z0kfoHFQMs9aZrDGynjm.jpg" alt="Space Jam: A New Legacy"></figure>
                <p class="s-mb-1">Space Jam: A New Legacy</p>
                <span class="YearPosition">2021</span>
            </a>
        </div>
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/doctor-strange-in-the-multiverse-of-madness">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/March2021/8pnr5zp8PnNE4aT9dqeZ.jpg" alt="Doctor Strange in the Multiverse of Madness"></figure>
                <p class="s-mb-1">Doctor Strange in the Multiverse of Madness</p>
                <span class="YearPosition">2022</span>
            </a>
        </div>
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/fast-and-furious-9">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/November2020/3URz4VbGu2siyxK0dX9S.jpg" alt="Fast &amp; Furious 9"></figure>
                <p class="s-mb-1">Fast &amp; Furious 9</p>
                <span class="YearPosition">2021</span>
            </a>
        </div>
                <div class="item-pelicula">
            <a href="https://filmoves.com/pelicula/john-wick-4">
                <figure><img class="lazyload owl-lazy" data-src="https://www.filmoves.com/storage/movies/March2021/aL575GkpvXktdVn2w2iw.jpg" alt="John Wick 4"></figure>
                <p class="s-mb-1">John Wick 4</p>
                <span class="YearPosition">2022</span>
            </a>
        </div>
            </div>
    <div class="clear"></div>
</div></div>
</div>


                <a  title="Click para unirte" href="https://discord.gg/9gJbAkCK77" target="_blank" rel="nofollow" id="chat-online">
            <img width="30" src="https://lh3.googleusercontent.com/_4zBNFjA8S9yjNB_ONwqBvxTvyXYdC7Nh1jYZ2x6YEcldBr2fyijdjM2J5EoVdTpnkA=w256">
             Unete al chat
          </a>
                
                
        
        

            </div>

<div class="footer">
	<div class="container">
		<div class="ed-item s-100 content-footer">


        <div class="ft-left" style="width:30%">
            <img src="img/kb.png" alt="">
        </div>
    
        <div class="ft-right" style="margin-top: 0.1px;">
                <div class="share-media">
                        <div class="social-media">
                            <div class="sm" style="width: auto">
                                    <a href="https://www.facebook.com/profile.php?id=100010066055515" target="_blank"><i  style="font-size:25px" class="fab fa-facebook-f"></i></a>
                                       
                            </div>
                            <div class="sm" style="width: auto">
                                    <a href="https://www.instagram.com/alextoconas/" target="_blank"><i  style="font-size:25px" class="fab fa-instagram"></i></a>
                                       
                            </div>
                            <div class="sm" style="width: auto">
                               
                                    <a href="https://twitter.com/GoadProject"  style="font-size:25px" target="_blank"> <i class="fab fa-twitter"></i></a>
                                        
                            </div>
                    
                        </div>
                        
                        <div class="clear"></div>
                    </div>
        </div>
        
        
        
        <div class="clear">
               
        </div>
    </div>
    </div>
</div><script src ="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://filmoves.com/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       var date = new Date();
       date.setTime(date.getTime() + (3600 * 1000));
       var myCookie = Cookies.get("isn5");
         if(myCookie === null || myCookie === undefined){
          Cookies.set('isn5', 'true', { expires: date});
           document.getElementById("loading1").style.visibility = "visible";
         }else {
           document.getElementById("loading1").style.visibility = "hidden";
         }
       setTimeout(function(){
           $('.loading1').fadeOut('slow');
         }, 2050);
       
   });
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
</script>

<script src="https://filmoves.com/assets/build/front.min.js?v=4.0.4"></script>
<script src="https://filmoves.com/js/push.min.js"></script>
<!--<script src="https://filmoves.com/js/lazyload/lazyload.js"></script>-->
<script src="https://filmoves.com/js/main.js"></script>
<script src="https://filmoves.com/js/jquery.min.js"></script>
<script src="https://filmoves.com/js/owl.carousel.min.js"></script>
<script type="text/javascript">
  
       $( ".js-generos" ).click(function() {
           $( ".gen-content" ).toggle( "fade", function() {
               // Animation complete.
           });
       });
</script>


    <script src="https://filmoves.com/js/slick.min.js"></script>
    <script src="https://filmoves.com/js/jquery.lazy.js"></script>
  
 <!--  <script src="https://propu.sh/pfe/current/tag.min.js?z=3048435" data-cfasync="false" async></script> -->
     <script type="text/javascript">
   

     $(function() {
        $('img').Lazy({
           
            threshold: 50,
            effect: "fadeIn",
          effectTime: 1000,
        });
    });
       
    $('#categorias1').owlCarousel({
    lazyLoad:true,
    lazyLoadEager:3,
    loop: true,
    margin: 2,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: true,
    dots: false,
    navText: [
        '<div class="left-t nonl-t"></div>',
        '<div class="right-t"></div>'
    ],
    navContainer:'.main-peliculas .custom-nav',
    dotsContainer: '#customDots',
    responsive:{
        0:{
            items: 2.3       
        },
        600:{
            items: 4.2
        },
        1000:{
            items: 6
        }
    }
});  

    $('.two').owlCarousel({
    lazyLoad:true,
    loop: true,
    responsiveClass:true,
    margin: 2,
    nav: true,
    navigation : true,
    dots: false,
    navText: [
        '<div class="left-t nonl-t"></div>',
        '<div class="right-t"></div>'
    ],
    navContainer:'.main-peliculas .custom-nav',
    dotsContainer: '#customDots',
    responsive:{
        0:{
            items: 2.3       
        },
        600:{
            items: 4.2
        },
        1000:{
            items: 6.2
        }
    }
});  

$(".resCarousel").on("click", ".right-t", function (a) {
    $(this).parent().parent().parent().find("#list").trigger("next.owl.carousel"), a.preventDefault()
});

$(".resCarousel").on("click", ".left-t", function (a) {
    $(this).parent().parent().parent().find("#list").trigger("prev.owl.carousel"), a.preventDefault()
});


var owl3 = $('.two');
     owl3.owlCarousel();

 owl3.on("translated.owl.carousel",".right-t", function(event) {
         $(".right-t").removeClass("nonr-t");
         $(".left-t").removeClass("nonl-t");
         if ($('.owl-next').is(".disabled")) {
             $(".slider-two .right-t").addClass("nonr-t");
         }
         if ($('.owl-prev').is(".disabled")) {
             $(".slider-two .left-t").addClass("nonl-t");
         }
     })

     owl3.on('translated.owl.carousel', function(event) {
         $(".right-t").removeClass("nonr-t");
         $(".left-t").removeClass("nonl-t");
         if ($('.owl-next').is(".disabled")) {
             $(".slider-two .right-t").addClass("nonr-t");
         }
         if ($('.owl-prev').is(".disabled")) {
             $(".slider-two .left-t").addClass("nonl-t");
         }
     })

    var changeSlide = 4;
// mobile -1, desktop + 1
// Resize and refresh page. slider-two slideBy bug remove
    var slide = changeSlide;    
    if ($(window).width() < 600) {
                var slide = changeSlide;
                slide--;
    }
            else if ($(window).width() > 999) {
                var slide = changeSlide;
                slide++;
    }

            else{
            var slide = changeSlide;
    }


  
</script>

<script type="text/javascript">

$(document).ready(function() {
        setTimeout(function(){
            document.getElementById("iframevideo").style.visibility = "visible";
      }, 500);
    });
var tag = document.createElement('script');
       tag.src = 'https://www.youtube.com/player_api';
       var firstScriptTag = document.getElementsByTagName('script')[0];
       firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);
       var player;
       function onYouTubeIframeAPIReady(){
        console.log("apiready");
           player = new YT.Player('player',{
               playerVars:{'autoplay':1,'controls':0,'showinfo':0 , 'loop':1},
               events:{
                   'onReady' : onPlayerReady,
                   'onStateChange' : onPlayerStateChange
               }
           });
}

var done = false;
       function onPlayerReady(e){
        player.mute();
             
       }
      
       function onPlayerStateChange(e){
           if(e.data == YT.PlayerState.PLAYING && !done){
            setTimeout(function(){
           $('#button-sound').fadeIn('slow');
         }, 3000);
            setTimeout(function() {
              document.getElementById("iframevideo").style.display = "block";
              document.getElementById("imagenfondo").style.display = "none";
             
        },3000);

            setTimeout(function() {
                player.pauseVideo();
           },118 * 1000);
           }
           
         else{
             document.getElementById("iframevideo").style.display = "none";
              document.getElementById("imagenfondo").style.display = "block";
              setTimeout(function(){
           $('#button-sound').fadeOut('slow');
         }, 1000);
        }      
    }

var activarsonido = false;
       $('.sound-mute').click(function() {
        console.log(activarsonido);
        activarsonido = !activarsonido;
        $(this).toggleClass('sound-mute');
        if(activarsonido ==true){
            player.unMute();
            document.getElementById("img-sound").src = "/assets/img/sound-on.png";
        }else{
            player.mute();
            document.getElementById("img-sound").src = "/assets/img/sound-off.png";
        }
    });    


function someMethodIThinkMightBeSlow() {
    const startTime = performance.now();

    const duration = performance.now() - startTime;
    console.log(`someMethodIThinkMightBeSlow took ${duration}ms`);
}
</script>





<script>
        $(document).ready(function(){
            $('.premiere-series').slick({
                lazyLoad: true,
                dots: !1,
                infinite: !0,
                speed: 600,
                slidesToShow: 1,
                fade:true,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2300,
                arrows: !0,
                prevArrow: "<button class='slick-prev slick-arrow'><i class='ion-ios-arrow-left'></i></button>",
                nextArrow: "<button class='slick-next slick-arrow'><i class='ion-ios-arrow-right'></i></button>"
            });
        }); 
    </script>
    


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138257456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138257456-1');
</script>
<script>
    var date = new Date();
    date.setTime(date.getTime() + (3600 * 4000));
    var myCookie = Cookies.get("filmoves20");
    if(myCookie === null || myCookie === undefined){
        Cookies.set('filmoves20', 'true', { expires: 30});
        Push.create("Ataque a los Titanes episodio ESTRENO", {
        body: "Nuevo capítulo disponible",
        icon: "https://www.filmoves.com/storage/users/April2019/CzBdgtioDGIEO5k1sNH3.jpg",
        timeout: 99000,
        onClick: function () {
            window.location = "https://filmoves.com/serie/riverdale/temporada-5/capitulo-2"
            this.close();
        }
    });
    }else{


        console.log("ya existe pruebe mañana");

    }
    
    </script>

<!--

<script src="//code.tidio.co/iwfrd9nzfkyiv2hn75ngfcwb8ezfup6u.js">
</script> -->

<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138257456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138257456-1');
</script>
<script>
    var date = new Date();
    date.setTime(date.getTime() + (3600 * 4000));
    var myCookie = Cookies.get("filmoves20");
    if(myCookie === null || myCookie === undefined){
        Cookies.set('filmoves20', 'true', { expires: 30});
        Push.create("Ataque a los Titanes episodio ESTRENO", {
        body: "Nuevo capítulo disponible",
        icon: "https://www.filmoves.com/storage/users/April2019/CzBdgtioDGIEO5k1sNH3.jpg",
        timeout: 99000,
        onClick: function () {
            window.location = "https://filmoves.com/serie/riverdale/temporada-5/capitulo-2"
            this.close();
        }
    });
    }else{


        console.log("ya existe pruebe mañana");

    }
    
    </script>

  -->

</body>
</html>