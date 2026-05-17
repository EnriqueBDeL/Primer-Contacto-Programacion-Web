<?php
session_start();
if (!isset($_SESSION['logeado'])) { header("Location: login.php"); exit; }
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de clientes</title>
    <script>
        function confirmar(id, nombre) {
            if (confirm("¿Confirma eliminación del usuario " + nombre + "?")) {
                location.href = "borrar.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <section style="text-align: right;">
        <a href="login.php">Cerrar sesión (Volver al login)</a>
    </section>
    
    <h2>Listado de clientes</h2>
    <table border="1">
        <tr>
            <th>Id</th><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Empresa</th><th>Editar</th><th>Eliminar</th>
        </tr>
        <?php
        $sql = "SELECT c.Id, c.Nombre, c.Apellidos, c.Email, e.Nombre AS Empresa 
                FROM CLIENTES c, EMPRESAS e 
                WHERE c.IdEmp = e.Id";
        
        $resultado = $conexion->query($sql);

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['Id'] . "</td>";
            echo "<td>" . $fila['Nombre'] . "</td>";
            echo "<td>" . $fila['Apellidos'] . "</td>";
            echo "<td>" . $fila['Email'] . "</td>";
            echo "<td>" . $fila['Empresa'] . "</td>";
            echo "<td><a href='editar.php?id=" . $fila['Id'] . "'>editar</a></td>";
            echo "<td><a href=\"javascript:confirmar(" . $fila['Id'] . ", '" . $fila['Nombre'] . "')\">eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>