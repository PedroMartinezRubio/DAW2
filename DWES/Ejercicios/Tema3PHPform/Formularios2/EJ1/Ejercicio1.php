<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AÑOS BISIESTOS</h1>
    <p>Escribe un año y calculare si es bisiesto o no.</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="year">Año: </label>
        <input type="text" name="year" id="year">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
        //Comprobamos si se ha enviado informacion
        if($_POST){
            //Si recibimos datos del formulario incluimos el archivo con las funciones necesarias
            include 'funciones.php';
            //Y guardamos el año introducido
            $y = $_POST['year'];
            try{

                //Realizamos el control de excepciones
                //Primero comprobamos que si esta vacio
                if(empty($y)){
                    throw new Exception("El año no puede estar vacio");
                //Si no esta vacio, comprobamos si se ha introducido un numero
                }elseif(!is_numeric($y)){
                    throw new Exception("El año que has introducido no es valido");
                }else{
                    //Si pasan los controles, llamamos a la funcion para calcular si el año es bisiesto.
                    echo calcular($y);
                }

            }catch(Exception $e){
                //Si ocurre algun error lo mostramos para informar al usuario.
                echo "Ha ocurrido un error: ". $e->getMessage();
                header("refresh: 4 Ejercicio1.php");
            }
        }
    ?>
</body>
</html>