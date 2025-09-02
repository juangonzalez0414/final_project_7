<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Reservaciones Clientes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div>
    <header class="header-volver">
    <a href="../index.html" class="btn-volver">Volver</a>   
    </header>
</div>    
<div class="container">
    <form action="create.php" method="POST" onsubmit="return validarFormulario()">
        <h2 class="sizetitle"><Strong>Reservar</strong></h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="text" name="habitacion" placeholder="Habitación" required>
        <input type="date" name="fecha_entrada" required>
        <input type="date" name="fecha_salida" required>
        <input type="number" name="precio" placeholder="Precio en COP" required>
        <button type="submit">Reservar</button>
    </form>
</div>
<div id="custom-confirm-modal" class="modal-overlay">
        <div class="modal-content">
            <h2 style="text-align: center;">Confirmar Reserva</h2>
            <p>¿Estás seguro de que quieres reservar esta habitacion?</p>
            <div style="text-align: center;">
                <button id="confirm-yes" class="btn-confirm">Aceptar</button>
                <button id="confirm-no" class="btn-cancel">Cancelar</button>
            </div>
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>