<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><td colspan="4" style="text-align:center;"><label>Bienvenido <?php echo $_SESSION['usuario'];?></label></td></tr>
        <tr><td colspan="6" style="text-align:center;"><label><b>GESTION DE FOTOS</b></label></td></tr>
        <form action="gestfoto.php" method="post">
            <tr>  
                <td colspan="6">
                    <div style="text-align:center;">
                        <input type="submit" value="Volver" name="volver">
                        <input type="submit" value="Nuevo" name="nuevo">
                        <input type="submit" value="Modificar" name="modificar">
                        <input type="submit" value="Eliminar"name="eliminar">
                    </div>
                </td>
            </tr>
            <tr><td colspan="6" style="text-align:center;"><label><b>INTRODUZCA LOS DATOS EN EL FORMULARIO</b></label></td></tr>
            <tr>
                <td><input type="text" name="titulo" placeholder="TITULO"></td>
                <td><input type="text" name="tematica" placeholder="TEMATICA"></td>
                <td><input type="text" name="size" placeholder="SIZE"></td>
            </tr>
        </form>
        <tr><td colspan="6" style="text-align:center;"><label><b>LISTADO DE FOTOS</b></label></td></tr>
        <tr>
            <td><label><b>Titulo</b></label></td>
            <td><label><b>Tematica</b></label></td>
            <td><label><b>Size</b></label></td>
        </tr>
        <?php 
            include 'conexion.php';
            $stmt = $conn->prepare("SELECT * FROM fotos");
            $stmt-> execute();
            $fotografias = $stmt->fetchALl(PDO::FETCH_ASSOC);

            foreach($fotografias as $foto){
                echo "<tr><td>".$foto['titulo']."</td>";
                echo "<td>".$foto['tematica']."</td>";
                echo "<td>".$foto['size']."</td></tr>";
            }
        ?>
    </table>
</body>
</html>