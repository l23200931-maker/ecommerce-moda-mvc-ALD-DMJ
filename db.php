<?php
// Archivo de conexión a la base de datos usando PDO.

// Datos del servidor local de XAMPP.
$host = "127.0.0.1";
$port = "3306";
$dbname = "ecommerce";
$user = "root";
$password = "";

try {
    // Se crea la conexión con MySQL.
    $conexion = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $user,
        $password
    );

    // Activa el modo de errores por excepciones.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Si falla la conexión, se muestra el error.
    die("Error de conexión: " . $e->getMessage());
}
?>