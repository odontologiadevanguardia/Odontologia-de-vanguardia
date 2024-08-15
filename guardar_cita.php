<?php
include 'db_connect.php'; // Incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $fecha = $_POST['date'];
    $hora = $_POST['time'];
    $mensaje = $_POST['message'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO citas (nombre, email, telefono, fecha, hora, mensaje) VALUES (:nombre, :email, :telefono, :fecha, :hora, :mensaje)";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta
    $stmt->execute([
        ':nombre' => $nombre,
        ':email' => $email,
        ':telefono' => $telefono,
        ':fecha' => $fecha,
        ':hora' => $hora,
        ':mensaje' => $mensaje,
    ]);

    echo 'Cita guardada con éxito.';
}
?>
