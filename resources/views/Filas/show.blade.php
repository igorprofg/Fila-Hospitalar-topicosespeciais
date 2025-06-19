<x-layouts.app.sidebar :title="'Detalhes da Fila'">
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-indigo-700 mb-6">Visualização da Fila</h1>

        <ul class="space-y-3 text-gray-800">
            <li><strong>ID da Fila:</strong> {{ $fila->id }}</li>
            <li><strong>Paciente:</strong> {{ $fila->paciente->nome ?? '-' }}</li>
            <li><strong>Unidade:</strong> {{ $fila->unidadeDeSaude->nome ?? '-' }}</li>
            <li><strong>Médico:</strong> {{ $fila->medico->nome ?? '-' }}</li>
            <li><strong>Status:</strong> {{ $fila->status }}</li>
            <li><strong>Prioridade:</strong> {{ $fila->prioridade }}</li>
        </ul>

        <div class="mt-6 flex gap-4">
            <a href="{{ route('filas.edit', $fila) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded shadow">
                Editar
            </a>
            <a href="{{ route('filas.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
                Voltar
            </a>
        </div>
    </div>
</x-layouts.app.sidebar>
