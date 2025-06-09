<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Unidades de Saúde 
        </h2>
    </x-slot>

    <div class= "p-4">
    <a href = " {{route ('unidades.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nova Unidade </a>

    @if(session('sucess'))
        <div 
                class = "text-green-500 mt-2">{{ session('success') }}</div> 
        @endif 

        <table class = "w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200"> 
                    <th class="px-4 py-2">Nome </th>
                    <th class="px-4 py-2">Bairro</th>
                    <th class="px-4 py-2">Cidade</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>@foreach ($unidades as $unidade)
                <tr class ="border-t"> 
                    <td class="px-4 py-2">{{ $unidade->nome }}</td>
                    <td class="px-4 py-2">{{ $unidade->bairro }}</td>
                    <td class="px-4 py-2">{{ $unidade->cidade }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('unidades.show', $unidade) }}" class="text-blue-500">Ver</a>
                        <a href="{{ route('unidades.edit', $unidade) }}" class="text-black-500">Editar</a>
                        <form action="{{ route('unidades.destroy', $unidade) }}" method="POST" class = "inline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" onclick = "return confirm ('Tem certeza?')" class=text-red-500>Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
</x-layouts.app>