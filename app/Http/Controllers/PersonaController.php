<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function listarPersona(){
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('Operacion exitosa', $mensaje)->toToast();
        }

        $personas = Persona::all();
        //dd($personas);
        //alert()->success('Operacion exitosa', $mensaje)->toToast();
        //dd($personas);
        return view('lista-personas',compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }

    public function eliminarPersona(Request $request, $id_persona){
        //dd($id_persona);
        $persona = Persona::find($id_persona);
        $persona->delete();
        //dd($persona);

        return redirect()
            ->route('lista-personas')
            ->with('mensaje', 'Persona Eliminado Correctamente!!');

    }

    public function editarPersona(Request $request, $id_persona){
        $persona = Persona::findOrFail($id_persona);
        return view('editar-persona' ,compact('persona'));
        //dd($persona);
    }

    public function actualizarPersona(Request $request, $id_persona){
        //dd($request);
        if($request->file('foto')){
            $uriFoto = $request->file('foto')->store('uploads','public');
        }else{
            $uriFoto = $request->get('fotoeditar');
        }
        $persona = Persona::where('personaID',$id_persona)->update(
            [
                'nombres' => $request->get('nombres'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'),
                'bibliografia' => $request->get('bibliografia'),
                'foto' => $uriFoto,
                'documento' => $request->get('documento'),
                'celular' => $request->get('celular'),
            ]
        );
        return redirect()
        ->route('lista-personas')
        ->with('mensaje', 'Persona Actualizada correctamente!!');
    }
    
}
