<?php
session_start();
if (!isset($_SESSION['logeado'])) { header("Location: login.php"); exit; }
include("conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM CLIENTES WHERE Id = $id";

if ($conexion->query($sql)) {
    echo "<h2>Eliminado</h2>";
    echo "<a href='listar.php'>Regresar al listado</a><br><br>";
    echo "<a href='login.php'>Volver al login</a>";
} else {
    echo "Error al eliminar.<br><br>";
    echo "<a href='login.php'>Volver al login</a>";
}
?>