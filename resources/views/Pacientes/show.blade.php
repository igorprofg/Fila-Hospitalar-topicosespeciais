<x-layouts.app.sidebar :title="'Detalhes do Paciente'">
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-6">Informações do Paciente</h2>

        <div class="space-y-4 text-gray-800">
            <p>
                <span class="font-semibold text-gray-600">Nome:</span>
                {{ $paciente->nome }}
            </p>
            <p>
                <span class="font-semibold text-gray-600">CPF:</span>
                {{ $paciente->cpf }}
            </p>
        </div>

        <div class="mt-8 flex flex-wrap gap-4">
            <!-- Editar -->
            <a href="{{ route('pacientes.edit', $paciente) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg shadow transition">
                Editar
            </a>

            <!-- Botão de excluir com modal -->
            <button type="button"
                    onclick="document.getElementById('confirmModal').classList.remove('hidden')"
                    class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg shadow transition">
                Excluir
            </button>

            <!-- Modal -->
            <div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm text-center">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirmar Exclusão</h2>
                    <p class="text-gray-600 mb-6">Tem certeza que deseja excluir este paciente?</p>

                    <div class="flex justify-center gap-4">
                        <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                                Sim, Excluir
                            </button>
                        </form>
                        <button type="button"
                                onclick="document.getElementById('confirmModal').classList.add('hidden')"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow transition">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Voltar -->
            <a href="{{ route('pacientes.index') }}"
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-5 py-2 rounded-lg shadow transition">
                Voltar
            </a>
        </div>
    </div>
</x-layouts.app.sidebar>
