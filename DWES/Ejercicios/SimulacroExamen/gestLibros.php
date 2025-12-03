<?php 
    session_start();
    include 'conexion.php';

    if($_POST){
        $isbn = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editorial = $_POST['editorial'];
        $reservado = $_POST['reservado'];
        $opcion = $_POST['volver'] ?? $_POST['nuevo'] ?? $_POST['eliminar'] ?? $_POST['modificar'];
        try{

            if($opcion == "Volver"){
                header("Location: index.php");
                exit();
            }

            if($opcion == "Nuevo"){

                if(empty($isbn) && empty($titulo) && empty($autor) && empty($editorial) && empty($reservado)){
                    throw new Exception("Debe rellenar todos los campos para introducir un libro nuevo.");
                }else{
                    $stmt = $conn->prepare("INSERT INTO libro (isbn, titulo, autor, editorial, reservado) VALUES (:isbn, :titulo, :autor, :editorial, :reservado)");
                    $stmt->bindParam(":isbn", $isbn);
                    $stmt->bindParam(":titulo", $titulo);
                    $stmt->bindParam(":autor", $autor);
                    $stmt->bindParam(":editorial", $editorial);
                    $stmt->bindParam(":reservado", $reservado);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        header("Location: pag_biblio.php");
                        exit();
                    }else{
                        throw new Exception("No se ha podido ingresar un nuevo libro a la biblioteca.");
                    }
                }
            }

            if($opcion == "Eliminar"){
                if(empty($isbn) || !empty($titulo) || !empty($autor) || !empty($editorial) || !empty($reservado)){
                    throw new Exception("Debe rellenar el campo del isbn exclusivamente para eliminar un libro. Los demas campos deben de estar vacios.");
                }else{
                    $stmt = $conn->prepare("DELETE FROM libro WHERE isbn=:isbn");
                    $stmt->bindParam(":isbn", $isbn);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        header("Location: pag_biblio.php");
                        exit();
                    }else{
                        throw new Exception("No se ha podido eliminar el libro de la biblioteca.");
                    }
                }
            }

            if($opcion == "Modificar"){

                if(empty($isbn) || empty($titulo) || empty($autor) || empty($editorial) || empty($reservado)){
                    throw new Exception("Debe rellenar todos los campos para modificar un libro.");
                }else{
                    $stmt = $conn->prepare("UPDATE libro SET titulo=:titulo, autor=:autor, editorial=:editorial WHERE isbn=:isbn");
                    $stmt->bindParam(":isbn", $isbn);
                    $stmt->bindParam(":titulo", $titulo);
                    $stmt->bindParam(":autor", $autor);
                    $stmt->bindParam(":editorial", $editorial);
                    $stmt->execute();

                    if($stmt->rowCount() > 0){
                        header("Location: pag_biblio.php");
                        exit();
                    }else{
                        throw new Exception("No se ha podido modificar el libro de la biblioteca.");
                    }
                }
            }

        }catch(Exception $e){
            $_SESSION['error_message'] = $e->getMessage();
            header("Location: pag_biblio.php");
            exit();
        }
    }

?>