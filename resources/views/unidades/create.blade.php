<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nova Unidade de Saúde
        </h2>
    </x-slot>

    <div class="p-4">
        <form action="{{ route('unidades.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nome" class="block">Nome:</label>
                <input type="text" name="nome" id="nome" class="border rounded w-full px-3 py-2" required>
            </div>

            <div>
                <label for="bairro" class="block">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="border rounded w-full px-3 py-2" required>
            </div>

            <div>
                <label for="cidade" class="block">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="border rounded w-full px-3 py-2" required>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Salvar</button>
        </form>
    </div>
</x-layouts.app>
