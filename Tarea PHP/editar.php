<?php
session_start();
if (!isset($_SESSION['logeado'])) { header("Location: login.php"); exit; }
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM CLIENTES WHERE Id = $id";
$resultado = $conexion->query($sql);
$cliente = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Editar Cliente</title></head>
<body>
    <article style="text-align: right;">
        <a href="login.php">Volver al login</a>
    </article>
    <h2>Editar Cliente</h2>
    <form action="guardar.php" method="POST">
        <input type="hidden" name="id" value="<?= $cliente['Id'] ?>">
        
        Nombre: <input type="text" name="nombre" value="<?= $cliente['Nombre'] ?>"><br><br>
        Apellidos: <input type="text" name="apellidos" value="<?= $cliente['Apellidos'] ?>"><br><br>
        Email: <input type="text" name="email" value="<?= $cliente['Email'] ?>"><br><br>
        
        Empresa: 
        <select name="idemp">
            <?php
            $sqlEmp = "SELECT * FROM EMPRESAS";
            $resEmp = $conexion->query($sqlEmp);
            while ($emp = $resEmp->fetch_assoc()) {
                $selected = ($emp['Id'] == $cliente['IdEmp']) ? "selected" : "";
                echo "<option value='" . $emp['Id'] . "' $selected>" . $emp['Nombre'] . "</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <a href="listar.php">Cancelar y volver al listado</a>
</body>
</html>