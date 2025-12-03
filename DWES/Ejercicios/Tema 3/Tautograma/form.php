<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Palabra 1:</label>
        <input type="text" name="n1">
        <br>
        <label>Palabra 2:</label>
        <input type="text" name="n2">
        <br>
        <input type="submit" value="Comprobar">
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';

            $palabra1 = $_POST['n1'];
            $palabra2 = $_POST['n2'];

            if(comprobar($palabra1, $palabra2)){
                echo "Las palabras empiezan por la misma letra!";
            }else{
                echo "Las palabras introducidas no son tautogramas.";
            }
        }
    ?>
</body>
</html>