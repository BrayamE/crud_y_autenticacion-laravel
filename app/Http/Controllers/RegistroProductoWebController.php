<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
Use Exception;
class RegistroProductoWebController extends Controller
{
    Public function registroProducto(){
        return view('web.registro-producto-web');
    }

    public function guardarProducto(Request $request){
        $uriFoto = $request->file('foto')->store('uploads','public');
        try{  
            $data = [
                'producto' => $request->get('producto'),
                'descripcion' => $request->get('descripcion'),
                'categoria' => $request->get('categoria'),
                'precio' => $request->get('precio'),
                'fecharegistro' => $request->get('fecharegistro'),
                'stock' => $request->get('stock'),
                'foto' => $uriFoto,
            ];
            Producto::create($data);
            return redirect()
            ->route('lista-productos')
            ->with('mensaje', 'Producto Registrado con Exito!!');
    
        }catch(Exception $ex){  
            return redirect()
            ->route('registro.producto')
            ->with('mensaje', $ex->getMessage());
        } 
    }
}
