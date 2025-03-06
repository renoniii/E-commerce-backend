<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB Tienda - Crear Producto</title>
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
        button {
            background: #ffcc00;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: orange;
        }
        .footer {
            background: #ff8c00;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
    @yield('CSS')
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
    
    @yield('content')
    
    <div class="footer">
        &copy; 2025 UNAB Tienda - Todos los derechos reservados
    </div>
</body>
</html>