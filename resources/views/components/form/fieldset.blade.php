@props([
    'legend' => 'Titre du fieldset',
    'colsMd' => 3, // Par défaut 3 colonnes sur md
    'colsLg' => null, // Optionnel pour lg
    'colsSm' => 1, // Par défaut 1 colonne sur sm
    'gap' => 5, // Espacement par défaut
])

<fieldset {{ $attributes->merge(['class' => 'border border-gray-300 dark:border-gray-700 rounded-lg px-4 pb-4']) }}>
    <legend class="px-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        {{ $legend }}
    </legend>

    <div
        class="grid 
        @if ($colsSm) grid-cols-{{ $colsSm }} @endif
        @if ($colsMd) md:grid-cols-{{ $colsMd }} @endif
        @if ($colsLg) lg:grid-cols-{{ $colsLg }} @endif
        gap-{{ $gap }} mt-3">
        {{ $slot }}
    </div>
</fieldset>
