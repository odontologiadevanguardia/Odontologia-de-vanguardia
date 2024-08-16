<?php
include 'db_connect.php'; // Incluir archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre = $_GET['name-cita'];

    // Preparar la consulta SQL para eliminar la cita
    $sql = "DELETE FROM citas WHERE nombre = :nombre";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta
    if ($stmt->execute([':nombre' => $nombre])) {
        echo "Cita cancelada exitosamente.";
    } else {
        echo "Error al cancelar la cita.";
    }
}
?>
