<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrodomesticos</title>
    <link href="Electrodomesticos.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <div class="header-left">
        <div class="logo">
            <img src="Bienvenidos a Hogar360.png" alt=""/>
        </div>
        <a href="categorias.html" class="categorias-link">CATEGORÍAS</a>
    </div>
    <nav>
        <ul>
            <li class="submenu">
                <img src="cart.png" id="img-carrito">
                <div id="carrito">    
                    <table id="lista-carrito" class="u-full-width">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

<div class="container">
    <main class="content">
        <h2>Productos Disponibles:</h2>
        <div class="product-grid">
            <?php 
            $resultado = $conn->query("SELECT * FROM productos WHERE categoria= 'Electrodomesticos'");
            while ($row = $resultado->fetch_assoc()): ?>
                <div class="product-card">
                    <img src="<?= $row['imagen'] ?>" alt=""/>
                    <h3><?= $row['nombre'] ?></h3>
                    <p>S/ <?= number_format($row['precio'], 2) ?></p>
                    <button class="add-btn"
                        data-id="<?= $row['id_producto'] ?>"
                        data-nombre="<?= $row['nombre'] ?>"
                        data-precio="<?= $row['precio'] ?>"
                        data-imagen="<?= $row['imagen'] ?>">
                        AGREGAR
                    </button>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</div>
<script src="Carrito.js"></script>
</body>
</html>


