<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CLACULA SUMATORIOS O FACTORIALES</h1>
    <p>Escribe un numero e indica si quieres que calcule factorial  o el sumatorio desde 1 hasta el numero</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="numero">Numero: </label>
        <input type="text" name="numero">
        <br>
        <input type="radio" name="factorial">Factorial 
        <input type="radio" name="sumatorio">Sumatorio
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php 
        if($_POST){
            include 'funciones.php';
            $n = $_POST['numero'];
            $factorial = $_POST['factorial'] ?? '';
            $sumatorio = $_POST['sumatorio'] ?? '';

            try{
                if(empty($n)){
                    throw new Exception("No puede dejar el campo vacio, intentelo otra vez.");
                }else if(!is_numeric($n)){
                    throw new Exception("El valor introducido no es valido, intentelo otra vez.");
                }else if(!empty($factorial) && !empty($sumatorio)){
                    throw new Exception("No puedes seleccionar las dos opciones. Eliga una.");
                }else if(empty($factorial) && empty($sumatorio)){
                    throw new Exception("No has seleccionado ninguna opcion. Por favor, intentelo de nuevo.");
                }


                if(!empty($factorial) && empty($sumatorio)){
                    echo "El resultado es: ".calcularFactorial($n);
                }else if(empty($factorial) && !empty($sumatorio)){
                    echo "El resultado es: ".calcularSumatorio($n);
                }
            }catch(Exception $e){
                echo "Ha ocurrido un error: " . $e->getMessage() . " Espere unos segundos";
                header("refresh: 4 Ejercicio4.php");
            }

        }
    ?>
</body>
</html>