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


<?php if($_SESSION['rol_session'] == 'Enfermera'){?>

<a href="registrar.php">Añadir Pokemon</a><br>

<?php }?>



<h1>LISTA:</h1>


<table border="1">

<tr>

<th>Especie</th>
<th>Nivel</th>
<th>Nombre Entrenador</th>

<?php if($_SESSION['rol_session'] == 'Enfermera'){?>

<th>Acciones</th>

<?php }?>

</tr>


<?php 

$sql = "SELECT p.id, p.especie, p.nivel, e.nombre AS entrenador  FROM pokemon p, entrenadores e  WHERE p.id_entrenador = e.id";

$respuesta = mysqli_query($conexion, $sql);

while($pokemon = mysqli_fetch_assoc($respuesta)){

    echo "<tr>";

    echo "<td>". $pokemon['especie'] ."</td>";
      echo "<td>". $pokemon['nivel'] ."</td>";
        echo "<td>". $pokemon['entrenador'] ."</td>";

        if($_SESSION['rol_session'] == 'Enfermera'){
              echo "<td><a href ='borrar.php?id=". $pokemon['id'] ."'>Borrar</a></td>";

        }

    echo "</tr>";

}

?>


</table>

</body>


</html>