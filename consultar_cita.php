<?php
include 'db_connect.php'; // Incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre = $_GET['name-consulta'];

    // Preparar la consulta SQL
    $sql = "SELECT * FROM citas WHERE nombre = :nombre";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nombre' => $nombre]);

    $cita = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cita) {
        echo json_encode($cita);
    } else {
        echo json_encode(['error' => 'No se encontraron citas para ese nombre.']);
    }
}
?>
