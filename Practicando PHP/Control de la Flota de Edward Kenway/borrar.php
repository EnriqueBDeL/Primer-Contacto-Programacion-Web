<?php

session_start();

if(!isset($_SESSION['rango_sesion']) || $_SESSION['rango_sesion'] != 'Capitan'){
    header("Location: login.php");
    exit();
}

if(isset($_GET['id'])){


include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM `barcos` WHERE id = '$id'";

$resultado = mysqli_query($conexion,$sql);

}

    header("Location: panel.php");
    exit();

?>