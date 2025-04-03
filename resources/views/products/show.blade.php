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
            <img src={{$product->url_image}} alt="Producto" width="100%">
        </div>
        <div class="product-info">
            <h1>{{$product->name}}</h1>
            <p><strong>Categoría:</strong>{{$product->category_id}}</p>
            <p>{{$product->description}}</p>
            <p class="price">{{$product->price}}</p>
            <button class="btn">Agregar al Carrito</button>
        </div>
    </div>
@endsection