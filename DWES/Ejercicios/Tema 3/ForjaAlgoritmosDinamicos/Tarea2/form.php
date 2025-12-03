<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El Reloj del Cronometrador</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Codigo mision:</label>
        <input type="text" name="codigo_mision[]">
        <br>
        <label>Codigo mision:</label>
        <input type="text" name="codigo_mision[]">
        <br>
        <label>Codigo mision:</label>
        <input type="text" name="codigo_mision[]">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';
            $codigo = $_POST['codigo_mision'];
            $codigosAsociativos = [
                'codigo_original' => [],
                'codigo_duplicaod' => []
            ];

            try{
               
                for($i = 0; $i < 3; $i++){
                    $codigosAsociativos['codigo_original'][$i] = ['valor' => $codigo[$i], 'riesgo' =>($codigo[$i] > 50) ? 'Alto Riesgo' : ''];
                    $codigosAsociativos['codigo_duplicado'][$i] = dobleVerificacion($codigo[$i]);
                }

                echo "<table border=1px solid black;>";
                echo "<tr><th>Original</th><th>Duplicado</th><th>Riesgo</th></tr>";
                for($i = 0; $i < count($codigosAsociativos); $i++){
                    $original = $codigosAsociativos['codigo_original'][$i]['valor'];
                    $duplicado = $codigosAsociativos['codigo_duplicado'][$i];
                    $riesgo = $codigosAsociativos['codigo_original'][$i]['riesgo'];
                    echo "<tr>";
                    echo "<td>$original</td>";
                    echo "<td>$duplicado</td>";
                    echo "<td>$riesgo</td>";
                    echo "<tr/>";
                }
                echo "</table>";

            }catch(Exception $e){
                echo "Ha ocurrido un error: " . $e->getMessage() . ". Por favor, espere unos segundos";
                header("refresh: 3 form.php");
            }
        }
    ?>
</body>
</html>