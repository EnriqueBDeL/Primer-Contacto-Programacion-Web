<?php

session_start();

include("conexion.php");

$alias = $_POST['alias'];
$clave = $_POST['clave'];


if(!isset($_POST['alias']) || !isset($_POST['clave'])){
    header("Location: login.php");
    exit();
}

$sql = "SELECT `id`, `alias`, `clave`, `rango` FROM `tripulacion` WHERE alias = '$alias' AND clave = '$clave'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

$fila = mysqli_fetch_assoc($resultado);

$_SESSION['alias_sesion'] = $fila['alias'];
$_SESSION['rango_sesion'] = $fila['rango'];

header("Location: panel.php");
exit();

}else{

    echo "<h3>Usuario o contraseña incorrectos.</h3>";
        echo "<a href='login.php'>Volver a intentar</a>";

}

?>