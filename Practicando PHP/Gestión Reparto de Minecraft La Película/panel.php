<?php

session_start();

if(!isset($_SESSION['rol_session'])){
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

    <a href="crear.php">Añadir actor</a>

    <br>

    <h2>Lista:</h2>

    <table border="1">

    <tr>

        <th>Nombre</th>
        <?php if($_SESSION['rol_session'] == 'Director'){ ?>
        <th>Accion</th>
        <?php } ?>

    </tr>

    <?php
    
        $sql = "SELECT * FROM equipo_pelicula";

        $resultado = mysqli_query($conexion,$sql);

        while($actor = mysqli_fetch_assoc($resultado)){

        echo "<tr>";
        
            echo "<td>" . $actor['nombre']. "</td>";

            if($_SESSION['rol_session'] == 'Director'){ 
                echo "<td> <a href='borrar.php?id=" . $actor['id']. "'>Borrar</a> </td>";
            }

        echo "</tr>";

        }


    ?>
    
    </table>    
  
    </body>
</html>