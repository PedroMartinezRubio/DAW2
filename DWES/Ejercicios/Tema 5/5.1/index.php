
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
    <h1>INICIO DE SESION</h1>
    <p>Introduzca las credenciales para entrar al servidor</p>
    <form action="login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario">
        <br><br>
        <label>Contraseña:</label>
        <input type="password" name="pw">
        <br><br>
        <label>Rol:</label>
        <select name="rol">
            <option value="" selected disabled hidden>--Selecione una opción--</option>
            <option value="Profesor">Profesor</option>
            <option value="Delegado">Delegado</option>
            <option value="Estudiante">Estudiante</option>
        </select>
        <br><br>
        <input type="submit" value="Acceder">
    </form>
    <?php 
    if (isset($_SESSION['error_message'])) {
        echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']); // Limpia el mensaje de error después de mostrarlo
    }
    ?>
</body>
</html>