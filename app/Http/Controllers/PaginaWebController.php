<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Producto;
use Illuminate\Http\Request;

class PaginaWebController extends Controller
{   
    public function verPaginaWeb(){
        $data = [
            'personas' => Persona::all(),
            'productos' => Producto::all(),
        ];
        return view('web.pagina-web-principal', compact('data'));
    }
}
