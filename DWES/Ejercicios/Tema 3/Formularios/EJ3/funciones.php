<?php 
    function conversionMin($valor){
        $min = intdiv($valor, 60);
        return $min;
    }

    function restoSeg($valor){
        $resto = $valor % 60;
        return $resto;
    }
?>