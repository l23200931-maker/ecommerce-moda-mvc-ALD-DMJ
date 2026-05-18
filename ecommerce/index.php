<?php
// Archivo principal del sistema.
// Aquí inicia la ejecución del proyecto.

// Se incluye el controlador de productos.
require_once 'controllers/ProductoController.php';

// Se crea un objeto del controlador.
$controller = new ProductoController();

// Se manda llamar el método que muestra el catálogo.
$controller->mostrarCatalogo();
?>