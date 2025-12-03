<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FOR EACH</h1>
    <p>Introduce cuantas veces se ha de repetir la funcion Array_rand()</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Numero de veces: </label>
        <input type="text" name="veces">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';
            $repeticiones = $_POST['veces'];

            $baraja = [
                'Diamantes' => 'Rojo',
                'Corazones' => 'Rojo',
                'Treboles' => 'Negro',
                'Picas' => 'Negro'
            ];

            try{
                if(empty($repeticiones) || $repeticiones < 0 || !is_numeric($repeticiones)){
                    throw new Exception("Los valores introducidos no son validos.");
                }
                if($repeticiones > count($baraja)){
                    throw new Exception("El numero es demasiado alto.");
                }

                cartasBarajas($baraja, $repeticiones);
            }catch(Exception $e){
                echo "Ha ocurrido un error: ".$e->getMessage()." Espere unos segundos.";
                header("refresh: 4 form.html");
            }
        }
    ?>
</body>
</html>