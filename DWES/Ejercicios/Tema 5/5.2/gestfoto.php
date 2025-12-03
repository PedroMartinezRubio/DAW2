<?php 
    session_start();
    include 'conexion.php';

    if($_POST){
        
        $titulo = $_POST['titulo'];
        $tema = $_POST['tematica'];
        $size = $_POST['size'];
        $opcion = $_POST['volver'] ?? $_POST['nuevo'] ?? $_POST['modificar'] ?? $_POST['eliminar'];
        
        try{

            if($opcion == "Volver"){
                header("Location:index.php");
                exit();
            }
            
            if($opcion == "Nuevo"){
                if(empty($titulo) || empty($tema) || empty($size)){
                    echo "Debe rellenar todos los campos de la fotografia.";
                    header("refresh: 3; url=fotografo.php");
                }else{
                   $stmt = $conn->prepare("INSERT INTO fotos (titulo, tematica, size) VALUES(:titulo, :tematica, :size)");
                   $stmt->bindParam(":titulo", $titulo);
                   $stmt->bindParam(":tematica", $tema);
                   $stmt->bindParam(":size", $size);
                   $stmt->execute();
                   

                   if($stmt->rowCount() > 0){
                        header("Location: fotografo.php");
                   }else{
                        echo "No se ha podido añadir la foto. Espere unos segundos.";
                        header("refresh: 3; url=fotografo.php");
                   }
                }
            }

            if($opcion == "Modificar"){

                if(empty($titulo) || empty($tema) || empty($size)){
                    echo "Debe rellenar todos los campos de la fotografia.";
                    header("refresh: 3; url=fotografo.php");
                }else{
                   $stmt = $conn->prepare("UPDATE fotos SET tematica=:tematica, size=:size WHERE titulo=:titulo");
                   $stmt->bindParam(":titulo", $titulo);
                   $stmt->bindParam(":tematica", $tema);
                   $stmt->bindParam(":size", $size);
                   $stmt->execute();

                   if($stmt->rowCount() > 0){
                        header("Location: fotografo.php");
                   }else{
                        echo "No se ha podido añadir la foto. Espere unos segundos.";
                        header("refresh: 3; url=fotografo.php");
                   }
                }
            }

            if($opcion == "Eliminar"){
                if(empty($titulo)){
                    echo "Debes indicar el titulo de la fotografia que quieras eliminar. Espera unos segundos.";
                    header("refresh: 3; url=fotografo.php");
                }elseif(!empty($tema) || !empty($size)){
                    echo "Para eliminar la fotografia deja los campos de tematica y size vacios. Espere unos segundos.";
                    header("refresh: 4; url=fotografo.php");
                }else{
                   $stmt = $conn->prepare("DELETE FROM fotos WHERE titulo = :titulo");
                   $stmt->bindParam(":titulo", $titulo);
                   $stmt->execute();

                   if($stmt->rowCount() > 0){
                        header("Location: fotografo.php");
                   }else{
                        echo "No se ha podido añadir la foto. Espere unos segundos.";
                        header("refresh: 3; url=fotografo.php");
                   }
                }
            }

        }catch(Exception $e){
           echo  $e->getMessage();
            header("refresh: 4; url=fotografo.php");
            //echo "No se ha podido realizar la operacion. Espere unos segundos";
            //exit();
        }
    }
?>