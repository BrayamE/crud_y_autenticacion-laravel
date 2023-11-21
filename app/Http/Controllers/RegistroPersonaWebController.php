<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
Use Exception;

class RegistroPersonaWebController extends Controller
{
    Public function registroPersona(){
        return view('web.registro-persona-web');
    }

    public function guardarPersona(Request $request){
        $uriFoto = $request->file('foto')->store('uploads','public');
        try{  
            $data = [
                'nombres' => $request->get('nombres'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'),
                'bibliografia' => $request->get('bibliografia'),
                'foto' => $uriFoto,
                'documento' => $request->get('documento'),
                'celular' => $request->get('celular'),
            ];
            Persona::create($data);
            return redirect()
            ->route('lista-personas')
            ->with('mensaje', 'Persona Registrada con Exito!!');
    
        }catch(Exception $ex){  
            return redirect()
            ->route('registro.persona')
            ->with('mensaje', $ex->getMessage());
        }      
    }
 }