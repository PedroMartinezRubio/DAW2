<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function descuento($precio, $descuento = 0){
            $desc = ($precio*$descuento)/100;
            $precioFinal = $precio - $desc;
            return $precioFinal;
        }
        
        echo "El precio con el descuento aplicado es: ".descuento(250, 10);
    ?>
</body>
</html>