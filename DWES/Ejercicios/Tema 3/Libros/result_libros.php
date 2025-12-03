<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados del formulario de busqueda</h1>
    <p>Estos son los datos introducidos: </p>

    <?php 
        $texto = $_POST["texto"];
        $title = $_POST["opt"];
        $type = $_POST["tipo"];

        echo "Texto de busqueda: ".$texto."<br>";
        echo "Buscar en: ".$title."<br>";
        echo "Genero: ".$type;
        
    ?>
    <p><a href="form_libros.php">Volver al principio del formulario</a></p>
</body>
</html>