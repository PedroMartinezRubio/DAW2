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
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usu">
        <br><br>
        <label>Constraseña:</label>
        <input type="password" name="pw">
        <br><br>
        <input type="submit" value="Acceder">
    </form>
    <?php 
        if(isset($_SESSION['error_message'])){
            echo "<p style='color: red;'>".$_SESSION['error_message']."</p>";
            unset($_SESSION['error_message']);
        }
    ?>  
</body>
</html>