<?php

session_start();

if($_SESSION['rol_session'] != 'Enfermera'){

    header("Location: login.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <form action="guardar.php" method="post">

    <label>Especie:</label><br>
    <input type="text" name="especie" required><br><br>

    <label>Nivel:</label><br>
    <input type="number" name="nivel" required><br><br>

    <label>ID Entrenador</label><br>
    <select name="id_entrenador" required>
    
    <?php

        include("conexion.php");

        $sql = "SELECT * FROM entrenadores";

        $resultado = mysqli_query($conexion,$sql);

        while($entrenador = mysqli_fetch_assoc($resultado)){
            echo "<option value='" . $entrenador['id'] . "'>" . $entrenador['nombre'] . "</option>";
        }

    ?>
    </select>

    <input type="submit" value="Registrar">

    </form>

    </body>
</html>