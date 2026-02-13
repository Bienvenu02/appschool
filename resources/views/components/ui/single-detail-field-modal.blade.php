@props([
    'label' => '',
    'value' => '',
    'type' => 'text', // text, image, badge
])

<div class="space-y-1">
    <p class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $label }}</p>
    
    @if($type === 'image')
        @if($value)
            <div class="flex items-center justify-center bg-white dark:bg-gray-900 rounded-lg p-4 border border-gray-200 dark:border-gray-700">
                <img src="{{ $value }}" alt="{{ $label }}" class="h-32 object-contain">
            </div>
        @else
            <p class="text-sm text-gray-400 dark:text-gray-500 italic">Aucune image</p>
        @endif
    
    @elseif($type === 'badge')
        <div>
            {{ $slot }}
        </div>
    
    @elseif($type === 'long-text')
        <p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">{{ $value ?: '—' }}</p>
    
    @else
        <p class="text-base font-medium text-gray-900 dark:text-gray-100 {{ $attributes->get('class') }}">
            {{ $value ?: '—' }}
        </p>
    @endif
</div>