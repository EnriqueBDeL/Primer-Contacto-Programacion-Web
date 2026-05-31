<?php

session_start();

if($_SESSION['rol_session'] != 'Enfermera'){

    header("Location: login.php");
    exit();

}


include("conexion.php");

$especie = $_POST['especie'];
$nivel = $_POST['nivel'];
$id_entrenador = $_POST['id_entrenador'];

$sql = "INSERT INTO pokemon(especie, nivel, id_entrenador) VALUES ('$especie','$nivel','$id_entrenador')";

mysqli_query($conexion,$sql);


  header("Location: panel.php");
    exit();

?>