<?php

session_start();

if(!isset($_SESSION['rol_session']) || $_SESSION['rol_session'] != "Director"){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="guardar.php" method="post">

            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Clave:</label><br>
            <input type="password" name="clave" required><br><br>

            <label>Rol:</label><br>
            <input type="text" name="rol" required><br><br>

            <input type="submit" value="Registrar">

        </form>
    </body>
</html>