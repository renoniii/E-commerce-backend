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
        .slider {
            width: 100%;
            position: relative;
            max-height: 300px;
            overflow: hidden;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            min-width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #8bc34a;
            color: white;
            height: 300px;
            font-size: 24px;
            font-weight: bold;
        }
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .prev { left: 10px; }
        .next { right: 10px; }
        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .category {
            background: white;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            flex: 1;
            min-width: 200px;
            max-width: 300px;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }
            .nav {
                flex-direction: column;
                gap: 10px;
            }
            .slider {
                max-height: 200px;
            }
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
    <div class="slider">
        <div class="slides">
            <div class="slide">Bienvenidos a UNAB Tienda</div>
            <div class="slide">Descubre nuestras ofertas</div>
            <div class="slide">Calidad y variedad para ti</div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <div class="categories">
        <div class="category">Libros</div>
        <div class="category">Ropa</div>
    </div>
    <div class="footer">
        &copy; 2025 UNAB Tienda - Todos los derechos reservados
    </div>
    <script>
        let index = 0;
        function moveSlide(step) {
            const slides = document.querySelector('.slides');
            const totalSlides = document.querySelectorAll('.slide').length;
            index = (index + step + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${index * 100}%)`;
        }
    </script>
</body>
</html>