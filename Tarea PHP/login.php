<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Login</title>
    <script>
        function validarFormulario() {
            var usu = document.getElementById("usuario").value;
            var pass = document.getElementById("password").value;
            if (usu === "" || pass === "") {
                alert("El usuario y el password no pueden estar vacíos.");
                return false;
            }
            return true;
        }
    </script>
</head>


<body>
    <h2>Acceso al sistema</h2>
    <form action="validar.php" method="POST" onsubmit="return validarFormulario()">
        Usuario: <input type="text" id="usuario" name="usuario"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>


</html>
