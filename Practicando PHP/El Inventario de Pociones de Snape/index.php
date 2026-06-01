<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<body>
    <h2>Almacén de Pociones</h2>
    <table border="1">
        <tr>
            <th>Nombre</th><th>Tipo</th><th>Cantidad</th><th>Acción</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM pociones";
        $resultado = mysqli_query($conexion, $sql);
        while($pocion = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" . $pocion['nombre'] . "</td>";
            echo "<td>" . $pocion['tipo'] . "</td>";
            echo "<td>" . $pocion['cantidad'] . "</td>";

            echo "<td><a href='editar.php?id=" . $pocion['id'] . "'>Modificar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>