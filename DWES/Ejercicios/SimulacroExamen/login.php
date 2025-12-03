<?php 
    session_start();
    include 'conexion.php';
    if($_POST){
        $usu = $_POST['usu'];
        $pw = $_POST['pw'];

        $_SESSION['usuario'] = $usu;

        try{

            if(empty($usu) || empty($pw)){
                throw new Exception("Los dos campos deben de estar completados.");
            }else{
                $stmt = $conn->prepare("SELECT * FROM cliente WHERE nombre=:user AND pass=:pw");
                $stmt->bindParam(":user", $usu);
                $stmt->bindParam(":pw", $pw);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    header("Location: pag_cliente.php");
                    exit();
                }else{
                    $stmt = $conn->prepare("SELECT * FROM bibliotecario WHERE nombre=:user AND pass=:pw");
                    $stmt->bindParam(":user", $usu);
                    $stmt->bindParam(":pw", $pw);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        header("Location: pag_biblio.php");
                    }else{
                        throw new Exception("No se ha encontrado al usuario en la base de datos.");
                    }
                }

            }

        }catch(Exception $e){
            $_SESSION['error_message'] = $e->getMessage();
            header("Location: index.php");
            exit(); 
        }
    }
?>