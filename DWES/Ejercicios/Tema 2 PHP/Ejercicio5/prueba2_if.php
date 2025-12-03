<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = 6;
        $nota2 = 5;
        $nota3 = 4;
        if($nota1 > $nota2 && $nota1 > $nota3){
            echo $nota1 . " Es la nota mas alta";
        }elseif ($nota2 > $nota1 && $nota2 > $nota3){
            echo $nota2 . " Es la nota mas alta";
        }else {
            echo $nota3 . " Es la nota mas alta";
        }
    ?>
</body>
</html>