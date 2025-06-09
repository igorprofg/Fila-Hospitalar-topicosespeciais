<x-layouts.app>
    <x-slot name="header">
        Detalhes do Paciente
    </x-slot>

    <div class="max-w-lg mx-auto mt-6 bg-white shadow-md rounded p-6">
        <p><strong>Nome:</strong> {{ $paciente->nome }}</p>
        <p><strong>CPF:</strong> {{ $paciente->cpf }}</p>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('pacientes.edit', $paciente) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
            <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este paciente?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Excluir</button>
            </form>
            <a href="{{ route('pacientes.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded">Voltar</a>
        </div>
    </div>
</x-layouts.app>
