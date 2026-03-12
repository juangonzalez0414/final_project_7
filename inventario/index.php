<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Inventario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="navegador">
            <h1><strong>Administracion De Inventario Hotel Doral</strong></h1>
            <a href="../index.html" class="btn-volver">Pagina Principal</a>
            <a href="../dashboard/dashboard_admin.php" class="btn-volver">Volver</a>
        </div>
    </header>
    <section>
        <div class="container">
            <form action="create.php" method="POST" onsubmit="return validarFormulario()">
                <h2 class="sizetitle"><strong>Agregar Elemento Al Inventario</strong></h2>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="marca" placeholder="Marca" required>
                <input type="number" name="cantidad" step="1" placeholder="Cantidad" required>
                <input type="text" name="ubicacion" placeholder="Ubicación" required>
                <input type="date" name="fecha_entrada" placeholder="Fecha de Entrada" required>
                <input type="date" name="fecha_baja" placeholder="Fecha de Baja" required>
                <input type="text" name="lote" placeholder="Lote" required>
                <input type="number" name="consecutivo" placeholder="Consecutivo" required>
                <input type="number" name="precio_unitario" placeholder="Precio unitario" required>
                <button type="submit">Cargar</button>
            </form>
        </div>
        <div class="subcontainer">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Ubicación</th>
                        <th>Fecha de Entrada</th>
                        <th>Fecha de Baja</th>
                        <th>Lote</th>
                        <th>Consecutivo</th>
                        <th>Precio Unitario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'read.php'; ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>