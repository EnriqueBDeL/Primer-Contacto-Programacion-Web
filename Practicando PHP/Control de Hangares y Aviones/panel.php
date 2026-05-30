<?php

session_start();

if(!isset($_SESSION['rango_session'])){
    header("Location: login.php");
    exit();
}

include("conexion.php");

?>


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <a href="registrar.php">Registrar Avion</a>

    
    <table border="1">
    
    <tr>

        <th>Modelo</th>
        <th>Matricula</th>
        <th>Hangar</th>
        <th>Acciones</th>

    </tr>

    <?php 

    $sql = "SELECT a.id, a.modelo, a.matricula, h.nombre AS nombre_hangar FROM aviones a, hangares h WHERE a.id_hangar = h.id";

    $resultado = mysqli_query($conexion,$sql);

    while($avion = mysqli_fetch_assoc($resultado)){

    echo "<tr>";

    echo "<td>" . $avion['modelo'] . "</td>";
      echo "<td>" . $avion['matricula'] . "</td>";
        echo "<td>" . $avion['nombre_hangar'] . "</td>";
        echo "<td> <a href='borrar.php?id= " . $avion['id'] . "'>Borrar</a></td>";

    echo "</tr>";

    }

    ?>


    
    </table>



    </body>
</html>