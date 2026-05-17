<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    
    <script>
        function validarFormulario() {
            var usuario = document.getElementById("usuario").value;
            var password = document.getElementById("password").value;

            if (usuario.trim() === "" || password.trim() === "") {
                alert("Por favor, rellena todos los campos. El usuario y la contraseña no pueden estar vacíos.");
                return false; 
            }
            return true; 
        }
    </script>
</head>
<body>

    <section>
        <h2>Iniciar sesión</h2>
        
        <form action="validar.php" method="POST" onsubmit="return validarFormulario()">
            
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario"><br><br>
            
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <button type="submit">Entrar</button>
            
        </form>
    </section>

</body>
</html>