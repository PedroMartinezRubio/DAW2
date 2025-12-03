<?php 
    function calcularSueldo($nombre, $apellido, $edad, $salario){
        if($salario <1000){
            if($edad < 30){
                $salario = 1100;
                return $salario;
            }elseif($edad >= 30 && $edad < 45){
                $aumento = $salario * 0.3;
                $salario += $aumento;
                return $salario;
            }else{
                $aumento = $salario *0.15;
                $salario += $aumento;
                return $salario;
            }
        }elseif($edad >= 45 && $salario >= 1000 && $salario < 2000){
            $aumento = $salario *0.03;
            $salario += $aumento;
            return $salario;
        }else{
            $aumento = $salario * 0.1;
            $salario += $aumento;
            return $salario;
        }
    }
    
?>