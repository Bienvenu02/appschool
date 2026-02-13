@props([
    'label' => 'General',
    'route' => 'dashboard',
    'params' => [],
    'frame' => 'main_content',
    'turbo' => true,
    'reload' => false,
])

<a href="{{ route($route, $params) }}"
    @if ($turbo)
        @if ($reload)
            data-turbo="reload"
        @else
            data-turbo-frame="{{ $frame }}"
        @endif
    @else
        data-turbo="false"
    @endif
    class="block pl-10 pr-4 py-1 rounded hover:bg-gray-300 dark:hover:bg-gray-600">
    {{ $label }}
</a>
