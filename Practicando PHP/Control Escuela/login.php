<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>

    <h2>Control de Acceso</h2>
    
    <form action="validar.php" method="POST">
        
        <label>Usuario:</label> <br>
        <input type="text" name="usuario" required> <br><br>
        
        <label>Contraseña:</label> <br>
        <input type="password" name="clave" required> <br><br>
        
        <input type="submit" value="Entrar">
        
    </form>

</body>
</html>