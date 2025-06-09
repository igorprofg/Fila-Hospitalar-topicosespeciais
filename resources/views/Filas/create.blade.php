<x-layouts.app title="Criar Fila">
    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Nova Fila</h1>

        <form method="POST" action="{{ route('filas.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Paciente</label>
                <select name="id_paciente" class="w-full p-2 border rounded">
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Unidade</label>
                <select name="id_unidade" class="w-full p-2 border rounded">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Médico</label>
                <select name="id_medico" class="w-full p-2 border rounded">
                    <option value="">-- Nenhum --</option>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}">{{ $medico->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Status</label>
                <input type="text" name="status" class="w-full p-2 border rounded" />
            </div>

            <div class="mb-4">
                <label class="block mb-1">Prioridade</label>
                <input type="number" name="prioridade" class="w-full p-2 border rounded" />
            </div>

            <button type="submit" class="bg-blue-600 !text-black px-4 py-2 rounded">Salvar</button>
        </form>
    </div>
</x-layouts.app>
