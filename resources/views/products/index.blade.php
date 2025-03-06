<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB Tienda</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
        }
        .header, .footer {
            background: #ff8c00;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav {
            display: flex;
            gap: 15px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .products {
            text-align: center;
            padding: 40px 20px;
        }
        .products h2 {
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-items: center;
        }
        .product {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 250px;
            border: 2px solid orange;
        }
        .product img {
            width: 50px;
            height: 50px;
        }
        .product h3 {
            margin: 10px 0;
            font-size: 18px;
            color: orange;
        }
        .product p {
            margin: 5px 0;
        }
        .price {
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }
        .add-to-cart {
            background: gold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">UNAB Tienda</div>
        <div class="nav">
            <a href="#">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Contacto</a>
        </div>
    </div>
    <div class="products">
        <h2>Nuestros Productos</h2>
        <div class="product-grid">
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Categoría: Electrónica</p>
                <p class="price">$99.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Categoría: Libros</p>
                <p class="price">$49.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Categoría: Ropa</p>
                <p class="price">$29.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Categoría: Electrónica</p>
                <p class="price">$199.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 5">
                <h3>Producto 5</h3>
                <p>Categoría: Libros</p>
                <p class="price">$59.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/50" alt="Producto 6">
                <h3>Producto 6</h3>
                <p>Categoría: Ropa</p>
                <p class="price">$39.99</p>
                <button class="add-to-cart">Agregar al Carrito</button>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2025 UNAB Tienda - Todos los derechos reservados
    </div>
</body>
</html>