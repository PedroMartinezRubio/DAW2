<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $r = rand(1,6);
        
        echo $r;
        if($r == 6){
            echo "<p>has sacado la maxima puntiacion</p>";
        }elseif ($r == 5){
            echo "<p>Has estado cerca</p>";
        }elseif($r <= 4 && $r >= 2){
            echo "<p>Prueba otra vez</p>";
        }elseif($r == 1){
            echo "<p>Has sacado la puntiacion mas baja</p>";
        }
        
    ?>
</body>
</html>