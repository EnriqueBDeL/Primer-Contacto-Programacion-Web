<?php 

session_start();

include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM `usuarios` WHERE nombre = '$usuario' AND clave = '$clave'";

$resultado = mysqli_query($conexion,$sql);




if(mysqli_num_rows($resultado)>0){

$fila = mysqli_fetch_assoc($resultado);


$_SESSION['usuario_logueado'] = $fila['nombre'];
$_SESSION['rol_logueado'] = $fila['rol'];

header("Location: panel.php"); 
    exit();

}else{

echo "<h3>Usuario o contraseña incorrectos.</h3>";
    echo "<a href='login.php'>Volver a intentar</a>";

}



?>