<?php
$host = 'localhost'; // O la dirección del servidor de la base de datos
$dbname = 'consultoriodental';
$username = 'root'; // Tu nombre de usuario de MySQL
$password = ''; // Tu contraseña de MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO para lanzar excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejar errores de conexión
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
