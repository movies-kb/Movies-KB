<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("👑 😊 ϟ Por favor, antes debes iniciar sesión ϟ 😊 👑");
                window.location = "../index.php";
            </script> 

        ';
        session_destroy();
        die(); 
    }


?>




<head>
<title>Búscar Peliculas y Series HD Online Gratis | Movies KB </title>
<script src="js2/jquery.js"></script>
<script src="js2/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="styles.css">


<link rel="icon" type="image/png" sizes="16x16" href="../img/kb1.png">

</head>
<body>
    
 <header>

    <input type="search" id="input-search" placeholder="Buscar Película">
    
    <div class="content-search">
        <div class="content-table">
            <table id="table">
                <thead>
                    <tr>
                        <td></td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><a href="../pelicula/butchers.php">Butchers</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/el-conjuro-3-el-diablo-me-obligo-a-hacerlo.php">El conjuro 3 | El diablo me obligo a hacerlo</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/ted.php">ted</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/ted-2">ted 2</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../serie/los-simpson.php">Los Simpson</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/annabelle.php">Annabelle</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/annabelle-creation.php">Annabelle: La creacion</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/annabelle-vuelve-a-casa.php">Annabelle: Vuelve a casa</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/el-conjuro-2.php">El conjuro 2 Expediente Warren: El caso Enfield</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/expediente-warren-el-conjuro.php">Expediente Warren: El conjuro</a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="../pelicula/la-monja.php">La monja</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/paranormal-movie.php">Paranormal Movie</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/paranormal-movie-2.php">Paranormal Movie 2</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/madagascar-3-de-marcha-por-europa.php">Madagascar 3: De marcha por Europa</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/la-razon-de-estar-contigo-tu-mejor-amigo.php">Tu mejor Amigo: La razón de estar contigo</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/tu-mejor-amigo-un-nuevo-viaje.php">Tu mejor Amigo: Un nuevo viaje</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/cruella.php">Cruella</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/vengadores-infinity-war.php">Vengadores: Infinity War</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/vengadores-end-game.php">Vengadores: End Game</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/la-skater.php">La skater</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/un-ultimo-deseo.php">Un ultimo deseo</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/mortal-kombat.php">Mortal Kombat</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/especies-en-peligro-de-extincion.php">Especies en Peligro de Extincion</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/a-ciegas.php">A ciegas</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/jurassic-world.php">Jurassic World</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/la-purga-la-noche-de-las-bestias.php">La Purga: La noche de las bestias</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/insidious-capitulo-3.php">Insidious: Capítulo 3</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/en-la-hierba-alta.php">En la hierba alta</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/insidious.php">Insidious</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/insidious-capitulo-2.php">Insidious: Capitulo 2</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/la-llorona.php">La Llorona</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/vidas-de-papel.php">Vidas de Papel</a></td>
                    </tr>

                    <tr>
                        <td><a href="../pelicula/luca.php">Luca</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</header>

<center>
<nav class="nav-main">
       <ul class="nav-menu show">
            <li>
               <a href="../bienvenida.php"> Inicio </a>
            </li>
            <li>
               <a href="../generos.php">Generos </a>
            </li>
            <li>
               <a href="../peliculas.php"> Peliculas </a>
            </li>
            <li>
               <a href="../series.php"> Series </a>
           </li>
           <li>
               <a href="../estrenos.php"> En Estreno </a>
            </li>
            <li>
               <a href="../php/cerrar_sesion.php"> Cerrar Sesion </a>
            </li>
       </ul>
       <ul class="nav-menu-right">
       </ul>
    </nav>
       </center>
<script src="js2/search.js"></script>

</body>