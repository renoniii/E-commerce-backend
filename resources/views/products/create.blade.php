@extends('layout.app')

@section('CSS')
    <style>
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
    </style>
@endsection

@section('content')
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
@endsection