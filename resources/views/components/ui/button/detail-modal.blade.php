{{-- resources/views/components/ui/button/detail-modal.blade.php --}}
@props([
    'model',
    'modal',
    'fields' => [],
    'transforms' => [],    // Transformations personnalisées
    'title' => 'Détails'
])

@php
    $data = [];
    
    if (empty($fields)) {
        // Si aucun champ spécifié, récupérer tous les attributs
        $data = $model->getAttributes();
    } else {
        // Parcourir les champs
        foreach ($fields as $key => $value) {
            if (is_numeric($key)) {
                // Clé numérique : c'est un nom de champ simple (ex: 'nom', 'description')
                $fieldName = $value;
                $data[$fieldName] = $model->$fieldName ?? null;
            } else {
                // Clé string : c'est une valeur personnalisée (ex: 'userCreated_name' => 'John Doe')
                $data[$key] = $value;
            }
        }
    }
    
    // Appliquer les transformations personnalisées
    foreach ($transforms as $key => $callback) {
        if (is_callable($callback)) {
            $data[$key] = $callback($model);
        }
    }
@endphp

<button type="button"
    data-details="{{ json_encode($data) }}"
    data-modal="{{ $modal }}"
    onclick="showDetails(this)"
    {{ $attributes->merge(['class' => 'tooltip text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 transition']) }}
    data-tip="{{ $title }}">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
    </svg>
</button>