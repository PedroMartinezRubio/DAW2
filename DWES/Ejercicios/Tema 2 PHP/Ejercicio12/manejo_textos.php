<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $radio = 5;
        define('PI', 3.1416);
        $area = PI * pow($radio, 2);
        $textoResultado = "El area calculada del circulo es: ".number_format($area, 2);
        echo $textoResultado."<br>";

        $textoResultadoMayus = strtoupper($textoResultado);
        echo $textoResultadoMayus."<br>";

        $textoResultadoModificado = str_replace("calculada", "obtenida", $textoResultado);
        echo $textoResultadoModificado."<br>";

        echo "La cantidad de caracteres en esta cadena es: ".strlen($textoResultadoModificado)."<br>";

        echo "La posicion de la palabra 'Circulo' es: ".strpos($textoResultadoModificado, "circulo")."<br>";

        $numeros = "1,2,3,4,5";
        $array = explode(",", $numeros);
        $texto = implode("+", $array);

        $suma = 0;
        foreach($array as $num){
            $suma += $num;
        }
        echo $texto." = ".$suma;
    ?>
</body>
</html>