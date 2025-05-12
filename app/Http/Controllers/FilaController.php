<?php

namespace App\Http\Controllers;

use App\Models\Fila;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    public function index()
    {
        $filas = Fila::all();
        return response()->json($filas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'required|exists:pacientes,id',
            'id_unidade' => 'required|exists:unidade_de_saudes,id',
            'id_medico' => 'nullable|exists:medicos,id',
            'status' => 'required|string',
            'data' => 'required|date',
            'prioridade' => 'required|integer|min:1|max:5',
        ]);

        $fila = Fila::create($request->all());
        return response()->json($fila, 201);
    }

    public function show($id)
    {
        $fila = Fila::findOrFail($id);
        return response()->json($fila);
    }

    public function update(Request $request, $id)
    {
        $fila = Fila::findOrFail($id);
        $fila->update($request->all());
        return response()->json($fila);
    }

    public function destroy($id)
    {
        $fila = Fila::findOrFail($id);
        $fila->delete();
        return response()->json(null, 204);
    }
}
