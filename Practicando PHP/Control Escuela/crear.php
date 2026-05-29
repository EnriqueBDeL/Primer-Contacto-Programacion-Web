<?php

session_start();

if(!isset($_SESSION['rol_logueado']) || $_SESSION['rol_logueado'] != 'Admin'){
    header("Location: panel.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crear estudiante.</title>
    </head>
    <body>

    <form action="guardar.php" method="POST">

        <label>Nombre:</label> <br>
        <input type="text" name="nombre" required> <br><br>

        <label>Apellidos:</label> <br>
        <input type="text" name="apellidos" required> <br><br>
        
        <label>Curso:</label> <br>
        <input type="text" name="curso" required> <br><br>
        
        <input type="submit" value="Guardar Alumno">
        
    </form>

    <br>
    <a href="panel.php">Volver al Panel</a>

    </body>
</html>