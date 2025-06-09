<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">Detalhes do Médico</h2>
    </x-slot>

    <div class="p-4">
        <p><strong>Nome:</strong> {{ $medico->nome }}</p>
        <p><strong>CRM:</strong> {{ $medico->crm }}</p>
        <p><strong>Especialidade:</strong> {{ $medico->especialidade }}</p>

        <a href="{{ route('medicos.index') }}" class="mt-4 inline-block text-blue-500">Voltar à lista</a>
    </div>
</x-layouts.app>
