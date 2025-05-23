<?php

namespace App\Http\Controllers;

use App\Models\Fila;
use App\Models\Paciente;
use App\Models\Medico;
use App\Models\UnidadeDeSaude;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    public function index()
    {
        $filas = Fila::with(['paciente', 'medico', 'unidade'])->get();
        return view('filas.index', compact('filas'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        $unidades = UnidadeDeSaude::all();

       return view('filas.create', compact('pacientes', 'unidades', 'medicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id_paciente',
            'unidade_id' => 'required|exists:unidade_de_saude,id_unidade',
            'medico_id' => 'nullable|exists:medicos,id_medico',
            'status' => 'required|string',
            'prioridade' => 'required|string',
        ]);

        Fila::create($request->only([
            'paciente_id', 'unidade_id', 'medico_id', 'status', 'prioridade'
        ]));

        return redirect()->route('filas.index')->with('success', 'Fila criada com sucesso.');
    }

    public function show($id)
    {
        $fila = Fila::with(['paciente', 'medico', 'unidade'])->findOrFail($id);
        return view('filas.show', compact('fila'));
    }

    public function edit($id)
    {
        $fila = Fila::findOrFail($id);
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        $unidades = UnidadeDeSaude::all();

        return view('filas.edit', compact('fila', 'pacientes', 'medicos', 'unidades'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id_paciente',
            'unidade_id' => 'required|exists:unidade_de_saude,id_unidade',
            'medico_id' => 'nullable|exists:medicos,id_medico',
            'status' => 'required|string',
            'prioridade' => 'required|string',
        ]);

        $fila = Fila::findOrFail($id);
        $fila->update($request->only([
            'paciente_id', 'unidade_id', 'medico_id', 'status', 'prioridade'
        ]));

        return redirect()->route('filas.index')->with('success', 'Fila atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $fila = Fila::findOrFail($id);
        $fila->delete();

        return redirect()->route('filas.index')->with('success', 'Fila excluída com sucesso.');
    }
}
