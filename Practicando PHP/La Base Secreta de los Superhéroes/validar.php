<?php

session_start();

$alias = $_POST['alias'];

$clave = $_POST['clave'];


include("conexion.php");


$sql = "SELECT  * FROM heroes WHERE alias = '$alias' AND clave = '$clave'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

    $hereo = mysqli_fetch_assoc($resultado);

    $_SESSION['alias_session'] = $hereo['alias'];
      $_SESSION['clave_session'] = $hereo['clave'];
        $_SESSION['nivel_acceso_session'] = $hereo['nivel_acceso'];

      header("Location: panel.php");
      exit();

}else{

echo '<h3>ERROR</h3>';

}

?>