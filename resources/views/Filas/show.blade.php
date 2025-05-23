<x-settings.layout>
    <x-slot name="heading">Detalhes da Fila</x-slot>
    <x-slot name="subheading">Visualização completa da fila</x-slot>

    <ul class="list-disc pl-5">
        <li><strong>ID:</strong> {{ $fila->id }}</li>
        <li><strong>ID do Paciente:</strong> {{ $fila->paciente_id }}</li>
        <li><strong>ID da Unidade de Saúde:</strong> {{ $fila->unidade_de_saude_id }}</li>
        <li><strong>ID do Médico:</strong> {{ $fila->medico_id }}</li>
        <li><strong>Status:</strong> {{ $fila->status }}</li>
        <li><strong>Prioridade:</strong> {{ $fila->prioridade }}</li>
    </ul>

    <div class="mt-4 space-x-2">
        <a href="{{ route('filas.edit', $fila) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
        <a href="{{ route('filas.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Voltar</a>
    </div>
</x-settings.layout>
