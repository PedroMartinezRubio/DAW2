<?php
require_once 'funciones.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO COMPLETO</title>
    </head>
    <body>        
<?php

        $errores = []; //Declaro el array donde voy a almacenar los ERRORES
        
        //Si hemos enviado el formulario (pulsado el botón ENVIAR)
        if($_POST) {
            //1.- Control de errores  ------    UTILIZACION DE FUNCIONES
            //Funcion validar_string (utiliza la funcion ctype_alpha, la cual no admite, por ejemplo, la ñ)
            $errores['nombre'] = validar_string('nombre', 3, 20);
           
                             
            //!!!!!! OJO !!!!!!!!!
            //el array errores, puede contener valores nulos, 
            //y entonces aunque no existan errores, no me lleva a la parte de PROCESAR LA INFORMACIÓN
           //con esto elimino los valores null del array por si hubiera habido algún problema al meter errores al array
            $erroresLimpio = array_diff($errores, array("", 0, null));
            
            //2.- Compruebo si se ha generado algun error
            if($erroresLimpio){
                
                //2.1.- Si hay errores, vuelvo a cargar el formulario
                include "form.php";                
            }
            else{
                //2.2.- Si NO hay errores, proceso la información
                echo '<p>ENHORABUENA</p>';                
            }
        }
        else{
            //Si es la primera vez que entro en la página, cargo el formulario
            include "form.php";
        }
        
?>                
    </body>
</html>
