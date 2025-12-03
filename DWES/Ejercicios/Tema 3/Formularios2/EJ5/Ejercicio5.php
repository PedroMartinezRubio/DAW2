<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DIBUJA RECTANGULO</h1>
    <p>Escribe la altura y la anchura para dibujar un rectangulo de estrellas de ese tamaño</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Altura: </label>
        <input type="text" name="altura">
        <br>
        <label>Anchura: </label>
        <input type="text" name="anchura">
        <br>
        <input type="submit" value="Dibujar">
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';
            $altura = $_POST["altura"];
            $anchura = $_POST["anchura"];

            try{
                if(empty($altura) || empty($anchura)){
                    throw new Exception("Los campos no pueden estar vacios.");
                }else if(!is_numeric($altura) || !is_numeric($anchura)){
                    throw new Exception("Los campos no se han rellenado con numeros.");
                }else{
                    dibujar($altura, $anchura);
                }

            }catch(Exception $e){
                echo "Ha ocurrido un error: ".$e->getMessage()." Por favor, espere unos segundos";
                header("refresh: 4 Ejercicio5.php");
            }
        }
    ?>
</body>
</html>