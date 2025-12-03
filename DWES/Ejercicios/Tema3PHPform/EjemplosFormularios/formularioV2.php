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
            //1.- Control de errores
            
            //SIN FUNCIONES
            if (empty($_POST["nombre"])) {
                $errores['nombre'] = "El nombre no puede estar vacio";
            }elseif (!ctype_alpha($_POST["nombre"])) {
                //valido que todos sus caracteres sean string
                $errores['nombre'] = " Nombre inválido. Debe ser una cadena de texto.";
            }elseif (strlen($_POST["nombre"]) < 3) {
                $errores['nombre'] = "Nombre inválido. No puede introducir menos de 3 caractéres";
            }elseif (strlen($_POST["nombre"]) > 20) {
                $errores['nombre'] = "Nombre inválido. No puede introducir más de 20 caractéres";
            }
                        
            //UTILIZACION DE FUNCIONES
           //validar_string('nombre', 3, 20, $errores);
            
            //2.- Compruebo si se ha generado algun error
            if($errores){
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
