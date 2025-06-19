<x-layouts.app :title="'Filas'">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Cabeçalho e botão -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-indigo-700">Filas Ativas</h2>
            <a href="{{ route('filas.create') }}"
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                 Nova Fila
            </a>
        </div>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
            <table class="w-full text-sm text-gray-800">
                <thead class="bg-indigo-50 text-indigo-700 text-sm uppercase tracking-wider text-center">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Paciente</th>
                        <th class="px-4 py-3">Unidade</th>
                        <th class="px-4 py-3">Médico</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Prioridade</th>
                        <th class="px-4 py-3">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center divide-y divide-gray-100">
                    @foreach ($filas as $fila)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-3">{{ $fila->id_fila }}</td>
                            <td class="px-4 py-3">{{ $fila->paciente->nome ?? '-' }}</td>
                            <td class="px-4 py-3">{{ $fila->unidade->nome ?? '-' }}</td>
                            <td class="px-4 py-3">{{ $fila->medico->nome ?? '-' }}</td>
                            <td class="px-4 py-3">{{ $fila->status }}</td>
                            <td class="px-4 py-3">{{ $fila->prioridade }}</td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('filas.show', $fila->id_fila) }}"
                                   class="text-blue-600 font-medium hover:underline">Ver</a>
                                <a href="{{ route('filas.edit', $fila->id_fila) }}"
                                   class="text-yellow-600 font-medium hover:underline">Editar</a>
                                <form action="{{ route('filas.destroy', $fila->id_fila) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Tem certeza que deseja excluir?')"
                                            class="text-red-600 font-medium hover:underline">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
