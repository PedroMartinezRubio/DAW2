<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscador de libros</h1>
    <form action="result_libros.php" method="post">
        <label for="texto">Texto de busqueda: <input type="text" name="texto"/></label><br>
        
            <label> Buscar en: 
                <input type="radio" name="opt" value="Titulo">Titulo de libro
            </label>
            <label>
                <input type="radio" name="opt" value="Nombre">Nombre del autor
            </label>
            </label>
                <input type="radio" name="opt" value="Editorial">Editorial
            </label><br>

        <label for="tipo">
            <select name="tipo" id="type">
                <option value="narrativa">Narrativa</option>
                <option value="librosTexto">Libros de texto</option>
                <option value="guideMaps">Guias y mapas</option>
            </select>
        </label><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>