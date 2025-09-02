<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../loginadm/index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <h2>Bienvenido al Panel de Administración</h2>
        <p>¿Qué deseas modificar o revisar?</p>
        <div class="volver-btn">
        <a href="../index.html">Volver a la página principal</a>
        </div>
    </main>
    <div class ="container_crud">
            <a href="../inventario/index.php">Inventario</a>
            <a href="../empleados/index.php">Empleados</a>
            <a href="../reservaciones/index.php">Reservaciones</a>
        </div>

</body>
</html>