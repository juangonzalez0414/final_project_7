//update.php
<?php
require 'db.php';

if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $update_nombre = $_POST['update_nombre'];
    $update_marca = $_POST['update_marca'];
    $update_cantidad = $_POST['update_cantidad'];
    $update_ubicacion = $_POST['update_ubicacion'];
    $update_fecha_entrada = $_POST['update_fecha_entrada'];
    $update_fecha_baja = $_POST['update_fecha_baja'];
    $update_lote = $_POST['update_lote'];
    $update_consecutivo = $_POST['update_consecutivo'];
    $update_precio_unitario = $_POST['update_precio_unitario'];

    $update_query = "UPDATE inventario SET 
                    nombre = '$update_nombre', 
                    marca = '$update_marca', 
                    cantidad = '$update_cantidad', 
                    ubicacion = '$update_ubicacion', 
                    fecha_entrada = '$update_fecha_entrada', 
                    fecha_baja = '$update_fecha_baja', 
                    lote = '$update_lote', 
                    consecutivo = '$update_consecutivo', 
                    precio_unitario = '$update_precio_unitario' 
                    WHERE id = $update_id";

    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php?mensaje=¡Elemento actualizado exitosamente!");
    } else {
        echo "Error al actualizar: " . mysqli_error($conn);
    }
}
?>