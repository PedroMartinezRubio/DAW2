<?php 
    function cartasBarajas($baraja, $num){
        $resultado = Array_rand($baraja, $num);
        foreach($resultado as $palo){
            echo "Clave: $palo Valor: ".$baraja[$palo]."<br>";
        }
    }
?>