<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numero de columnas</h1>
    <p>Escribe el numero de columnas que quieres que se generen</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>Numero de columnas: </label>
        <input type="text" name="numero">
        <br>
        <input type="submit" value="Dibujar">
    </form>
    <br>
    <?php 
        if($_POST){
            include 'funciones.php';
            $numero = $_POST['numero'];

            try{
            if(empty($numero)){
                throw new Exception("El campo no puede estar vacio.");
            }elseif(!is_numeric($numero)){
                throw new Exception("El numero introducido no es valido.");
            }elseif($numero < 0){
                throw new Exception("No se generara ninguna columna.");
            }else{
                columnas($numero);
            }

            }catch(Exception $e){
                echo "Ha ocurrido un problema: " . $e->getMessage() . " Por favor, espere unos segundos.";
                header("refresh: 4 EJ10.php");
            }
            
        }
    ?>
</body>
</html>