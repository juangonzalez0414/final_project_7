//delete.php
<?php
require 'db.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM inventario WHERE id = $delete_id";

    if (mysqli_query($conn, $delete_query)) {
        header("Location: index.php?mensaje=¡Elemento eliminado exitosamente!");
    } else {
        echo "Error al eliminar: " . mysqli_error($conn);
    }
}
?>