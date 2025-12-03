<?php 
    function comprobar($palabra1, $palabra2){
        $comprobacion = false;
        if($palabra1[0] == $palabra2[0]){
            $comprobacion = true;
        }
        return $comprobacion;
    }
?>