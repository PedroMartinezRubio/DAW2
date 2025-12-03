<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Convierte pies y pulgadas en centimetros</h1>
    <p>Escribe una distancia en pies y oulgadas y la convertira en centimetros</p>

    <form action="procesador.php" method="post">
        <label for="pies">Pies: </label>
        <input type="text" name="pies" id="pies">
        <br>
        <label for="pulgadas">Pulgadas: </label>
        <input type="text" name="pulgadas" id="pulgadas">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>