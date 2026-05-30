<?php

session_start();

if(!isset($_SESSION['rango_session'])){
header("Location: login.php");
exit();
}

include("conexion.php");

$modelo = $_POST['modelo'];
$matricula = $_POST['matricula'];
$hangar = $_POST['id_hangar'];

$sql = "INSERT INTO `aviones`( `modelo`, `matricula`, `id_hangar`) VALUES ('$modelo','$matricula','$hangar')";

mysqli_query($conexion,$sql);

header("Location: panel.php");
exit();

?>