<x-layouts.app.sidebar :title="'Detalhes do Médico'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Informações do Médico</h2>

        <div class="space-y-4 text-gray-800">
            <p>
                <span class="font-semibold text-gray-600">Nome:</span>
                {{ $medico->nome }}
            </p>
            <p>
                <span class="font-semibold text-gray-600">CRM:</span>
                {{ $medico->crm }}
            </p>
            <p>
                <span class="font-semibold text-gray-600">Especialidade:</span>
                {{ $medico->especialidade }}
            </p>
        </div>

        <div class="mt-8">
            <a href="{{ route('medicos.index') }}"
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                ← Voltar à lista
            </a>
        </div>
    </div>
</x-layouts.app.sidebar>
