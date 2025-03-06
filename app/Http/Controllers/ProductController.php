<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index'); //retornar un listado de productos
    }

    public function create(){
        return view('products.create'); //retorna formulario para crear productos
    }

    public function show($name){
        echo "PRODUCTO: $name";
    }
}
