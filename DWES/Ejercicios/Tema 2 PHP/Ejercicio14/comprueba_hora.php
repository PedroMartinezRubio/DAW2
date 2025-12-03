<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $hora = "09:53:25";
        if(preg_match("/^(0\d|1\d|2[0-3]):([0-5]\d):([0-5]\d)$/", $hora, $partes)){
            echo "La hora completa es ".$partes[0]."<br>";
            echo "La hora es ".$partes[1]."<br>";
            echo "Los minutos son ".$partes[2]."<br>";
            echo "Los segundos son ".$partes[3];
        }
    ?>
</body>
</html>