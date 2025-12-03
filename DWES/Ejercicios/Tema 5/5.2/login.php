<?php 
    session_start();
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $_SESSION['usuario'] = $nombre;

    try{
        

        if(!empty($_POST['nombre'])){

            $sql = $conn->prepare("SELECT * FROM fotografo WHERE nombre=:nombre");
            $sql->bindParam(":nombre", $nombre);
            $sql->execute();

            if($sql->rowCount() > 0){
                header("Location: fotografo.php");
            }else{
                $sql = $conn->prepare("SELECT * FROM cliente WHERE nombre=:nombre");
                $sql->bindParam(":nombre", $nombre);
                $sql->execute();

                if($sql->rowCount() > 0){
                    header("Location: cliente.php");
                }else{
                    $_SESSION['error_message'] = "El nombre del usuario es incorrecto";
                    header("Location: index.php");
                    exit();
                }
                
            }
        }else{
            throw new Exception("El campo del nombre debe de estar vacio.");
        }
    }catch(Exception $e){
        $_SESSION['error_message'] = "El nombre del usuario es incorrecto";
        header("Location: index.php");
        exit();
    }

?>