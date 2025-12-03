<?php 
    session_start();
    include 'conexion.php';

    $usu = $_POST["usuario"];
    $pass = $_POST['pw'];
    $rol = $_POST['rol'];

    $_SESSION['usuario'] = $_POST['usuario'];
    try{
        if(empty($usu) || empty($pass) || empty($rol)){
            throw new Exception("Los campos de Usuario, contraseña y rol estan vacios");
        }else{

            if($rol == 'Delegado' || $rol == 'Estudiante'){
                $consulta = "SELECT * from alumno WHERE user=:user AND pw=:pw";
                $sql = $conn->prepare($consulta);
                $sql->bindParam(":user", $usu);
                $sql->bindParam(":pw", $pass);
                $sql->execute();
            }else{
                $consulta = "SELECT * from profesor WHERE user=:user AND pw=:pw";
                $sql = $conn->prepare($consulta);
                $sql->bindParam(":user", $usu);
                $sql->bindParam(":pw", $pass);
                $sql->execute();
            }
            
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    if ($sql->rowCount() > 0) {
        if($rol == 'Delegado'){
            header("Location: delegado.php");
        }elseif($rol == 'Profesor'){
            header("Location: profesor.php");
        }elseif($rol == 'Estudiante'){
            header("Location: student.php");
        }
        
    }else{ 
        $_SESSION['error_message'] = 'Usuario o contraseña incorrectos.';
        header('Location: index.php'); // Redirigir de vuelta al      formulario de inicio de sesión 
        exit(); // Es crucial llamar a exit()
    }
?>