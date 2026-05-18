<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Moda Urbana | Catálogo</title>

    <!-- Archivo CSS externo -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- Encabezado principal del ecommerce -->
    <header class="hero">
        <nav class="navbar">
            <h2>MODA URBANA</h2>
            <a href="#catalogo">Catálogo</a>
        </nav>

        <div class="contenido-hero">
            <h1>Estilo que habla por ti</h1>
            <p>Ropa moderna, cómoda y con identidad urbana.</p>
            <a href="#catalogo" class="btn">Ver productos</a>
        </div>
    </header>

    <!-- Sección del catálogo -->
    <section class="catalogo" id="catalogo">
        <h2>Catálogo de Productos</h2>
        <p class="subtitulo">Productos disponibles de nuestro ecommerce de moda.</p>

        <div class="contenedor-productos">

            <!-- Se recorre el arreglo de productos recibido del controlador -->
            <?php foreach ($productos as $producto): ?>

                <div class="producto">

                    <!-- Imagen del producto -->
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">

                    <!-- Información del producto -->
                    <div class="info-producto">
                        <span class="categoria"><?php echo $producto['categoria']; ?></span>

                        <h3><?php echo $producto['nombre']; ?></h3>

                        <p class="descripcion">
                            <?php echo $producto['descripcion']; ?>
                        </p>

                        <p class="stock">
                            Stock disponible: <?php echo $producto['stock']; ?>
                        </p>

                        <p class="precio">
                            $<?php echo number_format($producto['precio'], 2); ?>
                        </p>

                        <button>Agregar al carrito</button>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>© 2026 Moda Urbana | Proyecto MVC Ecommerce</p>
    </footer>

</body>
</html>