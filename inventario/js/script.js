// Validar el formulario antes de enviar
function validarFormulario() {
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const marca = document.querySelector('input[name="marca"]').value.trim();
    const cantidad = document.querySelector('input[name="cantidad"]').value.trim();
    const ubicacion = document.querySelector('input[name="ubicacion"]').value.trim();
    const fechaEntrada = document.querySelector('input[name="fecha_entrada"]').value;
    const fechaBaja = document.querySelector('input[name="fecha_baja"]').value;
    const lote = document.querySelector('input[name="ubicacion"]').value.trim();
    const consecutivo = document.querySelector('input[name="ubicacion"]').value.trim();
    const precioUnitario = document.querySelector('input[name="precio_unitario"]').value.trim();

    if (!nombre || !marca || !cantidad || !ubicacion || !fechaEntrada || !fechaBaja || !lote || !consecutivo || !precioUnitario) {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    if (isNaN(precioUnitario) || precioUnitario <= 0) {
        alert("El precio debe ser un número positivo.");
        return false;
    }

    if (new Date(fechaEntrada) >= new Date(fechaBaja)) {
        alert("La fecha de entrada debe ser anterior a la fecha de baja.");
        return false;
    }

    return true;
}

// Confirmación antes de eliminar una reservación
function eliminarElemento(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este elemento?")) {
        window.location.href = `delete.php?delete_id=${id}`;
    }
}

// Mostrar la ventana modal con el formulario de actualización
function mostrarFormularioActualizar(id, nombre, marca, cantidad, ubicacion, fecha_entrada, fecha_baja, lote, consecutivo, precio_unitario) {
    // 1. Eliminar cualquier modal existente para evitar duplicados.
    const modalExistente = document.querySelector('.modal-overlay');
    if (modalExistente) {
        modalExistente.remove();
    }

    // 2. Crear el contenedor del modal (el fondo semi-transparente).
    const modalOverlay = document.createElement('div');
    modalOverlay.classList.add('modal-overlay');

    // 3. Crear el contenido del modal (el formulario).
    const modalContent = document.createElement('div');
    modalContent.classList.add('modal-content');

    // 4. Inyectar el HTML del formulario en el contenido del modal.
    modalContent.innerHTML = `
        <h2 style="text-align: center;">Actualizar Elemento</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="update_id" value="${id}">
            <input type="text" name="update_nombre" value="${nombre}" required>
            <input type="text" name="update_marca" value="${marca}" required>
            <input type="number" step="1" name="update_cantidad" value="${cantidad}" required>
            <input type="text" name="update_ubicacion" value="${ubicacion}" required>
            <input type="date" name="update_fecha_entrada" value="${fecha_entrada}" required>
            <input type="date" name="update_fecha_baja" value="${fecha_baja}" required>
            <input type="text" name="update_lote" value="${lote}" required>
            <input type="text" name="update_consecutivo" value="${consecutivo}" required>
            <input type="number" name="update_precio_unitario" value="${precio_unitario}" required>
            <button type="submit" name="update">Actualizar</button>
            <button type="button" onclick="cerrarModal()">Cancelar</button>
        </form>
    `;

    // 5. Unir los elementos y añadirlos al cuerpo del documento.
    modalOverlay.appendChild(modalContent);
    document.body.appendChild(modalOverlay);
}

// Cerrar la ventana modal
function cerrarModal() {
    const modalOverlay = document.querySelector('.modal-overlay');
    if (modalOverlay) {
        modalOverlay.remove();
    }
}