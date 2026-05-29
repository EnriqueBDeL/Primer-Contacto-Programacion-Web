<?php
session_start();

if(!isset($_SESSION['rol_logueado']) || $_SESSION['rol_logueado'] != 'Admin'){
    header("Location: panel.php");
    exit();
}

include("conexion.php");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$curso = $_POST['curso'];


$sql = "INSERT INTO alumnos (nombre, apellidos, curso) VALUES ('$nombre', '$apellidos', '$curso')";

mysqli_query($conexion, $sql);

header("Location: panel.php");
exit();

?>