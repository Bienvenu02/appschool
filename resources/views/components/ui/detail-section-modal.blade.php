@props([
    'title' => '',
    'cols' => '2', // nombre de colonnes (1, 2, ou 3)
])

@php
    $gridCols = match($cols) {
        '1' => 'grid-cols-1',
        '2' => 'grid-cols-1 md:grid-cols-2',
        '3' => 'grid-cols-1 md:grid-cols-3',
        default => 'grid-cols-1 md:grid-cols-2',
    };
@endphp

<div class="bg-gray-50 dark:bg-gray-800/50 rounded-lg p-5 border border-gray-200 dark:border-gray-700">
    @if($title)
        <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">
            {{ $title }}
        </h3>
    @endif
    
    <div class="grid {{ $gridCols }} gap-5">
        {{ $slot }}
    </div>
</div>