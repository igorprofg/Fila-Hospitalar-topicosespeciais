<x-layouts.app.sidebar :title="'Pacientes'">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Título e Botão -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-indigo-700">Lista de Pacientes</h2>
            <a href="{{ route('pacientes.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">Novo Paciente</a>
    </div>

        </div>

        <!-- Alerta de sucesso -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-lg shadow mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabela de pacientes -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg ring-1 ring-gray-200">
            <table class="w-full text-sm text-gray-800">
                <thead class="bg-indigo-50 text-indigo-700 text-sm uppercase tracking-wider text-center">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nome</th>
                        <th class="px-6 py-4">CPF</th>
                        <th class="px-6 py-4">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center divide-y divide-gray-100">
                    @forelse ($pacientes as $paciente)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-3">{{ $paciente->id }}</td>
                            <td class="px-6 py-3 font-medium">{{ $paciente->nome }}</td>
                            <td class="px-6 py-3">{{ $paciente->cpf }}</td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('pacientes.show', $paciente) }}"
                                   class="text-blue-600 font-medium hover:underline">Ver</a>
                                <a href="{{ route('pacientes.edit', $paciente) }}"
                                   class="text-yellow-600 font-medium hover:underline">Editar</a>
                                <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 font-medium hover:underline">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-6 text-gray-400 italic">Nenhum paciente cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app.sidebar>
