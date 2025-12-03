<?php 
    function calcularFactorial($n){
        $resultado = 1;
        if($n == 0 || $n == 1){
            return 1;
        }else{    
            for($i = $n; $i > 0; $i--){
                $resultado *= $i;
            }
            return $resultado;
        }
    }

    function calcularSumatorio($n){
        $resultado = 0;
        for($i = 0; $i < $n; $i++){
            $resultado += $i;
        }
        return $resultado;
    }
?>