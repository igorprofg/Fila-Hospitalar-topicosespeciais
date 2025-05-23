@props(['title' => ''])

<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($title)
            <h1 class="text-2xl font-bold mb-4 text-black dark:text-white">{{ $title }}</h1>
        @endif

        {{ $slot }}
    </div>
</x-app-layout>
