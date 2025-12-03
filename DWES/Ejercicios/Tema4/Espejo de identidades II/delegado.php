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
    <h1>Esta es la web del Delegado</h1>
    <form name="Mantenimiento" action="index.php" method="post">
    <table style='border="1"'>
    <?php 
        echo "<p>Bienvenido ".$_SESSION['usuario'];

        echo '<table border="1">';
        echo '<tr><td colspan="4"><label>Listado de Alumnos </label></td></tr>';
        echo '<tr><td><label>Usuario</label></td>';
        echo '<td><label>Contraseña</label></td>';
        echo '<td><label>Rol</label></td>';
        echo '</tr>';

        include('conexion.php');
        $stmt = $conn->prepare("SELECT * FROM alumno");
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($clientes as $cliente){
            echo "<tr> <td> ".$cliente['user']."</td>";
            echo "<td> ".$cliente['pw']."</td>";
            echo "<td> ".$cliente['rol']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    <br><br>
    <input type="submit" value="Volver">
    </form>
</body>
</html>