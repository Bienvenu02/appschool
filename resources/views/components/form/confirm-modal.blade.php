@props([
    'id' => 'confirmModal',
    'title' => 'Confirmation',
    'message' => 'Êtes-vous sûr de vouloir continuer ?',
    'confirmText' => 'Confirmer',
])

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center
       bg-black/50 backdrop-blur-[2px]
       transition-opacity duration-300 opacity-0">

    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-xl
                w-full max-w-md mx-4 p-6
                transform transition-all duration-300
                scale-95 translate-y-4 opacity-0 modal-content">

        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">{{ $title }}</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">{{ $message }}</p>

        <div class="flex justify-end gap-3">
            <button type="button" onclick="closeConfirmModal('{{ $id }}')"
                    class="px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                Annuler
            </button>
            <button type="button" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 flex items-center justify-center gap-2 confirm-submit-btn">
                <span class="confirm-text">{{ $confirmText }}</span>
                <svg class="confirm-loader hidden w-5 h-5 animate-spin text-white"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
