<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-lg font-semibold">Sistema</a>

        <ul class="flex gap-4">
            <li><a href="{{ route('filas.index') }}" class="hover:underline">Filas</a></li>
            <li><a href="{{ route('settings.profile') }}" class="hover:underline">Configurações</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:underline">Sair</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
