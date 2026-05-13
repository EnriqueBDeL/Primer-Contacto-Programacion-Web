<?php
    session_start();

    ConsultarUsuario($_POST['usuario'], $_POST['password']);

    function ConsultarUsuario($usuario, $password)
    {
        include 'conexion.php';
        $sentencia = "SELECT * FROM usuario WHERE nombre = '" . $usuario . "' AND contraseña = '" . $password . "'";
        $resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

        $count = mysqli_num_rows($resultado);

        if ($count > 0)
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['logeado'] = true;
            echo '<script>';
                echo 'alert("Bienvenido!!");';
                echo 'window.location.href="listar.php";';
            echo '</script>';
        }
        else
        {
            echo '<script>';
                echo 'alert("Datos de acceso incorrectos");';
                echo 'window.location.href="login.php";';
            echo '</script>';
        }
    }
?>
