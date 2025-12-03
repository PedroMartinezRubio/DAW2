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
        <tr><td colspan="3">Bienvenido <?php echo $_SESSION['alumnoLog']?></td></tr>
        <tr><td colspan="3">LISTADO DE ALUMNOS</td></tr>
        <tr>
            <td>Alumno</td>
            <td>Votos</td>
            <td>Numero de votos</td>
        </tr>
        <?php 
            include 'conexion.php';

            $stmt = $conn->prepare("SELECT user, voto, numVotos FROM alumno ORDER BY numVotos DESC");
            $stmt -> execute();
            $alumnos = $stmt->fetchALl(PDO::FETCH_ASSOC);


            foreach($alumnos as $alumno){
                echo "<tr><td>".$alumno['user']."</td>";
                echo "<td>".$alumno['voto']."</td>";
                echo "<td>".$alumno['numVotos']."</td>";
            }
           
        ?>
    </table>
    <br><br>
    <form action="gestVoto.php" method="post">
            <label>Alumon a votar: </label>
            <input type="text" name="alumno">
            <input type="submit" value="Votar" name="votar">
            <br><br>
            <input type="submit" value="Volver" name="volver">
    </form>
</body>
<?php 
    if (isset($_SESSION['error_message'])) {
        echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
?>
</html>