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
        <tr><td colspan="5">GESTION DE LIBROS</td></tr>
        <form action="gestLibros.php" method="post">
            <tr>
                <td colspan="5">
                    <div style="align-items: center;">
                        <input type="submit" value="Volver" name="volver">
                        <input type="submit" value="Nuevo" name="nuevo">
                        <input type="submit" value="Eliminar" name="eliminar">
                        <input type="submit" value="Modificar" name="modificar">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">Introduzca los datos en el formulario</td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="text" name="isbn" placeholder="ISBN">
                    <input type="text" name="titulo" placeholder="Titulo">
                    <input type="text" name="autor" placeholder="Autor">
                    <input type="text" name="editorial" placeholder="Editorial">
                    <input type="text" name="reservado" placeholder="Reservado">
                </td>
            </tr>
            <tr>
                <td colspan="5">Listado de libros</td>
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