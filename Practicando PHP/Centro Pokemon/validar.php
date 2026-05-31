<?php

session_start();

$usuario =  $_POST['usuario'];
$clave =  $_POST['clave'];

include("conexion.php");

$sql = "SELECT `id`, `usuario`, `clave`, `rol` FROM `usuarios` WHERE usuario = '$usuario' AND clave = '$clave'";

$respuesta = mysqli_query($conexion, $sql);

if(mysqli_num_rows($respuesta) > 0){

    $u = mysqli_fetch_assoc($respuesta);

    $_SESSION['usuario_session'] = $u['usuario'];

    $_SESSION['rol_session'] = $u['rol'];

    header("Location: panel.php");
    exit();

}else{

  echo "<h3>ERROR</h3>";

}

?>