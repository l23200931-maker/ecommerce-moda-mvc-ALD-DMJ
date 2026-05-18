<?php
// Se incluye el modelo Producto.
require_once __DIR__ . '/../models/Producto.php';

// Controlador del producto.
// Sirve como intermediario entre el modelo y la vista.
class ProductoController {

    // Método para mostrar el catálogo.
    public function mostrarCatalogo() {

        // Obtiene los productos desde el modelo.
        $productos = Producto::obtenerTodos();

        // Envía los productos a la vista.
        require __DIR__ . '/../views/catalogo.php';
    }
}
?>