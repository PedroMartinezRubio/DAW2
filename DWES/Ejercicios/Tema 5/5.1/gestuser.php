<?php 
    session_start();
    include 'conexion.php';

    if($_POST){
        $usuario = $_POST['user'];
        $pass = $_POST['pass'];
        $rol = $_POST['rol'];
        $opcion = $_POST['volver'] ?? $_POST['ingresar'] ?? $_POST['modificar'] ?? $_POST['eliminar'];

        try{
            if($opcion == "Volver"){
                header("Location: index.php");
                exit();
            }

            if($opcion == "Ingresar"){
                if(empty($usuario) || empty($pass) || empty($rol)){
                    echo "No puede quedar ningun campo vacio. Espere unos segundos";
                    header("refresh: 3 url=profesor.php");
                }else{
                    $consulta = "INSERT INTO personal (user, pw, rol) VALUES(:user, :pw, :rol)";
                    $sql = $conn->prepare($consulta);
                    $sql->bindParam(":user", $usuario);
                    $sql->bindParam(":pw", $pass);
                    $sql->bindParam(":rol", $rol);
                    $sql->execute();
                
                    if($sql->rowCount() > 0){
                        header("Location: profesor.php");
                    }else{
                        echo "No se han podido ingresar los datos en la tabla";
                        header("refresh: 3 url=profesor.php");
                    }
                }
            }

            if($opcion == "Modificar"){
                if(empty($usuario) || empty($pass) || empty($rol)){
                    echo "No puede quedar ningun campo vacio. Espere unos segundos";
                    header("refresh: 3 url=profesor.php");
                }else{

                    $consulta = "UPDATE personal SET pw=:pw, rol=:rol WHERE user = :user";
                    $sql = $conn->prepare($consulta);
                    $sql->bindParam(":user", $usuario);
                    $sql->bindParam(":pw", $pass);
                    $sql->bindParam(":rol", $rol);
                    $sql->execute();

                    if($sql->rowCount() > 0){
                        header("Location: profesor.php");
                    }else{
                        echo "No se han podido modificar los datos de la tabla";
                        header("refresh: 3 url=profesor.php");
                    }
                }
            }

            if($opcion == "Eliminar"){

                if(empty($usuario)){
                    echo "El campo de usuario es necesario rellenarlo. Espere unos segundos";
                    header("refresh: 3 url=profesor.php");
                }elseif(!empty($pass) || !empty($rol)){
                    echo "Los campos de contraseña y rol deben quedarse vacios. Espere unos segundos.";
                    header("refresh: 3 url=profesor.php");
                }else{

                    $consulta = "DELETE FROM personal WHERE user = :user";
                    $sql = $conn->prepare($consulta);
                    $sql->bindParam(":user", $usuario);
                    //$sql->bindParam(":pw", $pass);
                    //$sql->bindParam(":rol", $rol);
                    $sql->execute();

                    if($sql->rowCount() > 0){
                        header("Location: profesor.php");
                    }else{
                        echo "No se han podido eliminar los datos de la tabla";
                        header("refresh: 3 url=profesor.php");
                    }
                }
            }

        }catch(Exception $e){
            echo $e->getMessage();
            header("refresh:4 url=profesor.php");
            //echo "No se puedo realizar la operacion en la tabla.";
            //exit();
        }

        
    }
?>