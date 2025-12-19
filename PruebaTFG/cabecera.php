<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo-header">
            <a href="../index.html">
                <img src="logo.jpg" alt="Logo">
            </a>
        </div>
        <div class="name-header">
            <h1><a href="../index.html">Achoqcomo</a></h1>
        </div>
        <nav class="nav-header">
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="productos.php">Restaurantes</a></li>
                <?php
                    if (isset($_SESSION['usuario'])) {
                        echo '<li><a href="perfil.php">Perfil</a></li>';
                        echo '<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li><a href="login.html">Iniciar Sesión</a></li>';
                        echo '<li><a href="registro.html">Registrarse</a></li>';
                    }
                ?>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>