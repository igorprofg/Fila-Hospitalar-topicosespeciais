@props(['name'])

{{-- Aqui você pode integrar heroicons, lucide ou outro ícone SVG --}}
@if ($name === 'home')
    <svg {{ $attributes }} fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2h-4a2 2 0 01-2-2V13H9v7a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
    </svg>
@elseif ($name === 'folder-git-2')
    <svg {{ $attributes }} fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2h-7l-2-2H5a2 2 0 01-2-2z" />
    </svg>
@else
    {{-- Ícone padrão caso não reconhecido --}}
    <svg {{ $attributes }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="10" />
        <path d="M12 8v4l3 3" />
    </svg>
@endif
