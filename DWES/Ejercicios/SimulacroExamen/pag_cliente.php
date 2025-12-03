<?php 
    session_start();
    include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspadding="5" cellspacing="0">
        <tr><td colspan="5">Bienvenido <?php echo $_SESSION['usuario']?></td></tr>
        <form action="gestionReserva.php" method="post">
            <tr>
                <td>Listado de libros</td>
                <td colspan="3">
                    <input type="submit" value="Volver" name="volver">
                    <input type="submit" value="Reservar" name="reservar">
                    <input type="submit" value="Devolver" name="devolver">
                </td>
                <td>
                    <input type="text" name="isbn" placeholder="Introduzca ISBN">
                </td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Editorial</td>
                <td>Reservado</td>
            </tr>
            <?php 
                $stmt = $conn->prepare("SELECT * FROM libro");
                $stmt->execute();
                $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($libros as $libro){
                    echo "<tr><td>".$libro['isbn']."</td>";
                    echo "<td>".$libro['titulo']."</td>";
                    echo "<td>".$libro['autor']."</td>";
                    echo "<td>".$libro['editorial']."</td>";
                    echo "<td>".$libro['reservado']."</td></tr>";
                }
            ?>
        </form>
    </table>
    <?php 
        if(isset($_SESSION['error_message'])){
            echo "<p style='color: red;'>".$_SESSION['error_message']."</p>";
            unset($_SESSION['error_message']);
        }
    ?>
</body>
</html>