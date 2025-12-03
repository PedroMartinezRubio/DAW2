<?php 
    function convertirAC($t){
        $temp = ($t -32)/1.8;
        return "$t ºF son $temp ºC";
    }
    
    function convertirAF($t){
        $temp = ($t * 1.8) + 32;
        return "$t ºC son $temp ºF";
    }
?>