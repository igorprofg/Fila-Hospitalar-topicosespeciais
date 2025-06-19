<x-layouts.app.sidebar :title="'Editar Unidade de Saúde'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Editar Unidade</h2>

        <form action="{{ route('unidades.update', $unidade) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Nome -->
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $unidade->nome }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Bairro -->
            <div>
                <label for="bairro" class="block text-sm font-medium text-gray-700 mb-1">Bairro</label>
                <input type="text" name="bairro" id="bairro" value="{{ $unidade->bairro }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Cidade -->
            <div>
                <label for="cidade" class="block text-sm font-medium text-gray-700 mb-1">Cidade</label>
                <input type="text" name="cidade" id="cidade" value="{{ $unidade->cidade }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Botão -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow transition">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-layouts.app.sidebar>
