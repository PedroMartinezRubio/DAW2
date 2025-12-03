<?php
    session_start();
    include 'conexion.php';
    if($_POST){

        $alumnoLog = $_SESSION['alumnoLog'];
        $opcion = $_POST['volver'] ?? $_POST['votar'];
        $alumno = $_POST['alumno'];

        try{
            if($opcion == "Volver"){
                header("Location: index.php");
                exit();
            }

            if($opcion == "Votar"){
                
                if(empty($alumno)){
                    throw new Exception("Debe introducir el alumno al que quiere votar");

                }else{
                    if($alumno == $alumnoLog){
                        throw new Exception("El alumno no puede votarse a si mismo.");
                    }else{
                        
                        $stmt = $conn->prepare("SELECT voto FROM alumno WHERE user=:user AND voto=1");
                        $stmt->bindParam(":user", $alumnoLog);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            throw new Exception("El alumno seleccionado ya ha votado.");
                        }else{
                            $stmt = $conn->prepare("UPDATE alumno SET voto=1 WHERE user=:user");
                            $stmt->bindParam(":user", $alumnoLog);
                            $stmt->execute();

                            if($stmt->rowCount() > 0){
                                $stmt = $conn->prepare("UPDATE alumno SET numVotos = numVotos + 1 WHERE user=:alumnoVotado");
                                $stmt->bindParam(":alumnoVotado", $alumno);
                                $stmt->execute();

                                if($stmt->rowCount() > 0){
                                    header("Location: alumno.php");
                                    exit();
                                }else{
                                    throw new Exception("No se ha podido votar al alumno seleccionado.");
                                }

                            }else{
                                throw new Exception("No se ha podido actualizar la base de datos.");
                            }
                        }
                    }
                }
            }

        }catch(Exception $e){
            $_SESSION['error_message'] = $e->getMessage();
            header("Location: alumno.php");
            exit();
        }
    }

?>