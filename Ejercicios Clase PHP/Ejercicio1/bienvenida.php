<?php

session_start();

if(isset($_SESSION['nombre'])) {
    
    echo "<h1>¡Bienvenido/a, " . $_SESSION['nombre'] . "!</h1>";
    echo "<p>Has accedido correctamente a tu zona privada.</p>";
    
} else {
    
    echo "<h1>Acceso Denegado</h1>";
    echo "<p>No puedes visitar esta página sin antes identificarte.</p>";
    echo '<a href="index.php">Ir al formulario de ingreso</a>';
    
}
?>