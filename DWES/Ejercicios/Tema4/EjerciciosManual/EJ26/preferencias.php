<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Preferencias Cookies</h1>
    <form action="guarda_prefs.php" method="post">
        <label>Nombre Usuario:</label>
        <input type="text" name="nombre">
        <br>
        <label>Color favorito:</label>
        <input type="color" name="color" value="#000000">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>