<x-layouts.app.sidebar :title="'Dashboard'">
    <div class="max-w-7xl mx-auto py-10 px-6 text-gray-800">
        <div class="bg-white shadow rounded-lg p-8">
            <h1 class="text-4xl font-bold text-indigo-600 mb-4">Bem-vindo ao FilaPro!</h1>
            <p class="text-gray-600 text-lg">
                Utilize o menu lateral para acessar as funcionalidades do sistema.
            </p>
        </div>

        <!-- Cards com dados reais -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
            <div class="bg-indigo-50 p-6 rounded-lg shadow text-center">
                <p class="text-sm text-gray-500">Pacientes cadastrados</p>
                <p class="text-3xl font-bold text-indigo-700">{{ \App\Models\Paciente::count() }}</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg shadow text-center">
                <p class="text-sm text-gray-500">Médicos ativos</p>
                <p class="text-3xl font-bold text-indigo-700">{{ \App\Models\Medico::count() }}</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg shadow text-center">
                <p class="text-sm text-gray-500">Filas abertas</p>
                <p class="text-3xl font-bold text-indigo-700">{{ \App\Models\Fila::count() }}</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg shadow text-center">
                <p class="text-sm text-gray-500">Unidades registradas</p>
                <p class="text-3xl font-bold text-indigo-700">{{ \App\Models\UnidadeDeSaude::count() }}</p>
            </div>
        </div>
    </div>
</x-layouts.app.sidebar>
