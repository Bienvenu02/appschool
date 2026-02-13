@props([
    'model',
    'modal',
    'fields' => [],
    'relations' => [],     // Relations à charger
    'transforms' => [],    // Transformations personnalisées
    'route',
    'title' => 'Modifier',
    'confirmText' => 'Modifier'
])

@php
    // Extraire les champs du modèle
    $data = empty($fields) 
        ? $model->getAttributes() 
        : collect($fields)->mapWithKeys(fn($field) => [$field => $model->$field])->toArray();
    
    // Ajouter les relations
    foreach ($relations as $relation) {
        if ($model->relationLoaded($relation)) {
            $relationData = $model->$relation;
            // Si c'est une collection, extraire les IDs
            if ($relationData instanceof \Illuminate\Database\Eloquent\Collection) {
                $data[$relation] = $relationData->pluck('id')->toArray();
            } 
            // Si c'est un modèle unique
            elseif ($relationData) {
                $data[$relation . '_id'] = $relationData->id;
            }
        }
    }
    
    // Appliquer les transformations personnalisées
    foreach ($transforms as $key => $callback) {
        if (is_callable($callback)) {
            $data[$key] = $callback($model);
        }
    }
    
    // Ajouter les métadonnées
    $data['_action'] = $route;
    $data['_method'] = 'PUT';
    $data['_title'] = $title;
    $data['_confirmText'] = $confirmText;
@endphp

<button type="button"
    data-edit="{{ json_encode($data) }}"
    data-modal="{{ $modal }}"
    onclick="editEntity(this)"
    {{ $attributes->merge(['class' => 'tooltip text-yellow-600 hover:text-yellow-900 dark:text-yellow-400 dark:hover:text-yellow-300 transition']) }}
    data-tip="{{ $title }}">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
    </svg>
</button>