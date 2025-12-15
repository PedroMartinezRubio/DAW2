<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario enviado</h1>
    <label>Correo:  </label>
    <?php 
        echo $_POST['mail'];
    ?>
    <a href="./index.html">Volver</a>
</body>
</html>