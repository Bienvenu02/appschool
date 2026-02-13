@props([
    'title' => 'Liste des employés',
    'columns' => [],
    'tableId' => '',
])

<div class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden mt-2">
    <!-- En-tête -->
    <div class="bg-blue-400 dark:bg-blue-800 px-4 py-3">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
    </div>

    {{-- Corps --}}
    <div class="p-4">
        <div class="overflow-x-auto">
            <table id="{{ $tableId }}"
                {{ $attributes->merge(['class' => 'datatable display nowrap w-full border-collapse border border-gray-200 dark:border-gray-700 text-sm']) }}>
                <thead class="bg-gray-100 dark:bg-gray-400 text-gray-700 dark:text-gray-100">
                    <tr>
                        @foreach ($columns as $column)
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">{{ $column }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
    </div>
</div>
