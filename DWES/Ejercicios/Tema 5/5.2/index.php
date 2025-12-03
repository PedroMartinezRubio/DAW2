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
    <h1>Base de datos de la orla</h1>
    <form action="login.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br><br>
        <input type="submit" value="Acceder">
    </form>
    <?php 
        if (isset($_SESSION['error_message'])) {
            echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
            unset($_SESSION['error_message']);
        }
    ?>
</body>
</html>