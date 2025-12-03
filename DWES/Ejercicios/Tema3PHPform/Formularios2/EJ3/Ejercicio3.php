<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONVERTIDOR DE DISTANCIAS</h1>
    <p>Escribe una distancia (en centimetros) y la convertire a kilometros, metros y centimetros</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="distancia">Distancia: </label>
        <input type="text" name="cm">cm.
        <br>
        <input type="submit" value="Convertir">
    </form>

    <?php
        //
        if($_POST){
            include 'funciones.php';
            $distancia = $_POST['cm'];

            try{
                if(empty($distancia)){
                    throw new Exception("El campo no puede estar vacio.");
                }else if(!is_numeric($distancia)){
                    throw new Exception("Los datos introducidos no son validos.");
                }else{
                    echo convertir($distancia);
                }
            }catch(Exception $e){
                echo "Ha ocurrido un error " . $e->getMessage() . " Espere unos segundos para intentarlo de nuevo.";
                header("refresh: 4 Ejercicio3.php");
            }
        }
    ?>
</body>
</html>