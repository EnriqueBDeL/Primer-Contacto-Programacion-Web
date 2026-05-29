<?php

session_start();

if(!isset($_SESSION['rol_logueado']) || $_SESSION['rol_logueado'] != 'Admin'){
    header("Location: panel.php");
    exit();
}

if(isset($_GET['id'])){

include("conexion.php");

$id_alumno = $_GET['id'];


$sql = "DELETE FROM `alumnos` WHERE id = $id_alumno";

mysqli_query($conexion, $sql);

}

header("Location: panel.php");
exit();
?>

