<x-layouts.app.sidebar :title="'Lista de Médicos'">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Cabeçalho e botão -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-indigo-700">Médicos Cadastrados</h2>
            <a href="{{ route('medicos.create') }}"
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                 Novo Médico
            </a>
        </div>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-lg shadow mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabela de médicos -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
            <table class="w-full text-sm text-gray-800">
                <thead class="bg-indigo-50 text-indigo-700 text-sm uppercase tracking-wider text-center">
                    <tr>
                        <th class="px-6 py-4">Nome</th>
                        <th class="px-6 py-4">CRM</th>
                        <th class="px-6 py-4">Especialidade</th>
                        <th class="px-6 py-4">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center divide-y divide-gray-100">
                    @foreach($medicos as $medico)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-3">{{ $medico->nome }}</td>
                            <td class="px-6 py-3">{{ $medico->crm }}</td>
                            <td class="px-6 py-3">{{ $medico->especialidade }}</td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('medicos.show', $medico) }}"
                                   class="text-blue-600 font-medium hover:underline">Ver</a>
                                <a href="{{ route('medicos.edit', $medico) }}"
                                   class="text-yellow-600 font-medium hover:underline">Editar</a>
                                <form action="{{ route('medicos.destroy', $medico) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Tem certeza?')"
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
</x-layouts.app.sidebar>
