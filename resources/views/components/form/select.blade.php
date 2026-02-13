@props([
    'label' => 'Label',
    'name' => 'select',
    'options' => [],
    'value' => '',
    'multiple' => false,
])

<div>
    <label class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">
        {{ $label }}
    </label>
    <select 
        name="{{ $name }}" 
        @if($multiple) multiple @endif
        {{ $attributes->merge(['class' => 'w-full px-3 py-2 text-sm
           bg-white dark:bg-gray-900 select2
           text-gray-900 dark:text-gray-100
           border border-gray-300 dark:border-gray-600
           rounded-lg
           dark:bg-black/50
           focus:ring-2 focus:ring-blue-500
           focus:border-blue-500
           outline-none transition']) }}
    >
        @if(!$multiple)
            <option value="">Sélectionner</option>
        @endif
        @foreach($options as $optValue => $optLabel)
            @if($multiple)
                {{-- Pour multiple, vérifier si la valeur est dans le tableau --}}
                <option value="{{ $optValue }}" 
                    @selected(in_array($optValue, (array)$value))
                >
                    {{ $optLabel }}
                </option>
            @else
                <option value="{{ $optValue }}" 
                    @selected($optValue == $value)
                >
                    {{ $optLabel }}
                </option>
            @endif
        @endforeach
    </select>
    
    @if($multiple)
        <p class="text-xs text-gray-500 mt-1">
            Maintenez Ctrl ou Cmd pour une sélection multiple
        </p>
    @endif
</div>