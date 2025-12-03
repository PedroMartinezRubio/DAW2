<?php 
    session_start();
    include 'conexion.php';
    if($_POST){
        $isbn = $_POST['isbn'];
        $opcion = $_POST['volver'] ?? $_POST['reservar'] ?? $_POST['devolver'];
        try{

            if($opcion == "Volver"){
                header("Location: index.php");
                exit();
            }

            if($opcion == "Reservar"){
                if(empty($isbn)){
                    throw new Exception("Debe indicar el libro que quiere reservar");
                }else{
                    $stmt = $conn->prepare("SELECT reservado FROM libro WHERE isbn=:isbn AND reservado = 1");
                    $stmt->bindParam(":isbn" , $isbn);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        throw new Exception("El libro ya esta reservado.");
                    }else{
                        $stmt = $conn->prepare("UPDATE libro SET reservado = 1 WHERE isbn=:isbn");
                        $stmt->bindParam(":isbn" , $isbn);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            header("Location: pag_cliente.php");
                            exit();
                        }else{
                            throw new Exception("No se ha podido reservar el libro.");
                        }
                    }
                }

                
            }

            if($opcion == "Devolver"){

                if(empty($isbn)){
                    throw new Exception("Debe indicar que libro quiere devolver");
                }else{
                    $stmt = $conn->prepare("SELECT reservado FROM libro WHERE isbn=:isbn AND reservado = 0");
                    $stmt->bindParam(":isbn" , $isbn);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        throw new Exception("El libro ya ha sido devuelto");
                    }else{
                        $stmt = $conn->prepare("UPDATE libro SET reservado = 0 WHERE isbn=:isbn");
                        $stmt->bindParam(":isbn" , $isbn);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            header("Location: pag_cliente.php");
                            exit();
                        }else{
                            throw new Exception("No se ha podido devolver el libro.");
                        }
                    }
                }
                
            }

        }catch(Exception $e){
            $_SESSION['error_message'] = $e->getMessage();
            header("Location: pag_cliente.php");
            exit();
        }
    }
?>