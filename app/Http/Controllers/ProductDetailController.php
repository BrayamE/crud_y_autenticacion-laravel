<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function show($id)
    {
        // Aquí puedes agregar la lógica para obtener y mostrar el detalle del producto con el ID proporcionado.
        return view('product-detail', ['id' => $id]);
    }
}

