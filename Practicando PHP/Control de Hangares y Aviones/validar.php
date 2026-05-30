<?php

session_start();

include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM `personal` WHERE usuario = '$usuario'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

  $persona = mysqli_fetch_assoc($resultado);

    $_SESSION['usuario_session'] = $persona['usuario'];
    $_SESSION['rango_session'] = $persona['rango'];

    header("Location: panel.php");
    exit();

}else{

    echo "<h3>Error al inicar sesión</h3>";
    echo "<br> <a href='login.php'>Volver</a> ";

}


?>