//create.php
<?php
// Archivo: create.php
require 'db.php'; // Incluir conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
    $cantidad = mysqli_real_escape_string($conn, $_POST['cantidad']);
    $ubicacion = mysqli_real_escape_string($conn, $_POST['ubicacion']);
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_baja = $_POST['fecha_baja'];
    $lote = mysqli_real_escape_string($conn, $_POST['lote']);
    $consecutivo = mysqli_real_escape_string($conn, $_POST['consecutivo']);
    $precio_unitario = floatval($_POST['precio_unitario']);

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO inventario (nombre, marca, cantidad, ubicacion, fecha_entrada, fecha_baja, lote, consecutivo, precio_unitario) 
            VALUES ('$nombre', '$marca', '$cantidad', '$ubicacion', '$fecha_entrada', '$fecha_baja', '$lote', '$consecutivo', '$precio_unitario')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'Elemento registrado exitosamente']);
        header('Location: index.php?mensaje=Elemento registrado exitosamente');
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar: ' . mysqli_error($conn)]);
    }
}

// Cerrar la conexión
mysqli_close($conn);
?>