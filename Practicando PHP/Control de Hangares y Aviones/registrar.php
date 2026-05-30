<?php

session_start();

if(!isset($_SESSION['rango_session'])){
   header("Location: login.php");
    exit();
}

include("conexion.php");

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>

<form action="guardar.php" method="post">

    <label>Modelo:</label>
    <input type="text" name="modelo" required>

    <label>Matricula:</label>
    <input type="text" name="matricula" required>

    <label>Selecciona el Hangar:</label><br>
    <select name="id_hangar">

    <?php

    $sql = "SELECT * FROM hangares";

    $resultado = mysqli_query($conexion,$sql);

    while($hangar = mysqli_fetch_assoc($resultado)){

     echo "<option value='" . $hangar['id'] . "'>" . $hangar['nombre'] . "</option>";

    }

    ?>
    </select>

    <input type="submit" value="Crear">

</form>

</body>


</html>