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
    <h1>Esta es la web del cliente</h1>
    <p>Bienvenido <?php echo $_SESSION['usuario']?></p>
    <table border="1" cellspadding="5" cellspacing="0">
        <tr><td colspan="3">LISTADO DE FOTOGRAFIAS</td></tr>
        <tr>
            <td>Titulo</td>
            <td>Tematica</td>
            <td>Pixeles</td>
        </tr>
        <?php 
            include 'conexion.php';
            $stmt = $conn->prepare("SELECT * FROM fotos WHERE size > 300");
            $stmt->execute();
            $fotografias = $stmt->fetchALl(PDO::FETCH_ASSOC);

            foreach($fotografias as $foto){
                echo "<tr><td>".$foto['titulo']."</td>";
                echo "<td>".$foto['tematica']."</td>";
                echo "<td>".$foto['size']."</td></tr>";
            }
        ?>
    </table>
    <br><br>
    <a href="index.php">
        <button>Volver</button>
    </a>
</body>
</html>