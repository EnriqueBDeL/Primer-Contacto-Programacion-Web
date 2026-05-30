<?php

session_start();

if(!isset($_SESSION['rango_sesion']) || $_SESSION['rango_sesion'] != 'Capitan' ){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
    </head>
    <body>

    <form action="guardar.php" method="post">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Tipo</label><br>
    <input type="text" name="tipo" required><br><br>

    <label>Cañones</label><br>
    <input type="number" name="canones" required><br><br>

    <input type="submit" value="Crear">

    </form>

    </body>
</html>