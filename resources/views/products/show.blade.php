<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
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
        .header {
            background: #ff8c00;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
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
        .product-container {
            display: flex;
            align-items: center;
            padding: 40px;
            background: white;
            margin: 40px auto;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-image {
            width: 300px;
            height: 200px;
            border: 2px solid #ffcc00;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }
        .product-info {
            flex: 1;
        }
        .product-info h1 {
            color: #ff8c00;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .btn {
            background: #ffcc00;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
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

    <div class="product-container">
        <div class="product-image">
            <img src="producto.png" alt="Producto" width="100%">
        </div>
        <div class="product-info">
            <h1>Nombre del Producto</h1>
            <p><strong>Categoría:</strong> Electrónica</p>
            <p>Descripción del producto. Este es un producto increíble con características únicas que lo hacen destacar en el mercado. Perfecto para cualquier ocasión.</p>
            <p class="price">$99.99</p>
            <button class="btn">Agregar al Carrito</button>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 UNAB Tienda - Todos los derechos reservados
    </div>
</body>
</html>