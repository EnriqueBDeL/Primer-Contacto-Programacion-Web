<?php

session_start();

if(!isset($_SESSION['rango_session'])){
header("Location: login.php");
exit();
}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM `aviones` WHERE id = '$id'";

mysqli_query($conexion,$sql);

header("Location: panel.php");
exit();

?>