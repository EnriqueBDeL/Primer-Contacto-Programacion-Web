<?php

include("conexion.php");

$id = $_POST['id'];
$nombre  = $_POST['nombre'];
$tipo  = $_POST['tipo'];
$cantidad  = $_POST['cantidad'];


$sql = "UPDATE pociones SET nombre='$nombre', tipo='$tipo', cantidad='$cantidad' WHERE id = '$id'";


mysqli_query($conexion,$sql);

header("Location: index.php");
exit();

?>