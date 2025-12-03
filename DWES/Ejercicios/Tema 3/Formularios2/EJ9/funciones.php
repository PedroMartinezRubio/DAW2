<?php 
    function suma($numeros){
        $resultado = 0;
        for($i = 0; $i < count($numeros); $i++){
            $resultado += $numeros[$i];
        }
        echo "La suma de los valores es: $resultado<br>";
    }
    function media($numeros){
        $suma = 0;
        for($i = 0; $i < count($numeros); $i++){
            $suma += $numeros[$i];
        }
        $media = $suma / count($numeros);
        echo "La media de los valores es: $media<br>";
    }
    function maximo($numeros){
        $resultado = max($numeros);
        echo "El valor maximo alto es: $resultado<br>";
    }
    function minimo($numeros){
        $resultado = min($numeros);
        echo "El valor minimo es: $resultado<br>";
    }
?>