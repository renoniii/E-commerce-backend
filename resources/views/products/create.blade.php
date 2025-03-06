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
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            color: #ff8c00;
            margin-bottom: 20px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #ffcc00;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
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
    
    <div class="container">
        <h2>Crear Nuevo Producto</h2>
        <form>
            <div class="form-group">
                <label>Nombre del Producto</label>
                <input type="text" placeholder="Ingrese el nombre del producto" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea placeholder="Ingrese la descripción del producto" required></textarea>
            </div>
            <div class="form-group">
                <label>Categoría</label>
                <select required>
                    <option value="">Seleccione una categoría</option>
                    <option value="electronica">Electrónica</option>
                    <option value="ropa">Ropa</option>
                    <option value="hogar">Hogar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" placeholder="Ingrese el precio del producto" required>
            </div>
            <div class="form-group">
                <label>Imagen del Producto</label>
                <input type="file" required>
            </div>
            <button type="submit">Crear Producto</button>
        </form>
    </div>
    
    <div class="footer">
        &copy; 2025 UNAB Tienda - Todos los derechos reservados
    </div>
</body>
</html>