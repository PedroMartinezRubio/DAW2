<?php 
    if(!empty($_COOKIE['nombre']) && $_COOKIE['colorBack']){
        $color = $_COOKIE['colorBack'];
        $nombre = $_COOKIE['nombre'];
        echo "<style>body {background-color: ".$color.";}</style>";
        echo "Bienvenido $nombre!<br>";
        echo "<p><a href='borrar_prefs.php'>Borrar preferencias</a></p><br>";
        echo "<p><a href='preferencias.php'>Volver al inicio</a></p>";
    }else{
        echo "Pagina de inicio.";
        echo "<p><a href='preferencias.php'>Volver al inicio</a></p>";
    }

?>