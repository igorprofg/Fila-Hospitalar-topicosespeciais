<x-layouts.app>
    <x-slot name="header">Pacientes</x-slot>

    <div class="mb-4">
        <a href="{{ route('pacientes.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">Novo Paciente</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->cpf }}</td>
                    <td class="space-x-2">
                        <a href="{{ route('pacientes.show', $paciente) }}" class="text-blue-500">Ver</a>
                        <a href="{{ route('pacientes.edit', $paciente) }}" class="text-yellow-500">Editar</a>
                        <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>
