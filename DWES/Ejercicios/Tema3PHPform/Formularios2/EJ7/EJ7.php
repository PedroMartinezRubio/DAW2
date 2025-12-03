<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>COMPRUEBA PRIMALIDAD</h1>
    <p>Escribe un numero entero positivo y te dire si es un numero primo</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Numero: </label>
        <input type="text" name="numero">
        <br>
        <input type="submit" value="Comprobar">
    </form>
    <?php 
        if($_POST){
            include 'funciones7.php';
            $numero = $_POST['numero'];


            try{

                if(empty($numero)){
                    throw new Exception("El campo no puede estar vacio.");
                }elseif(!is_numeric($numero)){
                    throw new Exception("El valor introducido no es un numero.");
                }elseif($numero < 1){
                    throw new Exception("El numero introducido no es valido.");
                }else{
                    comprobarPrimo($numero);
                }

            }catch(Exception $e){
                echo "Ha ocurrido un error: ".$e->getMessage()." Por favor, espere unos segundos.";
                header("refresh: 4 EJ7.php");
            }
        }
    ?>
</body>
</html>