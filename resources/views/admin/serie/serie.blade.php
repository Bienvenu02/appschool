@extends('app', ['title' => 'Gestion des Séries', 'entete' => 'Séries'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Séries',
        'infos' => 'Gérez les différentes séries de votre établissement',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Séries Actives -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Séries Actives</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $series->count() }}</h3>
                    </div>
                    <div class="bg-green-100 dark:bg-green-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Séries disponibles</p>
                </div>
            </div>

            <!-- Carte 2 - Classes -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Classes</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">32</h3>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Avec séries</p>
                </div>
            </div>

            <!-- Carte 3 - Élèves -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Élèves</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">856</h3>
                    </div>
                    <div class="bg-purple-100 dark:bg-purple-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-green-500 dark:text-green-400">Dans les séries</p>
                </div>
            </div>

            <!-- Carte 4 - Moyenne par série -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Moyenne/Série</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">214</h3>
                    </div>
                    <div class="bg-orange-100 dark:bg-orange-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Élèves par série</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Séries</h5>
                <button onclick="openModalForm('serieFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter une série
                </button>
            </div>

            <form action="{{ route('serie.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-3">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom de la série...">
                </div>
                <div class="flex items-end">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Rechercher
                    </button>
                </div>
            </form>
        </div>

        {{-- Table des séries --}}
        <x-table.datatable title="La liste des séries" :columns="['N°', 'Nom de la série', 'Description', 'Créé par', 'Modifié par', 'Actions']" tableId="SeriesTable">
            @php $count = 0 @endphp
            @forelse ($series as $serie)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ ++$count }}</x-table.td>
                    <x-table.td>
                        <div class="font-medium text-gray-900 dark:text-gray-100">{{ $serie->name }}</div>
                    </x-table.td>
                    <x-table.td>
                        @if ($serie->description)
                            <div class="text-sm text-gray-600 dark:text-gray-400 max-w-md truncate">
                                {{ Str::limit($serie->description, 50) }}
                            </div>
                        @else
                            <span class="text-gray-400 text-sm italic">Aucune description</span>
                        @endif
                    </x-table.td>
                    <x-table.td>{{ $serie->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $serie->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$serie" modal="serieFormModal" :fields="['name', 'description']"
                                :route="route('serie.update', $serie->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$serie" modal="serieDetailsModal" :fields="[
                                'name',
                                'description',
                                'userCreated_name' => $serie->userCreated->name ?? 'N/A',
                                'userUpdated_name' => $serie->userUpdated->name ?? 'N/A',
                            ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="serie.destroy" :param="$serie->id" modalId="deleteSerie" />
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="4" class="text-center py-8">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-8 h-8 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <p class="text-lg font-medium">Aucune série trouvée</p>
                            <p class="text-sm mt-1">Commencez par ajouter votre première série</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="serieDetailsModal" width="50vw" title="Détails de la série" :editModalId="'serieFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Informations principales" cols="1">
                    <x-ui.dynamique-detail-field-modal label="Nom de la série" field="name" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Description" cols="1">
                    <div class="col-span-1">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Description
                        </label>
                        <div class="text-sm text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                            <span id="detail-description"></span>
                        </div>
                    </div>
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de gestion" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Créé par" field="userCreated_name" />
                    <x-ui.dynamique-detail-field-modal label="Modifié par" field="userUpdated_name" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification de série --}}
    <x-form.form-modal id="serieFormModal" width="70vw" title="Ajouter une série" confirmText="Enregistrer"
        :action="route('serie.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset colsMd="1" legend="Informations générales">
            <x-form.input name="name" label="Nom de la série" placeholder="Ex: Série A, Série S, Série L, Série D..."
                :value="old('name')" required />
        </x-form.fieldset>

        {{-- Description --}}
        <x-form.fieldset colsMd="1" legend="Description">
            <x-form.textarea name="description" label="Description" placeholder="Décrivez cette série..." :value="old('description')"
                rows="4" />
        </x-form.fieldset>

    </x-form.form-modal>
@endsection