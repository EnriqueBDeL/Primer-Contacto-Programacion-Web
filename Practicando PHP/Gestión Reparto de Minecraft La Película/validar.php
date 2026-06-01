<?php

session_start();

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

include("conexion.php");

$sql = "SELECT * FROM equipo_pelicula WHERE nombre = '$nombre' AND clave = '$clave'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

    $actor = mysqli_fetch_assoc($resultado);

    $_SESSION['nombre_session'] = $actor['nombre'];
        $_SESSION['rol_session'] = $actor['rol'];

    header("Location: panel.php");
    exit();

}else{

echo "<h1>ERROR</h1>";

}


?>