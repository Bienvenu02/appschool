@props([
    'id' => 'modalSingle',
    'title' => 'Titre',
    'confirmText' => 'Confirmer',
    'width' => '60vw',
    'maxHeight' => '90vh',
    'action' => '',
    'method' => 'POST',
    'idConfirmModal' => 'confirmModal',
])

<div id="{{ $id }}"
    class="fixed z-50 inset-0 hidden items-center justify-center
       bg-black/50 backdrop-blur-[2px]
       transition-opacity duration-300 opacity-0"
    data-modal-id="{{ $id }}">

    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-xl
                w-full mx-4 p-6 z-50
                transform transition-all duration-300
                scale-95 translate-y-4 opacity-0 modal-content"
        style="max-width: {{ $width }}; max-height: {{ $maxHeight }};">

        <form method="POST" data-turbo="true" data-turbo-frame="main_content" action="{{ $action }}"
            enctype="multipart/form-data" data-modal-form="{{ $id }}">
            @csrf
            @if (!in_array(strtoupper($method), ['GET']))
                @method($method)
            @endif

            {{-- Header --}}
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h2>
                <button type="button" onclick="closeModalForm('{{ $id }}')"
                    class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    ✕
                </button>
            </div>

            <div class="mb-4 overflow-y-auto" style="max-height: calc({{ $maxHeight }} - 180px);">
                {{ $slot }}
            </div>

            {{-- Footer --}}
            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeModalForm('{{ $id }}')"
                    class="px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    Annuler
                </button>

                <button type="button" onclick="openConfirmModal('{{ $idConfirmModal }}', this)"
                    class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 flex items-center justify-center gap-2 confirm-submit-btn">
                    <span class="confirm-text">{{ $confirmText }}</span>
                    <svg class="confirm-loader hidden w-5 h-5 animate-spin text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                </button>
            </div>

            <x-form.confirm-modal :id="$idConfirmModal" />
        </form>
    </div>
</div>
