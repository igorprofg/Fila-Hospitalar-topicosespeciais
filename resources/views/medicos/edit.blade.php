<x-layouts.app.sidebar :title="'Editar Médico'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Editar Médico</h2>

        <form action="{{ route('medicos.update', $medico) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Nome -->
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" name="nome" id="nome"
                       value="{{ $medico->nome }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- CRM -->
            <div>
                <label for="crm" class="block text-sm font-medium text-gray-700 mb-1">CRM</label>
                <input type="text" name="crm" id="crm"
                       value="{{ $medico->crm }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Especialidade -->
            <div>
                <label for="especialidade" class="block text-sm font-medium text-gray-700 mb-1">Especialidade</label>
                <input type="text" name="especialidade" id="especialidade"
                       value="{{ $medico->especialidade }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Botão -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-layouts.app.sidebar>
