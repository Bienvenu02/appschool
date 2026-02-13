@props([
    'type' => 'text',
    'name',
    'label' => null,
    'value' => null,
    'placeholder' => null,
])

<div class="w-full">
    @if($label)
        <label for="{{ $name }}"
               class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">
            {{ $label }}
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => '
                w-full px-3 py-2 text-sm
                bg-white dark:bg-gray-900
                text-gray-900 dark:text-gray-100
                border border-gray-300 dark:border-gray-600
                rounded-lg
                focus:ring-2 focus:ring-blue-500
                focus:border-blue-500
                outline-none transition
            ' . ($errors->has($name) ? ' border-red-500' : '')
        ]) }}
    >

    @error($name)
        <p class="text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>
