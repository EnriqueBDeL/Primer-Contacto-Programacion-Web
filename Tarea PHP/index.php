<!DOCTYPE html>
<html lang="es">


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea PHP</title>
</head>


<body>

        <section id="login" class="mx-auto" style="max-width: 420px;">
          
        <form class="form-signin" method="POST" action="login.php">
                <h2 class="form-signin-heading text-center mb-4">Iniciar sesión</h2>
                <label for="inputUsuario" class="sr-only">Usuario</label><input type="text" id="inputUsuario" name="inputUsuario" class="form-control mb-3" placeholder="Nombre de usuario" required autofocus><br>
                <label for="inputPassword" class="sr-only">Contraseña</label><input type="password" id="inputPassword" name="inputPassword" class="form-control mb-3" placeholder="Password" required><br>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
            </form>

        </section>

</body>
    
</html>