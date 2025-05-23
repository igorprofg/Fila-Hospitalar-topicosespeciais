<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Sistema' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-black">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold">Sistema de Filas</h1>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ route('filas.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200">Filas</a>
                <a href="{{ route('pacientes.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200">Pacientes</a>
                <a href="{{ route('medicos.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200">Médicos</a>
                <a href="{{ route('unidades.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200">Unidades</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
