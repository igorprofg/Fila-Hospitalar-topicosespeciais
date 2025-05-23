<?php

namespace App\Http\Controllers;

use App\Models\UnidadeDeSaude;
use Illuminate\Http\Request;

class UnidadeDeSaudeController extends Controller
{
    public function index()
    {
        $unidades = UnidadeDeSaude::all();
        return response()->json($unidades);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|max:18|unique:unidades_de_saude',
            'telefone' => 'nullable|string|max:20',
        ]);

        $unidade = UnidadeDeSaude::create($request->all());
        return response()->json($unidade, 201);
    }

    public function show($id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        return response()->json($unidade);
    }

    public function update(Request $request, $id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        $unidade->update($request->all());
        return response()->json($unidade);
    }

    public function destroy($id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        $unidade->delete();
        return response()->json(null, 204);
    }
}
