<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Empleados</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="navegador">
            <h1><Strong>Administracion De Empleados Hotel Doral</Strong></h1>
            <a href="../index.html" class="btn-volver">Pagina Principal</a>
            <a href="../dashboard/dashboard_admin.php" class="btn-volver">Volver</a>
        </div>
    </header>
<section>
<div class="container">
    <form action="create.php" method="POST" onsubmit="return validarFormulario()">
        <h2 class="sizetitle"><Strong>Agregar Empleado</strong></h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="date" name="fecha_entrada" required>
        <input type="date" name="fecha_salida" required>
        <input type="number" name="salario" placeholder="Salario en COP" required>
        <button type="submit">Cargar</button>
    </form>
</div>
<div class="subcontainer">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha de Entrada</th>
            <th>Fecha de Salida</th>
            <th>Salario</th>
            <th>Acciones</th>
        </tr>
        <?php include 'read.php'; ?>
    </table>
    </div>    
</section>
<script src="js/script.js"></script>
</body>
</html>