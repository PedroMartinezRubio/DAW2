<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DEPARTAMENTOS</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
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
    
    <?php 
        if($_POST){
        
        $tipo = $_POST["deps"];
        
        if($tipo == "INFORMATICA"){
            echo "El presupuesto para el departamento: $tipo es de 500 euros";
        }elseif($tipo == "LENGUA"){
            echo "El presupuesto para el departamento: $tipo es de 300 euros";
        }elseif($tipo == "MATEMATICAS"){
            echo "El presupuesto para el departamento: $tipo es de 300 euros";
        }else{
            echo "El presupuesto para el departamento: $tipo es de 400 euros";
        }
        }
    ?>
    
</body>
</html>