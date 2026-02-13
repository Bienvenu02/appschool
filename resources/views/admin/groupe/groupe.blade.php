@extends('app', ['title' => 'Gestion des Groupes Scolaires', 'entete' => 'Groupes Scolaires'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Groupes Scolaires',
        'infos' => 'Gérez les différents groupes scolaires de votre établissement',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Groupes Actifs -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Groupes Actifs</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $groupes->count() }}</h3>
                    </div>
                    <div class="bg-green-100 dark:bg-green-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">+2 ce trimestre</p>
                </div>
            </div>

            <!-- Carte 2 - Total Étudiants -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Étudiants</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">1,247</h3>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Répartis dans les groupes</p>
                </div>
            </div>

            <!-- Carte 3 - Moyenne par groupe -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Moyenne/Groupe</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">42</h3>
                    </div>
                    <div class="bg-purple-100 dark:bg-purple-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-green-500 dark:text-green-400">Effectif optimal</p>
                </div>
            </div>

            <!-- Carte 4 - Enseignants assignés -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Enseignants</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">38</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Encadrants actifs</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Groupes Scolaires</h5>
                <button onclick="openModalForm('groupeFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un groupe
                </button>
            </div>

            <form action="{{ route('groupe.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom du groupe, niveau...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Niveau</label>
                    <select name="niveau"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les niveaux</option>
                        <option value="1ere" {{ request('niveau') == '1ere' ? 'selected' : '' }}>1ère année</option>
                        <option value="2eme" {{ request('niveau') == '2eme' ? 'selected' : '' }}>2ème année</option>
                        <option value="3eme" {{ request('niveau') == '3eme' ? 'selected' : '' }}>3ème année</option>
                        <option value="4eme" {{ request('niveau') == '4eme' ? 'selected' : '' }}>4ème année</option>
                    </select>
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

        {{-- Table des groupes --}}
        <x-table.datatable title="La liste des groupes scolaires" :columns="['N°', 'Nom du groupe', 'Description', 'Créé par', 'Modifié par', 'Actions']" tableId="GroupesTable">
            @forelse ($groupes as $index => $groupe)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ '#' . $index + 1 }}</x-table.td>
                    <x-table.td> {{ $groupe->name }} </x-table.td>
                    <x-table.td>{{ $groupe->description ?? 'Aucune description' }}</x-table.td>

                    <x-table.td>{{ $groupe->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td> {{ $groupe->userUpdated->name ?? 'N/A' }} </x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$groupe" modal="groupeFormModal" :fields="['name', 'description']"
                                :route="route('groupe.update', $groupe->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$groupe" modal="groupeDetailsModal" :fields="[
                                'name',
                                'description',
                                'userCreated_name' => $groupe->userCreated->name ?? 'N/A',
                                'userUpdated_name' => $groupe->userUpdated->name ?? 'N/A',
                            ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="groupe.destroy" :param="$groupe->id" modalId="deleteGroupe" />
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
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p class="text-lg font-medium">Aucun groupe trouvé</p>
                            <p class="text-sm mt-1">Commencez par ajouter votre premier groupe scolaire</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="groupeDetailsModal" width="50vw" title="Détails du groupe" :editModalId="'groupeFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Informations principales" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Nom" field="name" />
                    <x-ui.dynamique-detail-field-modal label="Description" field="description" type="long-text" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de gestion" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Créé par" field="userCreated_name" />
                    <x-ui.dynamique-detail-field-modal label="Modifié par" field="userUpdated_name" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification de groupe --}}
    <x-form.form-modal id="groupeFormModal" width="70vw" title="Ajouter un groupe scolaire" confirmText="Enregistrer"
        :action="route('groupe.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset colsMd="1" legend="Informations générales">
            <x-form.input name="name" label="Nom du groupe" :value="old('name')" required />
        </x-form.fieldset>

        {{-- Description du groupe --}}
        <x-form.fieldset colsMd="1" legend="Description">
            <x-form.textarea name="description" label="Description du groupe" :value="old('description')" rows="4" />
        </x-form.fieldset>

    </x-form.form-modal>
@endsection
