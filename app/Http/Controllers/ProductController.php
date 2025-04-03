<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        //consulta a la base de datos
        $listProducts = Product::all();

        return view('products.index',[ 
            'listProducts' => $listProducts
        ]); //retornar un listado de productos
    }

    public function create(){
        return view('products.create'); //retorna formulario para crear productos
    }

    public function show($name){
        //echo "PRODUCTO: $name";
        return view('products.show'); //retorna el detalle de un producto
    }
}
