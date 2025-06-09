<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Unidade de Saúde
        </h2>
    </x-slot>

    <div class="p-4">
        <form action="{{ route('unidades.update', $unidade) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nome" class="block">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ $unidade->nome }}" class="border rounded w-full px-3 py-2" required>
            </div>

            <div>
                <label for="bairro" class="block">Bairro:</label>
                <input type="text" name="bairro" id="bairro" value="{{ $unidade->bairro }}" class="border rounded w-full px-3 py-2" required>
            </div>

            <div>
                <label for="cidade" class="block">Cidade:</label>
                <input type="text" name="cidade" id="cidade" value="{{ $unidade->cidade }}" class="border rounded w-full px-3 py-2" required>
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Atualizar</button>
        </form>
    </div>
</x-layouts.app>
