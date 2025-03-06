@extends('layout.app')

@section('CSS')
    <style>
        .productos-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; 
            gap: 20px;
            padding: 20px;
            max-width: 1200px; 
            margin: 0 auto; 
        }
        .producto {
            flex: 1 1 calc(33.333% - 40px); 
            background-color: white;
            border: 2px solid orange;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            box-sizing: border-box; 
        }
        .producto img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .producto h3 {
            color: orange;
            font-size: 18px;
        }
        .precio {
            font-size: 20px;
            font-weight: bold;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            font-size: 28px; /* Opcional: Ajusta el tamaño del texto si lo deseas */
        }
        button {
            background-color: #ffcc00;
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        button:hover {
            background-color: orange;
        }
    </style>
@endsection

@section('content')
    <h2>Nuestros Productos</h2>
    <div class="productos-container">
        <div class="producto">
            <img src="imagen1.png" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Categoría: Electrónica</p>
            <p class="precio">$99.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagen2.png" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Categoría: Libros</p>
            <p class="precio">$49.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagen3.png" alt="Producto 3">
            <h3>Producto 3</h3>
            <p>Categoría: Ropa</p>
            <p class="precio">$29.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagen4.png" alt="Producto 4">
            <h3>Producto 4</h3>
            <p>Categoría: Electrónica</p>
            <p class="precio">$199.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagen5.png" alt="Producto 5">
            <h3>Producto 5</h3>
            <p>Categoría: Libros</p>
            <p class="precio">$59.99</p>
            <button>Agregar al Carrito</button>
        </div>
        <div class="producto">
            <img src="imagen6.png" alt="Producto 6">
            <h3>Producto 6</h3>
            <p>Categoría: Ropa</p>
            <p class="precio">$39.99</p>
            <button>Agregar al Carrito</button>
        </div>
    </div>
@endsection