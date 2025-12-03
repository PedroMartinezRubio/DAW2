<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DEPARTAMENTOS</h1>
    <form action="presupuestos.php" method="post">
        <label for="opt">
            <select name="deps" id="deps">Departamento: 
                <option value="INFORMATICA">Informatica</option>
                <option value="LENGUA">Lengua</option>
                <option value="MATEMATICAS">Matematicas</option>
                <option value="INGLES">Ingles</option>
            </select>
        </label><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>