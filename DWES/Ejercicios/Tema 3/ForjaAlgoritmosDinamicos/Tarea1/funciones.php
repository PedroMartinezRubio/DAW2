<?php 
    //funcion para comprobar si los campos estan vacios
    function validarCampos($n, $c){
        //Creo un booleano con valor true;
        $validacion = true;

        //Compruebo que los valores por parametros (los campos a rellenar en el formulario) no estan vacios
        if(empty($n) || empty($c)){
            //Si alguno de los dos esta vacio, el booleano pasa a tener valor false
            $validacion = false;
        }
        //Devuelvo el valor del booleano
        return $validacion;
    }

    //Funcion para comprobar si la clave esta en el array de numeros
    function comprobarClave($c, $numeros){
        //Inicializo una variable booleana a false.
        $encontrado = false;
        //Recorro el array con un for
        for($i = 0; $i < count($numeros); $i++){
            //Compruebo si el numero de la posicion $i es igual a la clave del usuario
            if($numeros[$i] == $c){
                //Si es igual, significa que la clave del usuario ya existe en el array y cambio el booleano a true
                $encontrado = true;
            }
        }
        //Devuelvo del valor de la variable booleana
        return $encontrado;
    }
?>