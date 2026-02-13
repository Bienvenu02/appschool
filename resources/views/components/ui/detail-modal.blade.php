@props([
    'id' => 'detailModal',
    'title' => 'Détails',
    'width' => '50vw',
    'maxHeight' => '90vh',
])

<div id="{{ $id }}"
    class="fixed z-50 inset-0 hidden items-center justify-center
       bg-black/50 backdrop-blur-[2px]
       transition-opacity duration-300 opacity-0"
    data-modal-id="{{ $id }}">

    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-xl
                w-full mx-4 z-50
                transform transition-all duration-300
                scale-95 translate-y-4 opacity-0 modal-content
                flex flex-col"
        style="max-width: {{ $width }}; max-height: {{ $maxHeight }};">

        {{-- Header --}}
        <div class="flex items-center justify-between p-6 pb-4 border-b border-gray-200 dark:border-gray-700 flex-shrink-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $title }}</h2>
            <button type="button" onclick="closeModalForm('{{ $id }}')"
                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Content --}}
        <div class="overflow-y-auto px-6 py-4 flex-1">
            {{ $slot }}
        </div>

        {{-- Footer (optionnel) --}}
        @if(isset($footer))
            <div class="flex justify-end gap-3 p-6 pt-4 border-t border-gray-200 dark:border-gray-700 flex-shrink-0">
                {{ $footer }}
            </div>
        @else
            <div class="flex justify-end p-6 pt-4 border-t border-gray-200 dark:border-gray-700 flex-shrink-0">
                <button type="button" onclick="closeModalForm('{{ $id }}')"
                    class="px-5 py-2.5 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors font-medium">
                    Fermer
                </button>
            </div>
        @endif

    </div>
</div>