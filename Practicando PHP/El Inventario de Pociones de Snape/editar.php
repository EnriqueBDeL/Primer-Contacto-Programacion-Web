<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT id, nombre, tipo, cantidad FROM pociones WHERE id = '$id'";

$respuesta = mysqli_query($conexion,$sql);

$pocion = mysqli_fetch_assoc($respuesta);

?>


<!DOCTYPE html>
<htm>

<head>


</head>

<body>

<form action="actualizar.php" method="post">

<input type="hidden" name="id" value="<?php echo $pocion['id']; ?>">

<label>Nombre</label>
<input type="text" name="nombre" value="<?php echo $pocion['nombre']; ?>">

<label>Tipo</label>
<input type="text" name="tipo" value="<?php echo $pocion['tipo']; ?>">

<label>Cantidad</label>
<input type="number" name="cantidad" value="<?php echo $pocion['cantidad']; ?>">

<input type="submit" value="Actualizar">


</form>

</body>


</htm>