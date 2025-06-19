<x-layouts.app.sidebar :title="'Editar Fila'">
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-indigo-700 mb-6">Editar Fila</h1>

        <form method="POST" action="{{ route('filas.update', $fila->id_fila) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Paciente -->
            <div>
                <label for="id_paciente" class="block text-sm font-medium text-gray-700 mb-1">Paciente</label>
                <select name="id_paciente" id="id_paciente"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach($pacientes as $paciente)
                        <option value="{{ $paciente->id_paciente }}" {{ $fila->id_paciente == $paciente->id_paciente ? 'selected' : '' }}>
                            {{ $paciente->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Unidade -->
            <div>
                <label for="id_unidade" class="block text-sm font-medium text-gray-700 mb-1">Unidade</label>
                <select name="id_unidade" id="id_unidade"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->id_unidade }}" {{ $fila->id_unidade == $unidade->id_unidade ? 'selected' : '' }}>
                            {{ $unidade->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Médico -->
            <div>
                <label for="id_medico" class="block text-sm font-medium text-gray-700 mb-1">Médico</label>
                <select name="id_medico" id="id_medico"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Nenhum --</option>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id_medico }}" {{ $fila->id_medico == $medico->id_medico ? 'selected' : '' }}>
                            {{ $medico->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <input type="text" name="status" id="status"
                       value="{{ old('status', $fila->status) }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required />
            </div>

            <!-- Prioridade -->
            <div>
                <label for="prioridade" class="block text-sm font-medium text-gray-700 mb-1">Prioridade</label>
                <input type="text" name="prioridade" id="prioridade"
                       value="{{ old('prioridade', $fila->prioridade) }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required />
            </div>

            <!-- Botão -->
            <div class="flex justify-end">
                <button type="submit"
                         class="bg-indigo-600 hover:bg-indigo-700 text-black px-4 py-2 rounded-lg shadow transition">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-layouts.app.sidebar>
