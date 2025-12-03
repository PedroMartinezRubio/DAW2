<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $datos = "datos.txt";
        $copia = "copia_datos.txt";
        if(file_exists($datos)){
            $texto = file_get_contents($datos);
            file_put_contents($copia, $texto);
        }else{
            echo "El archivo no existe";
        }
    ?>
</body>
</html>