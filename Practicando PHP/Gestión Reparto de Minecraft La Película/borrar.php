<?php

session_start();

if(!isset($_SESSION['rol_session']) || $_SESSION['rol_session'] != "Director"){
    header("Location: login.php");
    exit();
}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM equipo_pelicula WHERE id = '$id'";

mysqli_query($conexion,$sql);

  header("Location: panel.php");
    exit();

?>