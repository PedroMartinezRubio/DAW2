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
            $segundos = $_POST['seg'];

            try{
                if(is_numeric($segundos)){
                    
                    $minutos = conversionMin($segundos);
                    $resto = restoSeg($segundos);

                    echo "$segundos son: $minutos minutos y $resto segundos.";
                }else{
                    throw new Exception("Los datos introducidos no son validos.");
                }

            }catch(Exception $e){
                echo "Ha ocurrido un error con los datos: " . $e->getMessage() . " Espere unos segundos";
                header("refresh: 4 EJ3.php");
            }
        }
    ?>
    <a href="EJ3.php">Volver al formulario</a>
</body>
</html>