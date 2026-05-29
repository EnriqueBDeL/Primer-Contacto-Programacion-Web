<?php
session_start();

if(!isset($_SESSION['rol_logueado']) || $_SESSION['rol_logueado'] != 'Admin'){
    header("Location: panel.php");
    exit();
}

include("conexion.php");

$id_alumno = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE id = $id_alumno";

$resultado = mysqli_query($conexion, $sql);

$alumno = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
</head>
<body>

    <h2>Modificar Datos del Alumno</h2>
    <form action="actualizar.php" method="POST">
        
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
        
        <label>Nombre:</label> <br>
        <input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>" required> <br><br>
        
        <label>Apellidos:</label> <br>
        <input type="text" name="apellidos" value="<?php echo $alumno['apellidos']; ?>" required> <br><br>
        
        <label>Curso:</label> <br>
        <input type="text" name="curso" value="<?php echo $alumno['curso']; ?>" required> <br><br>
        
        <input type="submit" value="Guardar Cambios">
        
    </form>

    <br>
    <a href="panel.php">Cancelar y Volver</a>

</body>
</html>