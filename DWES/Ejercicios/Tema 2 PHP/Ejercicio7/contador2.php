<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>CONTADOR 1</h1>";
        echo "<p>Esto es un contador que va desde el numero 0 al numero 100</p>";
        for($i = 0; $i <= 100; $i++){
            echo $i . ", ";
        }
    ?>

    <br>
    <br>
    <h1>CONTADOR 2</h1>
    <p>Esto es el segundo contador. Va desde el numero 10 al 0</p>
    <?php
        $n = 10;
        while($n >= 0){
            echo $n . "-";
            $n--;
        }
    ?>
</body>
</html>