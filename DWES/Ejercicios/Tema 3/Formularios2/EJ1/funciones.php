<?php 
    function calcular($y){
        if($y % 400 == 0){
            return "El año $y es bisiesto porque $y es multiplo de 400";
        }elseif($y % 4 == 0){
            return "El año $y es bisiesto porque $y es multiplo porque es multiplo de 4";
        }else{
            return "El año introducido no es bisiesto";
        }
    }
?>