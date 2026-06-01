<?php


session_start();

include("conexion.php");

if(!isset($_SESSION['rol_session']) || $_SESSION['rol_session'] != "Director"){
    header("Location: login.php");
    exit();
}


$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$rol = $_POST["rol"];

$sql = "INSERT INTO equipo_pelicula( nombre, clave, rol) VALUES ('$nombre','$clave','$rol')";


mysqli_query($conexion,$sql);

   header("Location: panel.php");
    exit();
?>