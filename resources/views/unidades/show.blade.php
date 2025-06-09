<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalhes da Unidade de Saúde
        </h2>
    </x-slot>

    <div class="p-4 space-y-2">
        <p><strong>Nome:</strong> {{ $unidade->nome }}</p>
        <p><strong>Bairro:</strong> {{ $unidade->bairro }}</p>
        <p><strong>Cidade:</strong> {{ $unidade->cidade }}</p>

        <a href="{{ route('unidades.edit', $unidade) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
        <a href="{{ route('unidades.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Voltar</a>
    </div>
</x-layouts.app>
