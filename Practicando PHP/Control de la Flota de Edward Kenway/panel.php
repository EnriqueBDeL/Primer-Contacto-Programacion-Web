<?php

session_start();

if(!isset($_SESSION['rango_sesion'])){
header("Location: login.php");
exit();
}


?>

<!DOCTYPE html>
<html>

<head>

<title>Panel</title>

</head>
<body>

<?php if($_SESSION['rango_sesion']== 'Capitan'){

    echo "<a href='registrar.php'>Añadir barco</a>";

}

?>

<br><br>

<h1>Lista de barcos:</h1>
<table border ="1">
    <tr>

    <th>Nombre</th>
    <th>Tipo</th>
    <th>Cañones</th>

    <?php if($_SESSION['rango_sesion'] == 'Capitan'){?>

    <th>Acciones</th>

    <?php } ?>

    </tr>

    <?php 
    
    include("conexion.php");

    $sql = "SELECT * FROM `barcos` ";

    $resultado = mysqli_query($conexion,$sql);

    while($barco = mysqli_fetch_assoc($resultado)){


    echo "<tr>";

        echo "<td>" . $barco['nombre'] . "</td>";
                echo "<td>" . $barco['tipo'] . "</td>";
                        echo "<td>" . $barco['canones'] . "</td>";


        if($_SESSION['rango_sesion'] == 'Capitan'){
        
        echo "<td> <a href= 'editar.php?id=" .  $barco['id'] . "'>Editar</a> |";

        echo " <a href = 'borrar.php?id=" . $barco['id'] . "'>Borrar</a></td>";
        
        }


    echo "</tr>";

    }
    
    ?>

</table>

</body>
</html>