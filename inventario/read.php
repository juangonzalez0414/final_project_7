
<?php
require 'db.php';

$consulta_hotel = mysqli_query($conn, "SELECT * FROM inventario");

if (mysqli_num_rows($consulta_hotel) > 0) {
    while ($row = mysqli_fetch_assoc($consulta_hotel)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['marca']}</td>
                <td>{$row['cantidad']}</td>
                <td>{$row['ubicacion']}</td>
                <td>{$row['fecha_entrada']}</td>
                <td>{$row['fecha_baja']}</td>
                <td>{$row['lote']}</td>
                <td>{$row['consecutivo']}</td>
                <td>{$row['precio_unitario']}</td>
                <td>
                    <button onclick='eliminarElemento({$row['id']})'>Eliminar</button>
                    <button onclick='mostrarFormularioActualizar({$row['id']}, \"{$row['nombre']}\", \"{$row['marca']}\", \"{$row['cantidad']}\", \"{$row['ubicacion']}\", \"{$row['fecha_entrada']}\", \"{$row['fecha_baja']}\", \"{$row['lote']}\",\"{$row['consecutivo']}\",\"{$row['precio_unitario']}\")'>Actualizar</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No hay elementos registrados.</td></tr>";
}
?>