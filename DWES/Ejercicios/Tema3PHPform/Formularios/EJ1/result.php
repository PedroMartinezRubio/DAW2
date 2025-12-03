<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Incluimos el archivo donde se haran los calculos necesarios
        include 'funciones_imc.php';

        //Comprobamos si se han enviado datos y recogemos sus valores
        if($_POST){

            //Aqui se controlan los posibles errores
            try{
                //Guardamos los datos en sus respectivas variables
                $peso = $_POST["peso"];
                $altura = $_POST["altura"];

                //Comprobamos que los campos no esten vacios
                if(empty($peso) || empty($altura)){
                    throw new exception("Los campos no pueden estar vacios.");
                }

                //Comprobamos que los campos tengan numeros y no letras
                if(!is_numeric($peso) || !is_numeric($altura)){
                    throw new exception("Los campos solo admiten numeros.");
                }

                //Llamamos a la funcion para calcular el IMC
                $resultado = imc($peso, $altura);
                
                if($resultado < 18.5){
                    echo "<p>Su resultado es: ".round($resultado, 2).". Peso insuficiente.</p>";
                }elseif($resultado >=18.5 && $resultado <= 24.9){
                    echo "<p>Su resultado es: ".round($resultado, 2).". Peso saludable</p>";
                }elseif($resultado >= 25 && $resultado <= 29.9){
                    echo "<p>Su resultado es: ".round($resultado, 2).".  Sobrepeso</p>";
                }else{
                    echo "<p>Su resultado es: ".round($resultado, 2).". Obesidad</p>";
                }

            }catch(Exception $e){
                //Si ocurre un error, aqui lo mostramos junto con el tipo de error.
                echo "Ha ocurrido un error -->".$e->getMessage();

                //Esto sirve para refrescar la pagina en caso de error.
                //El 4 es el numero de segundos que pasara hasta que se refresca
                header("refresh: 4 url=EJ1.php");
            }
        }
    ?>
</body>
</html>