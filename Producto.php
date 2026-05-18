<?php
// Se incluye el archivo de conexión a la base de datos.
require_once __DIR__ . '/../config/db.php';

// Modelo Producto.
// Este archivo se encarga de consultar la tabla productos.
class Producto {

    // Método que obtiene todos los productos activos.
    public static function obtenerTodos() {
        global $conexion;

        // Consulta SQL para traer solo productos activos.
        $sql = "SELECT * FROM productos WHERE estado = 'activo'";

        // Prepara la consulta.
        $stmt = $conexion->prepare($sql);

        // Ejecuta la consulta.
        $stmt->execute();

        // Retorna todos los registros como arreglo asociativo.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>