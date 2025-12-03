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
    <h1>Esta es la web del profesor</h1>

    <?php 
        echo "Bienvenida ".$_SESSION['usuario'];
    ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr><td colspan="6"><label>Gestion de la base de datos</label></td></tr>
            <form action="gestuser.php" method="post">
                <tr>
                    <td><label>Usuario:</label></td>
                    <td><input type="text" name="user" placeholder="Usuario"></td>
                    <td><label>Contraseña:</label></td>
                    <td><input type="text" name="pass" placeholder="Contraseña"></td>
                    <td><label>Rol:</label></td>
                    <td><input type="text" name="rol" placeholder="Rol"></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div style="text-align:center;">
                            <input type="submit" value="Volver" name="volver">
                            <input type="submit" value="Ingresar" name="ingresar">
                            <input type="submit" value="Modificar" name="modificar">
                            <input type="submit" value="Eliminar" name="eliminar">
                        </div>
                    </td>
                </tr>
            </form>
            <tr><td colspan="6"><label>Listado de Alumnos</label></td></tr>
            <tr><td colspan="2"><label>Usuario:</label></td>
            <td colspan="2"><label>Contraseña:</label></td>
            <td colspan="2"><label>Rol:</label></td>
            </tr>
    <?php
        include('conexion.php');
        $stmt = $conn->prepare("SELECT * FROM personal");
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($clientes as $cliente){
            echo "<tr> <td colspan='2'> ".$cliente['user']."</td>";
            echo "<td colspan='2'> ".$cliente['pw']."</td>";
            echo "<td colspan='2'> ".$cliente['rol']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    <br><br>
    <a href="index.php">
        <button>Volver a index</button>
    </a>
    <br><br>
    <a href="index2.php">
        <button>Volver a index2</button>
    </a>
</body>
</html>