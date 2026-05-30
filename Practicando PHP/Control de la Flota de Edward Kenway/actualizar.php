<?php

session_start();

if(!isset($_SESSION['rango_sesion']) || $_SESSION['rango_sesion'] != 'Capitan'){
    header("Location: login.php");
    exit();
}

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$canones = $_POST['canones'];

$sql = "UPDATE `barcos` SET `nombre`='$nombre',`tipo`='$tipo',`canones`='$canones' WHERE id = '$id'";

mysqli_query($conexion,$sql);

header("Location: panel.php");
exit();

?>