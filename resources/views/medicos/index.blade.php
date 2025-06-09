<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Médicos
        </h2>
    </x-slot>

    <div class="p-4">
        <a href="{{ route('medicos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Novo Médico</a>

        @if(session('success'))
            <div class="text-green-500 mt-2">{{ session('success') }}</div>
        @endif

        <table class="w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">CRM</th>
                    <th class="px-4 py-2">Especialidade</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicos as $medico)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $medico->nome }}</td>
                        <td class="px-4 py-2">{{ $medico->crm }}</td>
                        <td class="px-4 py-2">{{ $medico->especialidade }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('medicos.show', $medico) }}" class="text-blue-500">Ver</a> |
                            <a href="{{ route('medicos.edit', $medico) }}" class="text-yellow-500">Editar</a> |
                            <form action="{{ route('medicos.destroy', $medico) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza?')" class="text-red-500">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
