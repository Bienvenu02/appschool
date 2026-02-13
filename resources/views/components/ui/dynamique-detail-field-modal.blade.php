@props([
    'label' => '',
    'field' => '',
    'type' => 'text',
    'badgeMap' => null,
])

<div class="space-y-1" 
     data-field="{{ $field }}" 
     data-type="{{ $type }}"
     @if($badgeMap) data-badge-map="{{ json_encode($badgeMap) }}" @endif>
    @if($label)
        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">
            {{ $label }}
        </label>
    @endif

    <div class="text-sm text-gray-900 dark:text-white">
        @if($type === 'image')
            <img data-field-value 
                 alt="{{ $label }}" 
                 class="w-32 h-32 object-cover rounded-lg hidden"
                 {{ $attributes }}>
        @elseif($type === 'badge')
            <div data-field-value>-</div>
        @elseif($type === 'long-text')
            <p data-field-value class="whitespace-pre-line">-</p>
        @else
            <span data-field-value {{ $attributes }}>-</span>
        @endif
    </div>
</div>