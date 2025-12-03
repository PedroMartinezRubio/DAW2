<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCULOS ESTADISTICOS</h1>
    <p>Escribe los valores y marca las casillas correspondientes a los calculos que quieres</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <?php 
            if($_POST){
                include 'funciones.php';
                $cantidad = $_POST['cantidad'] ?? 0;
                $arrayNumeros = array();
                $arrayNumeros = [$cantidad];
                try{
                    if(empty($cantidad)){
                        throw new Exception("El campo no puede estar vacio.");
                    }elseif(!is_numeric($cantidad)){
                        throw new Exception("El valor introducido no es valido.");
                    }elseif($cantidad < 0){
                        throw new Exception("Numero no valido.");
                    }

            }catch(Exception $e){
                echo "Ha ocurrido un error: " . $e->getMessage() . " Porfavo, espere unos segundos.";
                header("refresh: 5 form1.php");
            }
            
        } 
            
            for($i = 0; $i < $cantidad; $i++){
                echo "<label>Numero: </label>";
                echo "<input type='text' name='numero$i'>";
                echo "<br>";
            } 
            
        ?>

        <input type="checkbox" name="suma">Suma
        <input type="checkbox" name="media">Media
        <input type="checkbox" name="max">Maximo
        <input type="checkbox" name="min">Minimo
        <br>
        <input type="submit" value="Calcular">
        <br>
        <p><a href="form1.php">Volver al primer formulario</a></p>

        <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
        <input type="hidden" name="enviado" value="1">
    </form>

    <?php 
        if($_POST && $cantidad > 0 && !empty($_POST['enviado'])){
            try{
                
                $suma = $_POST['suma'] ?? '';
                $media = $_POST['media'] ?? '';
                $max = $_POST['max'] ?? '';
                $min = $_POST['min'] ?? '';

                for($i = 0; $i < $cantidad; $i++){
                    $arrayNumeros[$i] = $_POST['numero'.$i] ?? '';
                    if(empty($arrayNumeros[$i])){
                        throw new Exception("Los campos no pueden estar vacios.");
                    }elseif(!is_numeric($arrayNumeros[$i])){
                        throw new Exception("Debes de introducir un numero.");
                    }
                }
                
                

                if(!empty($suma)){
                    suma($arrayNumeros);
                }
                if(!empty($media)){
                    media($arrayNumeros);
                }
                if(!empty($max)){
                    maximo($arrayNumeros);
                }
                if(!empty($min)){
                    minimo($arrayNumeros);
                }
            }catch(Exception $e){
                echo "Ha ocurrido un error: ".  $e->getMessage() . " Por favor, espere unos segundos.";
                header("refresh: 5 form2.php");
            }
        }
    ?>
</body>
</html>