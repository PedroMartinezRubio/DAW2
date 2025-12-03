<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Creo el array 
        $tabla = array();
        [] []
        //Un bucle for anidado dentro de otro para crear la tabla de multiplicar
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j <= 10; $j++){
                $tabla[$i][$j] = $i*$j;
            }
        }
        //Un bucle foreach anidad dentro de otro para leer el array bidimensional y para mostrarlo por pantalla
        //Accedo al array bidimensional a la primera columna.
        foreach($tabla as $num => $n2){
            echo "Tabla del ".$num."<br>";
            //Se lee la linea(segunda parte del array). Muestra el numero de la columna por el numero de cada celda y al final el resultado
            foreach($n2 as $multiplicador => $resultado){
                echo "$num x $multiplicador = $resultado<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>