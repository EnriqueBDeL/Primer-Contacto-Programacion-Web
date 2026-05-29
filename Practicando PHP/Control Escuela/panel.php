<?php
session_start();

if(!isset($_SESSION['rol_logueado'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel de la Escuela</title>
</head>
<body>

    <h1> Bienvenido/a, <?php echo $_SESSION['usuario_logueado']; ?> </h1>
    <p>Tu rol actual es: <strong><?php echo $_SESSION['rol_logueado']; ?></strong></p>

    <br><br>

    <?php if($_SESSION['rol_logueado'] == 'Admin'){ ?>

            <h3>Sección de Administrador (Acceso Total)</h3>
            <p>Aquí puedes ver la tabla de alumnos y tienes permisos para gestionar todo.</p>
            <a href="crear.php"> Añadir Nuevo Alumno</a> <br><br>

    <?php }else{ ?>

            <h3>Sección de Profesor (Solo Lectura)</h3>
            <p>Aquí solo puedes visualizar la lista de alumnos. No tienes permisos para modificar nada.</p>

    <?php } ?>

   
   
    <h2>Lista de Alumnos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Curso</th>
            
            <?php if($_SESSION['rol_logueado'] == 'Admin'){ ?>
                <th>Acciones</th>
            <?php } ?>
        </tr>

    <?php
        include("conexion.php");

        $sql = "SELECT * FROM alumnos";

        $resultado = mysqli_query($conexion, $sql);

        while ($alumno = mysqli_fetch_assoc($resultado)) {

        echo "<tr>";

            echo "<td>" . $alumno['id'] . "</td>";
            echo "<td>" . $alumno['nombre'] . "</td>";
            echo "<td>" . $alumno['apellidos'] . "</td>";
            echo "<td>" . $alumno['curso'] . "</td>";

            if($_SESSION['rol_logueado'] == 'Admin'){
                echo "<td>";
                echo "<a href='editar.php?id=" . $alumno['id'] . "'>Editar</a> | ";
                echo "<a href='borrar.php?id=" . $alumno['id'] . "'>Eliminar</a>";
                echo "</td>";
            }

            echo "</tr>";
        }
    ?>
    
    </table>

    <br><br>
    <a href="cerrarSesion.php">Cerrar Sesión</a>

</body>
</html>