<?php

namespace App\Http\Controllers;

use App\Models\UnidadeDeSaude;
use Illuminate\Http\Request;

class UnidadeDeSaudeController extends Controller
{
    public function index()
    {
        $unidades = UnidadeDeSaude::all();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        return view('unidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
        ]);

        UnidadeDeSaude::create([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
        ]);

        return redirect()->route('unidades.index')->with('success', 'Unidade criada com sucesso!');
    }

    public function show($id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        return view('unidades.show', compact('unidade'));
    }

    public function edit($id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        return view('unidades.edit', compact('unidade'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
        ]);

        $unidade = UnidadeDeSaude::findOrFail($id);
        $unidade->update([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
        ]);

        return redirect()->route('unidades.index')->with('success', 'Unidade atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $unidade = UnidadeDeSaude::findOrFail($id);
        $unidade->delete();

        return redirect()->route('unidades.index')->with('success', 'Unidade excluída com sucesso!');
    }
}
