<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        if(!isset($_SESSION['loginusu'])){
            header("Location:login.php");
            //echo $_SESSION['loginusu'];
            
        }else{
            echo "<h1>Listado de paginas</h1>";
            echo "<ul>";
                echo "<li><a href='login.php'>Inicio</a></li>";
                echo "<li><a href='pag1.php'>Pagina 1</a></li>";
                echo "<li><a href='pag2.php'>Pagina 2</a></li>";
                echo "<li><a href='cerrar_sesion.php'>Cerrar sesion</a></li>";
            echo "</ul>";
        }
    ?>
    
</body>
</html>