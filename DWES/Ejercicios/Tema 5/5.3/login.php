<?php 
    session_start();
    include 'conexion.php';

    try{    
        if(!empty($_POST['nombre']) && !empty($_POST['pw'])){

            $nombre = $_POST['nombre'];
            $pw = $_POST['pw'];

            $stmt = $conn->prepare("SELECT user, pw FROM alumno WHERE user=:user AND pw=:pw");
            $stmt ->bindParam(":user", $nombre);
            $stmt->bindParam(":pw", $pw);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $_SESSION['alumnoLog'] = $nombre;
                header("Location: alumno.php");
                exit();
            }else{
                throw new Exception("El alumno no se encuentra en la base de datos");
            }

        }else{
            throw new Excpetion("Los campos no deben de estar vacios.");
        }

    }catch(Exception $e){
        $_SESSION['error_message'] = $e->getMessage();
        header("Location: index.php");
        exit();
    }
?>