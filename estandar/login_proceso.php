<?php
session_start();

$usuario_correcto = "admin";
$contrasena_correcta = "1234";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $usuario_ingresado = $_POST['username'];
    $contrasena_ingresada = $_POST['password'];

    if ($usuario_ingresado === $usuario_correcto && $contrasena_ingresada === $contrasena_correcta) {
        $_SESSION['loggedin'] = true;
        header("Location: ../dashboard/dashboard_admin.php");
        exit();
    } else {
        header("Location: index.html?error=invalid_credentials");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
?>