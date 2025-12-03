<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_POST){
            $nombreusu = $_POST['nombre'];
            $colorusu = $_POST['color'];

            setcookie("nombre", $nombreusu, time()+500);
            setcookie("colorBack", $colorusu, time()+500);

            header("Location:index.php");
        }
    ?>
</body>
</html>