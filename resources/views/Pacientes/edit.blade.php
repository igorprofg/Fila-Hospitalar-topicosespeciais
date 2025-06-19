<x-layouts.app.sidebar :title="'Editar Paciente'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Editar Paciente</h2>

        <form action="{{ route('pacientes.update', $paciente) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Campo Nome -->
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $paciente->nome) }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                @error('nome')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo CPF -->
            <div>
                <label for="cpf" class="block text-sm font-medium text-gray-700 mb-1">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $paciente->cpf) }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                @error('cpf')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botões -->
            <div class="flex justify-end gap-4 pt-4">
                <button type="submit"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-lg shadow transition">
                    Salvar
                </button>
                <a href="{{ route('pacientes.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-lg shadow transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-layouts.app.sidebar>
