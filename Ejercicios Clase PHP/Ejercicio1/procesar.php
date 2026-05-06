<?php

session_start();

$correo_valido = "enrique@gmail.com";
$nombre_alumno = "Juan Pérez";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $correo_ingresado = $_POST["correo"];

    if ($correo_ingresado === $correo_valido) {
        
        
        $_SESSION['nombre'] = $nombre_alumno;
        
        echo "<h2>Correo verificado correctamente.</h2>";
        echo '<a href="bienvenida.php">Ir a la página de bienvenida</a>';
        
    } else {
        echo "<h2>Error: El correo no existe.</h2>";
        echo '<a href="index.php">Volver a intentar</a>';
    }
}
?>