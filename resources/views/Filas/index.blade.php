<x-layouts.app>
    <x-slot name="header">Filas</x-slot>

    <div class="mb-4">
        <a href="{{ route('filas.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">Nova Fila</a>
    </div>

    <table class="w-full table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Unidade</th>
                <th>Médico</th>
                <th>Status</th>
                <th>Prioridade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filas as $fila)
                <tr>
                    <td>{{ $fila->id }}</td>
                    <td>{{ $fila->paciente_id }}</td>
                    <td>{{ $fila->unidade_de_saude_id }}</td>
                    <td>{{ $fila->medico_id }}</td>
                    <td>{{ $fila->status }}</td>
                    <td>{{ $fila->prioridade }}</td>
                    <td class="space-x-2">
                        <a href="{{ route('filas.show', $fila) }}" class="text-blue-500">Ver</a>
                        <a href="{{ route('filas.edit', $fila) }}" class="text-yellow-500">Editar</a>
                        <form action="{{ route('filas.destroy', $fila) }}" method="POST" class="inline">
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