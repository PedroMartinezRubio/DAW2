<?php 
    session_start();
    include 'conexion.php';

    $_SESSION['usuario'] = $_POST['usuario'];
    try{
        if(empty($_POST['usuario']) || empty($_POST['pw']) || empty($_POST['rol'])){
            throw new Exception("Los campos de Usuario, contraseña y rol estan vacios");
        }else{
                $usu = $_POST["usuario"];
                $pass = $_POST['pw'];
                $rol = $_POST['rol'];
                $consulta = "SELECT * from personal WHERE user=:user AND pw=:pw AND rol=:rol";
                $sql = $conn->prepare($consulta);
                $sql->bindParam(":user", $usu);
                $sql->bindParam(":pw", $pass);
                $sql->bindParam(":rol", $rol);
                $sql->execute();
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