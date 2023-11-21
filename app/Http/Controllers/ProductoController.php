<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function listarProducto(){
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('Operacion exitosa', $mensaje)->toToast();
        }

        $productos = Producto::all();
        //alert()->success('Operacion exitosa', $mensaje)->toToast();
        //dd($personas);
        return view('lista-productos',compact('productos'));
    }

    public function mostrarProducto(Request $request, $id_producto){
        //dd($request);
        return view('mostrar-producto', compact('id_producto'));
    }

    public function eliminarProducto(Request $request, $id_producto){
        //dd($id_persona);
        $producto = Producto::find($id_producto);
        $producto->delete();
        //dd($persona);

        return redirect()
            ->route('lista-productos')
            ->with('mensaje', 'Producto Eliminado Correctamente!!');

    }

    public function editarProducto(Request $request, $id_producto){
        $producto = Producto::findOrFail($id_producto);
        return view('editar-producto' ,compact('producto'));
        //dd($persona);
    }

    public function actualizarProducto(Request $request, $id_producto){
        //dd($request);
        if($request->file('foto')){
            $uriFoto = $request->file('foto')->store('uploads','public');
        }else{
            $uriFoto = $request->get('fotoeditar');
        }
        $producto = Producto::where('productoID',$id_producto)->update(
            [
                'producto' => $request->get('producto'),
                'descripcion' => $request->get('descripcion'),
                'categoria' => $request->get('categoria'),
                'precio' => $request->get('precio'),
                'fecharegistro' => $request->get('fecharegistro'),
                'stock' => $request->get('stock'),
                'foto' => $uriFoto,
            ]
        );
        return redirect()
        ->route('lista-productos')
        ->with('mensaje', 'Producto Actualizado correctamente!!');
    }
}