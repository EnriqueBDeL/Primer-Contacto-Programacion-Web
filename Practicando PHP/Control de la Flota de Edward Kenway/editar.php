<?php

session_start();

if(!isset($_SESSION['rango_sesion']) || $_SESSION['rango_sesion'] != 'Capitan'){
    header("Location: login.php");
    exit();
}

include("conexion.php");


$id = $_GET['id'];

$sql = "SELECT * FROM barcos WHERE id = $id";

$resultado = mysqli_query($conexion, $sql);

$barco = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html>

<head>

<title>Editar</title>

</head>

<body>

<form action="actualizar.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>" ><br><br>

    <label>Nombre:</label><br>
    <input type="text" name="nombre"  value="<?php echo $barco['nombre']; ?>" required><br><br>

    <label>Tipo</label><br>
    <input type="text" name="tipo"   value="<?php echo $barco['tipo']; ?>" required><br><br>

    <label>Cañones</label><br>
    <input type="number" name="canones"   value="<?php echo $barco['canones']; ?>" required><br><br>

    <input type="submit" value="Actualizar">

    </form>

</body>


</html>