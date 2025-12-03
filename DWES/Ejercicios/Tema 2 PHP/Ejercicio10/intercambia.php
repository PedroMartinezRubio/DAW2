<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function intercambia(&$a, &$b){
            $c = $a;
            $a = $b;
            $b = $c;

            echo "El primer numero es ".$a." y el segundo vale ".$b;
        }
        $a = 5;
        $b = 8;
        intercambia($a,$b);
    ?>
</body>
</html>