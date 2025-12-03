<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El Cifrado del Baron Rojo</h1>
    <p>Introduce como clave un numero entre 1 y 100</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <br>
        <label>Clave: </label>
        <input type="password" name="clave">
        <br>
        <input type="submit" value="Comprobar">
        <br>
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';
           $nombre = $_POST['nombre'];
           $clave = $_POST['clave'];

           try{
                //Compruebo su la funcion para validar los campos es true o false
                //Si es false lanza una excepcion
                if(!validarCampos($nombre, $clave)){
                    throw new Exception("Los campos no pueden estar vacios.");
                }

                //Se crea un array con los numeros de la suerte
                $numeros_de_la_suerte = [15, 75, 60, 23, 45, 5, 9];
                
                //Si el nombre no es un string lanza una excepcion
                if(is_numeric($nombre)){
                    throw new Exception("El nombre no pueden ser numeros ni caracteres especiales.");
                //Si la clave no es un numero lanza una excepcion
                }elseif(!is_numeric($clave)){
                    throw new Exception("La clave ha de ser un numero entre 1 y 100.");
                }else{
                    //Compruebo si funcion para comprobar la clave devuelve false o true
                    if(comprobarClave($clave, $numeros_de_la_suerte)){
                        echo "Bienvenid@ al Cifrado del Baron Rojo!";
                    }else{
                        echo "Se ha enviado la clave correctamente y no es la esperada";
                    }
                }
                
           }catch(Exception $e){
                echo "Ha ocurrido un error: " . $e->getMessage() . " Espere unos segundos";
                header("refresh: 4 form.php");
           }
           
        }
    ?>
</body>
</html>