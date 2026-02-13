@props(['name', 'label' => null, 'value' => null, 'placeholder' => null, 'rows' => 4])

<div class="w-full">
    @if ($label)
        <label for="{{ $name }}"
            class="block text-xs font-medium
                   text-gray-600 dark:text-gray-400
                   mb-1">
            {{ $label }}
        </label>
    @endif

    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => '
                        w-full px-3 py-2 text-sm
                        bg-white dark:bg-gray-900
                        text-gray-900 dark:text-gray-100
                        border border-gray-300 dark:border-gray-600
                        rounded-lg
                        resize-y
                        focus:ring-2 focus:ring-blue-500
                        focus:border-blue-500
                        outline-none transition
                    ' . ($errors->has($name) ? ' border-red-500' : '')
        ]) }}>{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>