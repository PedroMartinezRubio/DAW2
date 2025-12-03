<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
        $tipo = $_REQUEST["deps"];
        if($tipo == "INFORMATICA"){
            echo "El presupuesto para el departamento: $tipo es de 500 euros";
        }elseif($tipo == "LENGUA"){
            echo "El presupuesto para el departamento: $tipo es de 300 euros";
        }elseif($tipo == "MATEMATICAS"){
            echo "El presupuesto para el departamento: $tipo es de 300 euros";
        }else{
            echo "El presupuesto para el departamento: $tipo es de 400 euros";
        }
        
    ?>
    <P><a href="form_dep.php">Volver</a></P>
</body>
</html>