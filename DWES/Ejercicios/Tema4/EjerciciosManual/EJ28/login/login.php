<?php 
    session_start();

    if(isset($_SESSION['loginusu'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Usuario:</label>
        <input type="text" name="usu">
        <br>
        <label>Contraseña:</label>
        <input type="text" name="passwd">
        <br>
        <input type="submit" value="Entrar">
    </form>

    <?php 
        if($_POST){
            $usuario = $_POST['usu'];
            $psswd = $_POST['passwd'];

            $archivo = 'usuarios.txt';
            $contenido = file_get_contents($archivo);
            try{

                if(empty($usuario) || empty($psswd)){
                    throw new Exception("El usuario y la contraseña no pueden estar vacios");
                }
                
                if(strpos($contenido, "$usuario:$psswd")!== false){
                    $_SESSION['loginusu'] = $usuario;
                    header("Location:index.php");
                }else{
                    //header("Location:login.php");
                    echo "<p style='color: red;'>Error: El login o la contraseña son icorrectos</p>";
                }
            }catch(Exception $e){
                echo "Error de conexion: ".$e->getMessage();
            }
        }
    ?>
</body>
</html>