<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Listado de articulos</h1>
    
    <ul>
        <li><a href="carro.php?precio=40">Zapatillas Reebok (40€)</a></li>
        <li><a href="carro.php?precio=15">Sudadera Domyos (15€)</a></li>
        <li><a href="carro.php?precio=50">Pala de padel Vairo (50€)</a></li>
        <li><a href="carro.php?precio=20">Pelota de baloncesto Molten (20€)</a></li>
    </ul>
    

    <?php 
        session_start();

        $total = 0;
        
        if(isset($_REQUEST['precio'])){
            if(empty($_SESSION['carro'])){
                $total = $_SESSION['carro'] = $_REQUEST['precio'];
            }else{
                $total = $_SESSION['carro'] += $_REQUEST['precio'];
            }
            echo "Total comprado: $total";
        }
        
        if(isset($_GET['vaciar'])){
            session_destroy();
        }
    ?>
    <br>
    <a href="carro.php?vaciar">Vaciar carro</a>
</body>
</html>