<x-layouts.app.sidebar :title="'Novo Paciente'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Cadastrar Novo Paciente</h2>

        <!-- Erros -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-700 px-5 py-4 rounded-lg shadow mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário -->
        <form action="{{ route('pacientes.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Campo Nome -->
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Campo CPF -->
            <div>
                <label for="cpf" class="block text-sm font-medium text-gray-700 mb-1">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}"
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Botão -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</x-layouts.app.sidebar>
