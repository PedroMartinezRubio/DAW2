<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCULA DIVISORES</h1>
    <p>Escribe un numero entero positivo y te dire sus divisores</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Numero: </label>
        <input type="text" name="numero">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
        if($_POST){
            include 'funciones6.php';
            $num = $_POST['numero'];

            try{
                if(empty($num)){
                    throw new Exception("El campo no puede estar vacio.");
                }elseif(!is_numeric($num)){
                    throw new Exception("El valor debe de ser un valor numerico.");
                }elseif($num < 0){
                    throw new Exception("El valor introducido tiene que ser positivo.");
                }else{
                    divisores($num);
                }
            }catch(Exception $e){
                echo "Ha ocurrido un error: ".$e->getMessage()." Espere unos segundos.";
                header("refresh: 4 Ejercicio6.php");
            }
        }
    ?>
</body>
</html>