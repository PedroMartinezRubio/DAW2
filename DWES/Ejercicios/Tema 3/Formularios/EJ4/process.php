<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'funciones.php';
        if($_POST){
            try{
                $nombre = $_POST['name'];
                $apellido = $_POST['surname'];
                $edad = $_POST['age'];
                $salario = $_POST['salary'];

                if(empty($nombre) || empty($apellido) || empty($edad) || empty($salario)){
                    throw new Exception("No puede dejar ningun campo vacio.");
                }elseif(!is_numeric($edad) || !is_numeric($salario)){
                    throw new Exception("Los campos de edad y salario deben ser numericos.");
                }elseif(!is_string($nombre) || !is_string($apellido)){
                    throw new Exception("Los campos de nombre y apellido deben de ser texto.");
                }else{
                    $nuevo_salario = calcularSueldo($nombre, $apellido, $edad, $salario);

                    echo "$nombre $apellido, tu salario sera de $nuevo_salario";
                }
                
            }catch(Exception $e){
                echo "Error al enviar el formulario: " . $e->getMessage() . " Espere unos segundos.";
                header("refresh: 4 EJ4.html");
            }
        }
    ?>
    <a href="EJ4.html">Volver al formulario</a>
</body>
</html>