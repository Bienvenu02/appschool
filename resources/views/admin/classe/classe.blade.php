@extends('app', ['title' => 'Gestion des Classes', 'entete' => 'Classes'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Classes',
        'infos' => 'Gérez les différentes classes de votre établissement',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Classes Actives -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Classes Actives</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $classes->count() }}</h3>
                    </div>
                    <div class="bg-green-100 dark:bg-green-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Classes disponibles</p>
                </div>
            </div>

            <!-- Carte 2 - Niveaux -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Niveaux</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $niveaux->count() }}</h3>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Niveaux couverts</p>
                </div>
            </div>

            <!-- Carte 3 - Élèves -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Élèves</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">1,842</h3>
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
                    <p class="text-xs text-green-500 dark:text-green-400">Toutes classes confondues</p>
                </div>
            </div>

            <!-- Carte 4 - Moyenne par classe -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Moyenne/Classe</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">38</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Élèves par classe</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Classes</h5>
                <button onclick="openModalForm('classeFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter une classe
                </button>
            </div>

            <form action="{{ route('classe.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom de la classe...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Niveau</label>
                    <select name="niveau_id"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les niveaux</option>
                        @foreach ($niveaux as $niveau)
                            <option value="{{ $niveau->id }}" {{ request('niveau_id') == $niveau->id ? 'selected' : '' }}>
                                {{ $niveau->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Série</label>
                    <select name="serie_id"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Toutes les séries</option>
                        @foreach ($series as $serie)
                            <option value="{{ $serie->id }}" {{ request('serie_id') == $serie->id ? 'selected' : '' }}>
                                {{ $serie->nom }}
                            </option>
                        @endforeach
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

        {{-- Table des classes --}}
        <x-table.datatable title="La liste des classes" :columns="['N°', 'Nom de la classe', 'Niveau', 'Série', 'Créé par', 'Modifié par', 'Actions']" tableId="ClassesTable">
            @php $count = 0 @endphp
            @forelse ($classes as $classe)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ ++$count }}</x-table.td>
                    <x-table.td>
                        <div class="font-medium text-gray-900 dark:text-gray-100">{{ $classe->name }}</div>
                    </x-table.td>
                    <x-table.td>
                        @if ($classe->niveau)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                {{ $classe->niveau->name }}
                            </span>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @if ($classe->serie)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                {{ $classe->serie->name }}
                            </span>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>{{ $classe->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $classe->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$classe" modal="classeFormModal" :fields="['name', 'niveau_id', 'serie_id']"
                                :route="route('classe.update', $classe->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$classe" modal="classeDetailsModal" :fields="[
                                'name',
                                'niveau_name' => $classe->niveau->name ?? 'N/A',
                                'serie_nom' => $classe->serie->name ?? 'N/A',
                                'cycle_nom' => $classe->niveau->cycle->nom ?? 'N/A',
                                'userCreated_id' => $classe->userCreated->name ?? 'N/A',
                                'userUpdated_id' => $classe->userUpdated->name ?? 'N/A',
                            ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="classe.destroy" :param="$classe->id" modalId="deleteClasse" />
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="7" class="text-center py-8">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-8 h-8 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <p class="text-lg font-medium">Aucune classe trouvée</p>
                            <p class="text-sm mt-1">Commencez par ajouter votre première classe</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="classeDetailsModal" width="50vw" title="Détails de la classe" :editModalId="'classeFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Informations principales" cols="3">
                    <x-ui.dynamique-detail-field-modal label="Nom de la classe" field="name" />
                    <x-ui.dynamique-detail-field-modal label="Niveau" field="niveau_name" />
                    <x-ui.dynamique-detail-field-modal label="Série" field="serie_nom" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations complémentaires" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Cycle" field="cycle_nom" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de gestion" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Créé par" field="userCreated_id" />
                    <x-ui.dynamique-detail-field-modal label="Modifié par" field="userUpdated_id" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification de classe --}}
    <x-form.form-modal id="classeFormModal" width="70vw" title="Ajouter une classe" confirmText="Enregistrer"
        :action="route('classe.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset colsMd="2" legend="Informations générales">
            <x-form.input name="name" label="Nom de la classe" placeholder="Ex: 6ème A, CE2 B, Terminal S1..."
                :value="old('name')" required />

            <x-form.select name="niveau_id" label="Niveau" :options="$niveaux->pluck('name', 'id')" :value="old('niveau_id')" required />
        </x-form.fieldset>

        {{-- Série --}}
        <x-form.fieldset colsMd="1" legend="Série (optionnel)">
            <x-form.select name="serie_id" label="Série" :options="$series->pluck('name', 'id')" :value="old('serie_id')" />
        </x-form.fieldset>

    </x-form.form-modal>
@endsection