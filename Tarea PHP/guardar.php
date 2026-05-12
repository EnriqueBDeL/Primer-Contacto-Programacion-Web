<?php
session_start();
if (!isset($_SESSION['logeado'])) { header("Location: login.php"); exit; }
include("conexion.php");

$id = $_POST['id'];
$nombre = strtoupper($_POST['nombre']); 
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$idemp = $_POST['idemp'];

$sql = "UPDATE CLIENTES SET 
        Nombre = '$nombre', 
        Apellidos = '$apellidos', 
        Email = '$email', 
        IdEmp = $idemp 
        WHERE Id = $id";

if ($conexion->query($sql)) {
    echo "<h2>Guardado</h2>";
    echo "<a href='listar.php'>Regresar al listado</a><br><br>";
    echo "<a href='login.php'>Volver al login</a>";
} else {
    echo "Error al guardar.<br><br>";
    echo "<a href='login.php'>Volver al login</a>";
}
?>