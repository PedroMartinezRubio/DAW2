<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        try{
            //Comprobamos si no existe el fichero.
            if(!file_exists("cacahuete.txt")){
                //Como no existe, lanzamos una nueva excepcion.
                throw new Exception("El archivo requerido no existe.");
            }
            //obtenemos el contenido de un fichero que no existe para controlar el error.
            $contenido = file_get_contents("cacahuete.txt");

        }catch(Exception $e){
            //Como los ficheros no existen, se muestra la nueva excepcion que hemos lanzado anteriormente.
            echo "Ha ocurrido un erro con el archivo --> ".$e->getMessage();
        }
    ?>
</body>
</html>