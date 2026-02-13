@props(['name', 'id' => null, 'label' => null, 'checked' => false, 'disabled' => false, 'size' => 'md'])
@php
    $toggleId = $id ?? $name;
    $sizes = [
        'sm' => 'w-10 h-5 after:h-4 after:w-4 after:left-[2px] peer-checked:after:left-[22px]',
        'md' => 'w-12 h-6 after:h-5 after:w-5 after:left-[2px] peer-checked:after:left-[26px]',
        'lg' => 'w-16 h-7 after:h-6 after:w-6 after:left-[2px] peer-checked:after:left-[38px]',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp
<div data-toggle-container data-name="{{ $name }}">
    @if ($label)
        <label for="{{ $toggleId }}" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ $label }}
        </label>
    @endif

    <label class="relative inline-block cursor-pointer">
        <input type="checkbox" id="{{ $toggleId }}" name="{{ $name }}" value="1" class="peer sr-only"
            {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
        <input type="checkbox" hidden name="{{ $name }}" value="0">
        <div
            class="{{ $sizeClass }} peer rounded-full bg-gray-300 after:absolute after:top-[2px] after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-disabled:cursor-not-allowed peer-disabled:opacity-50 dark:bg-gray-600 dark:peer-checked:bg-blue-500">
        </div>
    </label>

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
