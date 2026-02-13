@props([
    'id' => 'Submenu',
    'label' => 'Inscription',
    'icon' => '⚙️',
])

<button type="button" data-target="{{ $id }}"
    class="mt-1 w-full flex justify-between items-center px-4 py-1 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-200 submenu-btn">
    <div class="flex items-center space-x-2">
        <span class="flex-shrink-0 text-lg">{{ $icon }}</span>
        <span class="text-left font-semibold">{{ $label }}</span>
    </div>
    <x-ui.icon-chevron-up class="w-4 h-4 text-blue-500 transition-transform duration-300" />
</button>

<div id="{{ $id }}" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out pl-4 space-y-1">
    {{ $slot }}
</div>
