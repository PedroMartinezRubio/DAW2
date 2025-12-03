<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        //Asignamos valores a las variables.
        $nombre = "Pedro Martinez Rubio";
        $nacimiento = 1996;
    ?>
    <!--Una vez asignados los valores, mostramos por pantalla usando la palabra 'echo' dentro de las etiquetas php.-->
    <p>Me llamo <?php echo $nombre?> y naci en el año <?php echo $nacimiento?>.</p>
</body>
</html>