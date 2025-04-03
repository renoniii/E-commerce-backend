<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        //consulta a la base de datos
        $listProducts = Product::paginate(3);

        return view('products.index',[ 
            'listProducts' => $listProducts
        ]); //retornar un listado de productos
    }

    public function create(){
        return view('products.create'); //retorna formulario para crear productos
    }

    public function show($id){

        $product = Product::find($id);
        //echo "PRODUCTO: $name";
        return view('products.show', ['product'=>$product]); //retorna el detalle de un producto
    }
}
