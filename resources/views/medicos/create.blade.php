<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">Cadastrar Médico</h2>
    </x-slot>

    <div class="p-4">
        <form action="{{ route('medicos.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nome" class="block">Nome:</label>
                <input type="text" name="nome" id="nome" class="border rounded w-full" required>
            </div>

            <div>
                <label for="crm" class="block">CRM:</label>
                <input type="text" name="crm" id="crm" class="border rounded w-full" required>
            </div>

            <div>
                <label for="especialidade" class="block">Especialidade:</label>
                <input type="text" name="especialidade" id="especialidade" class="border rounded w-full" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
        </form>
    </div>
</x-layouts.app>
