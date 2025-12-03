<?php 
    function comprobarPrimo($numero){
        $contador = 0;
        for($i = 1; $i <= $numero; $i++){
            if($numero % $i == 0){
                $contador++;
            }
        }
        if($contador > 2){
            echo "El numero no es primo.";
        }else{
            echo "El numero es primo";
        }
    }
?>