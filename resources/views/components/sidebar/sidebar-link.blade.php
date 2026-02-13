@props([
    'label' => 'Dashboard',
    'route' => 'dashboard',
    'params' => [],
    'icon' => '📊',
    'frame' => 'main_content',
    'turbo' => true,
    'reload' => false,
])

<a href="{{ route($route, $params) }}"
    @if ($turbo)
        @if ($reload)
            data-turbo="reload"
        @else
            data-turbo-frame="{{ $frame }}" @endif
    @else
        data-turbo="false"
    @endif
    class="mt-1 flex space-x-2 px-4 py-1 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">

    <span>{{ $icon }}</span>
    <span class="font-semibold">{{ $label }}</span>
</a>
