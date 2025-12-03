<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php 
        define('PI', 3.1416); //Aqui definimos una constante. Primero el nombre y despues el valor.
        $radio = 3.5;
        $area = PI * pow($radio, 2); //Para hacer el cuadrado se puede usar pow(nombre, valor) o nombre**valor

        echo "El area del circulo es $area"; //Poniendo echo con dobles comillas se puede poner el nombre de la variable directamente sin etiquetas
    ?>
</body>
</html>