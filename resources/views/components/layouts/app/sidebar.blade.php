<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Sistema' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200">
        <div class="p-6 border-b border-gray-100">
            <h1 class="text-2xl font-bold text-indigo-600">FilaPro</h1>
            <p class="text-sm text-gray-500">Sistema de Filas</p>
        </div>

<nav class="p-4 space-y-2 text-sm">
    <!-- ÍCONE MENOR PARA FILAS -->
    <a href="{{ route('filas.index') }}"
       class="flex items-center gap-2 px-4 py-2 rounded-md text-gray-700 font-medium hover:bg-indigo-100 hover:text-indigo-700 transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 7h18M3 12h18M3 17h18"></path>
        </svg>
        Filas
    </a>

    <!-- ÍCONES MAIORES PARA OS OUTROS -->
    <a href="{{ route('pacientes.index') }}"
       class="flex items-center gap-2 px-4 py-2 rounded-md text-gray-700 font-medium hover:bg-indigo-100 hover:text-indigo-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.284.536 6.121 1.482M15 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Pacientes
    </a>

    <a href="{{ route('medicos.index') }}"
       class="flex items-center gap-2 px-4 py-2 rounded-md text-gray-700 font-medium hover:bg-indigo-100 hover:text-indigo-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 14l9-5-9-5-9 5 9 5z"></path>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 14l6.16-3.422A12.083 12.083 0 0112 21a12.083 12.083 0 01-6.16-10.422L12 14z"></path>
        </svg>
        Médicos
    </a>

    <a href="{{ route('unidades.index') }}"
       class="flex items-center gap-2 px-4 py-2 rounded-md text-gray-700 font-medium hover:bg-indigo-100 hover:text-indigo-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 10h1l2-5h12l2 5h1"></path>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5 14h14M5 18h14"></path>
        </svg>
        Unidades
    </a>
</nav>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-white shadow-inner">
        {{ $slot }}
    </main>
</div>

</body>
</html>
