<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'funciones.php';

        if($_POST){
            try{
                $pies = $_POST['pies'];
                $pulgadas = $_POST['pulgadas'];

                if(is_numeric($pies) && is_numeric($pulgadas)){
                    $cm = calcular($pies, $pulgadas);
                    echo "<p>$pies pies y $pulgadas pulgadas son: $cm centimetros</p>";
                }else{
                    throw new Exception("Los valores introducidos no son validos.");
                }

            }catch(Exception $e){
                echo "Error al procesar los datos: " . $e->getMessage()." Espere unos segundos.";
                header("refresh: 5 EJ2.php");
            }
        }
    ?>
    <a href="EJ2.php">Volver al formulario</a>
</body>
</html>