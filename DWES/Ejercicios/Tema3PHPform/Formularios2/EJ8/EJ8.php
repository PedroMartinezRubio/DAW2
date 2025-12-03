<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TABLA DE MULTIPLICAR</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>Horizontal: </label>
        <input type="text" name="h">
        <br>
        <label>Vertical: </label>
        <input type="text" name="v">
        <br>
        <input type="submit" value="Mostrar">
    </form>

    <?php 
        if($_POST){
            include 'funciones8.php';
            $horizontal = $_POST['h'];
            $vertical = $_POST['v'];

            try{
                if(empty($horizontal) || empty($vertical)){
                    throw new Exception("Lo campos no pueden estar vacios. Intentelo de nuevo.");
                }elseif(!is_numeric($horizontal) || !is_numeric($vertical)){
                    throw new Exception("Los valores introducidos no son validos. Intentelo de nuevo.");
                }elseif($horizontal < 0 || $vertical < 0){
                    throw new Exception("Los numeros negativos no son validos. Intentelo de nuevo.");
                }else{
                    mostrar($horizontal, $vertical);
                }

            }catch(Exception $e){
                echo "Ha ocurrido un error: ".$e->getMessage()." Por favor, espere unos segundos.";
                header("refresh: 4 EJ8.php");
            }
        }
    ?>
</body>
</html>