<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function show($id)
    {
        // Aquí puedes agregar la lógica para obtener y mostrar el detalle del blog con el ID proporcionado.
        return view('blog-detail', ['id' => $id]);
    }
}

