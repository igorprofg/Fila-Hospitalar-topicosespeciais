<x-layouts.app.sidebar :title="'Detalhes da Unidade de Saúde'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Informações da Unidade</h2>

        <div class="space-y-4 text-gray-800">
            <p>
                <span class="font-semibold text-gray-600">Nome:</span>
                {{ $unidade->nome }}
            </p>
            <p>
                <span class="font-semibold text-gray-600">Bairro:</span>
                {{ $unidade->bairro }}
            </p>
            <p>
                <span class="font-semibold text-gray-600">Cidade:</span>
                {{ $unidade->cidade }}
            </p>
        </div>

        <div class="mt-8 flex gap-4">
            <a href="{{ route('unidades.edit', $unidade) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow transition">
                Editar
            </a>

            <a href="{{ route('unidades.index') }}"
               class="bg-green-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg shadow transition">
                Voltar
            </a>
        </div>
    </div>
</x-layouts.app.sidebar>
