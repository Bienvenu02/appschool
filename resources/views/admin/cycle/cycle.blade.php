@extends('app', ['title' => 'Gestion des Cycles', 'entete' => 'Cycles'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Cycles Scolaires',
        'infos' => 'Gérez les différents cycles de votre établissement',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Cycles Actifs -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Cycles Actifs</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $cycles->count() }}</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Cycles disponibles</p>
                </div>
            </div>

            <!-- Carte 2 - Niveaux -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Niveaux</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">12</h3>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Répartis dans les cycles</p>
                </div>
            </div>

            <!-- Carte 3 - Élèves -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Élèves</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">2,456</h3>
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
                    <p class="text-xs text-green-500 dark:text-green-400">Tous cycles confondus</p>
                </div>
            </div>

            <!-- Carte 4 - Enseignants -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Enseignants</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">87</h3>
                    </div>
                    <div class="bg-orange-100 dark:bg-orange-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Personnel enseignant</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Cycles Scolaires</h5>
                <button onclick="openModalForm('cycleFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un cycle
                </button>
            </div>

            <form action="{{ route('cycle.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom du cycle...">
                </div>
                <div class="flex items-end">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Filtrer
                    </button>
                </div>
            </form>
        </div>

        {{-- Table des cycles --}}
        <x-table.datatable title="La liste des cycles scolaires" :columns="['N°', 'Nom du cycle', 'Description', 'Créé par', 'Modifié par', 'Actions']"
            tableId="CyclesTable">
            @forelse ($cycles as $index => $cycle)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ '#' . ($index + 1) }}</x-table.td>
                    <x-table.td>
                        <div class="font-medium text-gray-900 dark:text-gray-100">{{ $cycle->name }}</div>
                    </x-table.td>
                    <x-table.td>{{ Str::limit($cycle->description, 50) ?? 'Aucune description' }}</x-table.td>
                    <x-table.td>{{ $cycle->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $cycle->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$cycle" modal="cycleFormModal" :fields="['name', 'description']"
                                :route="route('cycle.update', $cycle->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$cycle" modal="cycleDetailsModal" :fields="[
                                'name',
                                'description',
                                'userCreated_name' => $cycle->userCreated->name ?? 'N/A',
                                'userUpdated_name' => $cycle->userUpdated->name ?? 'N/A',
                            ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="cycle.destroy" :param="$cycle->id" modalId="deleteCycle" />
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="6" class="text-center py-8">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                            <p class="text-lg font-medium">Aucun cycle trouvé</p>
                            <p class="text-sm mt-1">Commencez par ajouter votre premier cycle scolaire</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="cycleDetailsModal" width="50vw" title="Détails du cycle" :editModalId="'cycleFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Informations principales" cols="1">
                    <x-ui.dynamique-detail-field-modal label="Nom du cycle" field="name" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Description" cols="1">
                    <x-ui.dynamique-detail-field-modal label="Description" field="description" type="long-text" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de gestion" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Créé par" field="userCreated_name" />
                    <x-ui.dynamique-detail-field-modal label="Modifié par" field="userUpdated_name" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification de cycle --}}
    <x-form.form-modal id="cycleFormModal" width="70vw" title="Ajouter un cycle scolaire" confirmText="Enregistrer"
        :action="route('cycle.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset colsMd="1" legend="Informations générales">
            <x-form.input name="name" label="Nom du cycle" placeholder="Ex: Maternelle, Primaire, Collège, Lycée..."
                :value="old('name')" required />
        </x-form.fieldset>

        {{-- Description du cycle --}}
        <x-form.fieldset colsMd="1" legend="Description">
            <x-form.textarea name="description" label="Description du cycle" :value="old('description')" rows="4"
                placeholder="Décrivez brièvement ce cycle (âges concernés, particularités, etc.)" />
        </x-form.fieldset>

    </x-form.form-modal>
@endsection