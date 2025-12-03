<?php 
    function imc($a, $b){
        $alturaCM = $b/100;
        $resultado = $a/pow($alturaCM, 2);
        return $resultado;
    }
?>