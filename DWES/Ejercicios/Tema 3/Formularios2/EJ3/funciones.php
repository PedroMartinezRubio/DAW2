<?php 
    function convertir($cm){
        $m = intdiv($cm,100);
        $cmRestante = $cm%100;
        $km = $m/1000;
        if($km < 1){
            return "$cm cm: son $m metros con $cmRestante cm";
        }else{
            return "$cm cm: son $km kilometros y $m metros con $cmRestante cm"; 
        }
    }
?>