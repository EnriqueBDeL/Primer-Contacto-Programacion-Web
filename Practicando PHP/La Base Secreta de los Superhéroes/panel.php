<?php

session_start();


if(!isset($_SESSION['nivel_acceso_session'])){
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

<h2>Bienvenido a la base,  <?php echo $_SESSION['alias_session']; ?></h2>

<br>

<h3>Tabla de heroes:</h3>



<table border="1">

<tr>
    <th>ID</th>
    <th>Alias</th>
</tr>

<?php 

$sql = "SELECT * FROM heroes";

$resultado = mysqli_query($conexion,$sql);

    while($heroe = mysqli_fetch_assoc($resultado)){

        echo "<tr>";

            echo "<td>". $heroe['id'] ."</td>";
                        echo "<td>". $heroe['alias'] ."</td>";



        echo "</tr>";

    }

?>
</table>


<a href="cerrar.php">Cerrar sesión</a>

</body>


</html>