@props([
    'route' => '',
    'param' => '',
    'modalId' => 'deleteModal',
    'title' => 'Supprimer',
    'iconSize' => 'w-5 h-5',
])

<form action="{{ route($route, $param) }}" method="POST" class="inline-block"
    onclick="openConfirmModal('{{ $modalId }}', this)">
    @csrf
    @method('DELETE')
    <button type="button"
        class="tooltip text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 rounded p-1"
        data-tip="{{ $title }}" aria-label="{{ $title }}">
        <svg class="{{ $iconSize }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
    </button>
</form>

<x-form.confirm-modal :id="$modalId" />
