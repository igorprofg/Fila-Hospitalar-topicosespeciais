<x-layouts.app>
    <x-slot name="header">
        Editar Paciente
    </x-slot>

    <div class="max-w-lg mx-auto mt-6 bg-white shadow-md rounded p-6">
        <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $paciente->nome) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('nome')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $paciente->cpf) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('cpf')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-2">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
                <a href="{{ route('pacientes.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>
