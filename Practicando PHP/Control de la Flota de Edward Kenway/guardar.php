<?php

session_start();

if(!isset($_SESSION['rango_sesion']) || $_SESSION['rango_sesion'] != 'Capitan' ){
    header("Location: login.php");
    exit();
}

include("conexion.php");

$nombre = $_POST['nombre'];
$tipo  = $_POST['tipo'];
$canones  = $_POST['canones'];

$sql = "INSERT INTO `barcos`(`nombre`, `tipo`, `canones`) VALUES ('$nombre','$tipo','$canones')";

mysqli_query($conexion,$sql);

header("Location: panel.php");
exit();

?>
