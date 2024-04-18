<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardarDenunciaController extends Controller
{
    //
    public function guardarDenuncia(Request $request)
    {
        // Validación de campos (puedes agregar más validaciones según tus necesidades)
        $request->validate([
            'descripcion' => 'required',
            'motivo' => 'required',
            'direccion' => 'required',
            'foto' => 'image|max:2048', // Asegura que la foto sea una imagen y no exceda 2MB
        ]);

        // Procesa los datos y guárdalos en tu base de datos o en otro medio
        // Ejemplo:
        $denuncia = new Denuncia();
        $denuncia->descripcion = $request->input('descripcion');
        $denuncia->motivo = $request->input('motivo');
        $denuncia->direccion = $request->input('direccion');
        // Guarda la imagen (si se proporcionó)
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('denuncias', 'public');
            $denuncia->foto = $fotoPath;
        }
        // Guarda el usuario (si se proporcionó)
        $denuncia->usuario = $request->input('usuario', null);
        $denuncia->save();

        // Redirige o muestra un mensaje de éxito
        return redirect()->route('formulario')->with('success', 'Denuncia guardada correctamente.');
    }
}
