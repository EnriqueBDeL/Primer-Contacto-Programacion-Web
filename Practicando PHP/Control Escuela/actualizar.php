<?php
session_start();

if(!isset($_SESSION['rol_logueado']) || $_SESSION['rol_logueado'] != 'Admin'){
    header("Location: panel.php");
    exit();
}

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$curso = $_POST['curso'];


$sql = "UPDATE alumnos SET nombre='$nombre', apellidos='$apellidos', curso='$curso' WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location: panel.php");
exit();
?>