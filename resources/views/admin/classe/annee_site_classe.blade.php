@extends('app', ['title' => 'Gestion des Classes par Site et Année Scolaire', 'entete' => 'Classes Année Scolaire'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Classes par Année Scolaire et Site',
        'infos' => 'Gérez les affectations des classes par année scolaire et site',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Affectations Actives -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Nombre de classes Site</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $affectations->count() }}</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Classes affectées</p>
                </div>
            </div>

            <!-- Carte 2 - Classes -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Classes</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $classesDisponibles->count() }}</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Disponibles</p>
                </div>
            </div>

            <!-- Carte 3 - Années Scolaires -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Années Scolaires</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">2</h3>
                    </div>
                    <div class="bg-purple-100 dark:bg-purple-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Sites actifs</p>
                </div>
            </div>

            <!-- Carte 4 - Groupes -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Groupes</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $groupes->count() }}</h3>
                    </div>
                    <div class="bg-orange-100 dark:bg-orange-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">Disponibles</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Affectations</h5>
                <button onclick="openModalForm('affectationFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Affecter une classe
                </button>
            </div>

            <form action="{{ route('affectation-site-classe.index') }}" method="GET"
                class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Année Scolaire /
                        Site</label>
                    <select name="annee_scolaire_site_id"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Toutes les années/sites</option>
                        <option value="2022-2023">2022-2023</option>
                        <option value="2023-2024">2023-2024</option>
                        <option value="2024-2025">2024-2025</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Classe</label>
                    <select name="classe_id"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Toutes les classes</option>
                        @foreach ($classesDisponibles as $classesDisponible)
                            <option value="{{ $classesDisponible->id }}" {{ request('classe_id') == $classesDisponible->id ? 'selected' : '' }}>
                                {{ $classesDisponible->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Groupe</label>
                    <select name="groupe_id"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les groupes</option>
                        @foreach ($groupes as $groupe)
                            <option value="{{ $groupe->id }}" {{ request('groupe_id') == $groupe->id ? 'selected' : '' }}>
                                {{ $groupe->name }}
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

        {{-- Table des affectations --}}
        <x-table.datatable title="La liste des affectations de classes" :columns="['N°', 'Année Scolaire', 'Site', 'Classe', 'Niveau', 'Groupe', 'Créé par', 'Modifié par', 'Actions']" tableId="AffectationsTable">
            @php $count = 0 @endphp
            @forelse ($affectations as $affectation)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ ++$count }}</x-table.td>
                    <x-table.td>
                        @if ($affectation->anneeScolaireSite && $affectation->anneeScolaireSite->anneeScolaire)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                {{ $affectation->anneeScolaireSite->anneeScolaire->libelle }}
                            </span>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @if ($affectation->anneeScolaireSite && $affectation->anneeScolaireSite->site)
                            <div class="font-medium text-gray-900 dark:text-gray-100">
                                {{ $affectation->anneeScolaireSite->site->name }}
                            </div>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @if ($affectation->classe)
                            <div class="font-semibold text-gray-900 dark:text-gray-100">
                                {{ $affectation->classe->name }}
                            </div>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @if ($affectation->classe && $affectation->classe->niveau)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                {{ $affectation->classe->niveau->name }}
                            </span>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @if ($affectation->groupe)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                {{ $affectation->groupe->name }}
                            </span>
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </x-table.td>
                    <x-table.td>{{ $affectation->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $affectation->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$affectation" modal="affectationFormModal" :fields="['annee_scolaire_site_id', 'classe_id', 'groupe_id']"
                                :route="route('affectation-site-classe.update', $affectation->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$affectation" modal="affectationDetailsModal"
                                :fields="[
                                    'annee_scolaire_libelle' =>
                                        $affectation->anneeScolaireSite->anneeScolaire->libelle ?? 'N/A',
                                    'site_name' => $affectation->anneeScolaireSite->site->name ?? 'N/A',
                                    'classe_name' => $affectation->classe->name ?? 'N/A',
                                    'niveau_name' => $affectation->classe->niveau->name ?? 'N/A',
                                    'serie_name' => $affectation->classe->serie->name ?? 'N/A',
                                    'groupe_name' => $affectation->groupe->name ?? 'N/A',
                                    'userCreated_name' => $affectation->userCreated->name ?? 'N/A',
                                    'userUpdated_name' => $affectation->userUpdated->name ?? 'N/A',
                                ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="affectation-site-classe.destroy" :param="$affectation->id"
                                modalId="deleteAffectation" />
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="9" class="text-center py-8">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-8 h-8 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <p class="text-lg font-medium">Aucune affectation trouvée</p>
                            <p class="text-sm mt-1">Commencez par affecter une classe à une année scolaire</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="affectationDetailsModal" width="60vw" title="Détails de l'affectation"
            :editModalId="'affectationFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Année Scolaire et Site" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Année Scolaire" field="annee_scolaire_libelle" />
                    <x-ui.dynamique-detail-field-modal label="Site" field="site_name" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de la Classe" cols="3">
                    <x-ui.dynamique-detail-field-modal label="Classe" field="classe_name" />
                    <x-ui.dynamique-detail-field-modal label="Niveau" field="niveau_name" />
                    <x-ui.dynamique-detail-field-modal label="Série" field="serie_name" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Groupe" cols="1">
                    <x-ui.dynamique-detail-field-modal label="Groupe assigné" field="groupe_name" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Informations de gestion" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Créé par" field="userCreated_name" />
                    <x-ui.dynamique-detail-field-modal label="Modifié par" field="userUpdated_name" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification d'affectation --}}
    <x-form.form-modal id="affectationFormModal" width="70vw" title="Affecter des classes" confirmText="Enregistrer"
        :action="route('affectation-site-classe.store')" method="POST">

        {{-- Information sur l'année scolaire et le site actifs --}}
        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4 mb-6">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mt-0.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h4 class="text-sm font-semibold text-blue-900 dark:text-blue-100 mb-1">
                        Contexte d'affectation
                    </h4>
                    <p class="text-sm text-blue-700 dark:text-blue-300">
                        <span class="font-medium">Année Scolaire :</span>
                        {{ anneeScolaireEnCoursLibelle() ?? 'Non définie' }}
                        <span class="mx-2">•</span>
                        <span class="font-medium">Site :</span> {{ siteSessionLibelle() ?? 'Non défini' }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Groupe --}}
        <x-form.fieldset colsMd="1" legend="Groupe">
            <x-form.select name="groupe_id" label="Sélectionner un groupe" :options="$groupes->pluck('name', 'id')" :value="old('groupe_id')"
                required />
        </x-form.fieldset>

        {{-- Sélection multiple des classes --}}
        <x-form.fieldset colsMd="1" legend="Classes à affecter">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                    Sélectionner les classes <span class="text-red-500">*</span>
                </label>

                <div
                    class="border border-gray-300 dark:border-gray-600 rounded-lg p-4 max-h-80 overflow-y-auto bg-white dark:bg-gray-700">
                    @if ($classesDisponibles->isEmpty())
                        <p class="text-sm text-gray-500 dark:text-gray-400 italic">
                            Aucune classe disponible pour cette année scolaire et ce site
                        </p>
                    @else
                        <div class="space-y-3">
                            {{-- Option pour tout sélectionner --}}
                            <div class="pb-3 border-b border-gray-200 dark:border-gray-600">
                                <label
                                    class="flex items-center cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-600 p-2 rounded transition">
                                    <input type="checkbox" id="select-all-classes"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <span class="ml-3 text-sm font-semibold text-gray-900 dark:text-gray-100">
                                        Tout sélectionner
                                    </span>
                                </label>
                            </div>

                            {{-- Liste des classes par niveau --}}
                            @foreach ($classesDisponibles->groupBy('niveau.name') as $niveauName => $classesByNiveau)
                                <div class="mb-4">
                                    <h5
                                        class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">
                                        {{ $niveauName ?? 'Sans niveau' }}
                                    </h5>
                                    <div class="space-y-2 ml-2">
                                        @foreach ($classesByNiveau as $classe)
                                            <label
                                                class="flex items-center cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-600 p-2 rounded transition">
                                                <input type="checkbox" name="classe_ids[]" value="{{ $classe->id }}"
                                                    class="classe-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ in_array($classe->id, old('classe_ids', [])) ? 'checked' : '' }}>
                                                <span class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                                    <span class="font-medium">{{ $classe->name }}</span>
                                                </span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                    Sélectionnez une ou plusieurs classes à affecter au groupe
                </p>
            </div>
        </x-form.fieldset>

    </x-form.form-modal>

    <script>
        // Gestion de la sélection/désélection de toutes les classes
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllCheckbox = document.getElementById('select-all-classes');
            const classeCheckboxes = document.querySelectorAll('.classe-checkbox');

            if (selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function() {
                    classeCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                });

                // Mettre à jour l'état du "Tout sélectionner" si toutes les cases sont cochées/décochées
                classeCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const allChecked = Array.from(classeCheckboxes).every(cb => cb.checked);
                        const noneChecked = Array.from(classeCheckboxes).every(cb => !cb.checked);

                        if (allChecked) {
                            selectAllCheckbox.checked = true;
                            selectAllCheckbox.indeterminate = false;
                        } else if (noneChecked) {
                            selectAllCheckbox.checked = false;
                            selectAllCheckbox.indeterminate = false;
                        } else {
                            selectAllCheckbox.checked = false;
                            selectAllCheckbox.indeterminate = true;
                        }
                    });
                });
            }
        });
    </script>
@endsection
