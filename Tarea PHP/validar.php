<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($usuario === "admin" && $password === "admin") {
    $_SESSION['logeado'] = true;
    header("Location: listar.php");
    exit;
} else {
    echo "Usuario o contraseña incorrectos. <br><br>";
    echo "<a href='login.php'>Volver al login</a>";
}
?>