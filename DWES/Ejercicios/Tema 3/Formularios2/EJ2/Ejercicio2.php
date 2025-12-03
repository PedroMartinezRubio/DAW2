<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONVERTIDOR DE TEMPERATURAS</h1>
    <p>Escribe una temperatura (En grados celsius o Farenheit) y la convertire a la otra unidad</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="temp">Temperatura: </label>
        <input type="text" name="temp">
        <select name="tipo" id="">
            <option value="f">Farenheit</option>
            <option value="c">Celsius</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php 
        //Comprobamos si se ha enviado el formulario
        if($_POST){
            //Si los recibimos datos, incluimos el archivo con las funciones
            include 'funciones.php';
            //guardamos la temperatura escrita
            $temperatura = $_POST['temp'];
            //Guardamos el tipo de temperatura (Celsius o Farenheit)
            $tipo = $_POST['tipo'];
            try{
                //Se comprueba que el campo de la temperatura no este vacio
                if(empty($temperatura)){
                    throw new Exception("No puede dejar en blanco el campo.");

                //Si no esta vacio, se comprueba que el valor introducido sea un valor numerico
                }elseif(!is_numeric($temperatura)){
                    throw new Exception("La temperatura introducida no es valida.");
                }else{
                    //Dependiendo de que temperatura este marcada, se llama a una funcion o a otra.
                    if($tipo == "f"){
                        echo convertirAC($temperatura);
                    }else{
                        echo convertirAF($temperatura);
                    }
                }
            }catch(Exception $e){
                echo "Ha ocurrido un error" . $e->getMessage() . " Espere unos segundos";
                header("refresh: 4 Ejercicio2.php");
            }
        }
    ?>
</body>
</html>