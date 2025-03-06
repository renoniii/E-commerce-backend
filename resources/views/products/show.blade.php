@extends('layout.app')

@section('CSS')
    <style>
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
        .btn:hover {
            background-color: orange;
        }
    </style>
@endsection

@section('content')
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
@endsection