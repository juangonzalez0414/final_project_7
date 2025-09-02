// Validar el formulario antes de enviar
function validarFormulario() {
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const apellido = document.querySelector('input[name="apellido"]').value.trim();
    const telefono = document.querySelector('input[name="telefono"]').value.trim();
    const habitacion = document.querySelector('input[name="habitacion"]').value.trim();
    const fechaEntrada = document.querySelector('input[name="fecha_entrada"]').value;
    const fechaSalida = document.querySelector('input[name="fecha_salida"]').value;
    const precio = document.querySelector('input[name="precio"]').value.trim();

    if (!nombre || !apellido || !telefono || !habitacion || !fechaEntrada || !fechaSalida || !precio) {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    if (isNaN(precio) || precio <= 0) {
        alert("El precio debe ser un número positivo.");
        return false;
    }

    if (new Date(fechaEntrada) >= new Date(fechaSalida)) {
        alert("La fecha de entrada debe ser anterior a la fecha de salida.");
        return false;
    }

    return true;
}

// Confirmación antes de eliminar una reservación
function eliminarReservacion(id) {
    if (confirm("¿Estás seguro de que deseas eliminar esta reservación?")) {
        window.location.href = `delete.php?delete_id=${id}`;
    }
}

// Mostrar la ventana modal con el formulario de actualización
function mostrarFormularioActualizar(id, nombre, apellido, telefono, habitacion, fecha_entrada, fecha_salida, precio) {
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
        <h2 style="text-align: center;">Actualizar Reservación</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="update_id" value="${id}">
            <input type="text" name="update_nombre" value="${nombre}" required>
            <input type="text" name="update_apellido" value="${apellido}" required>
            <input type="text" name="update_telefono" value="${telefono}" required>
            <input type="text" name="update_habitacion" value="${habitacion}" required>
            <input type="date" name="update_fecha_entrada" value="${fecha_entrada}" required>
            <input type="date" name="update_fecha_salida" value="${fecha_salida}" required>
            <input type="number" name="update_precio" value="${precio}" required>
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