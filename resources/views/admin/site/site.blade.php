@extends('app', ['title' => 'Gestion des Sites', 'entete' => 'Sites'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Sites',
        'infos' => 'Gérez les différents sites de votre établissement',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-6">
            <!-- Carte 1 - Sites Actifs -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Sites Actifs</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $sites->count() }}</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">+1 ce trimestre</p>
                </div>
            </div>

            <!-- Carte 2 - Bâtiments -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Bâtiments</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">24</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">3 nouveaux cette année</p>
                </div>
            </div>

            <!-- Carte 3 - Salles de classe -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Salles de classe</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">156</h3>
                    </div>
                    <div class="bg-purple-100 dark:bg-purple-900/50 rounded-lg p-3">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-green-500 dark:text-green-400">92% occupées</p>
                </div>
            </div>

            <!-- Carte 4 - Capacité totale -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Capacité totale</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">3,500</h3>
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
                    <p class="text-xs text-gray-400 dark:text-gray-500">Étudiants maximum</p>
                </div>
            </div>
        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Sites</h5>
                <button onclick="openModalForm('siteFormModal')"
                    class="bg-blue-600 hover:bg-blue-700
                    dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2
                    transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un site
                </button>
            </div>

            <form action="{{ route('site.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom du site, ville, adresse...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Statut</label>
                    <select name="status"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les statuts</option>
                        <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Actif</option>
                        <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inactif</option>
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

        {{-- Table des sites --}}
        <x-table.datatable title="La liste des sites" :columns="['N°', 'Nom', 'Responsable', 'Téléphone', 'Email', 'Créé par', 'Modifié par', 'Statut', 'Actions']" tableId="SitesTable">
            @forelse ($sites as $index => $site)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ '#'.$index + 1 }}</x-table.td>
                    <x-table.td>
                        <div class="font-medium text-gray-900 dark:text-gray-100">{{ $site->name }}</div>
                        @if ($site->localisation)
                            <div class="text-xs text-gray-500 dark:text-gray-400">{{ $site->localisation }}</div>
                        @endif
                    </x-table.td>
                    <x-table.td>{{ $site->responsable ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $site->telephone ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $site->email ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $site->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $site->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        @if ($site->active)
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                Actif
                            </span>
                        @else
                            <span
                                class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                Inactif
                            </span>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$site" modal="siteFormModal" :fields="['name', 'telephone', 'email', 'localisation', 'responsable', 'description', 'active']"
                                :route="route('site.update', $site->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$site" modal="siteDetailsModal" :fields="['name', 'telephone', 'email', 'localisation', 'responsable', 'description', 'active']" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="site.destroy" :param="$site->id" modalId="deleteSite" />
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="9" class="text-center py-8">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            <p class="text-lg font-medium">Aucun site trouvé</p>
                            <p class="text-sm mt-1">Commencez par ajouter votre premier site</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.datatable>

        {{-- Modal de détails --}}
        <x-ui.detail-modal id="siteDetailsModal" width="50vw" title="Détails du site" :editModalId="'siteFormModal'">
            <div class="space-y-6">
                <x-ui.detail-section-modal title="Informations principales" cols="3">
                    <x-ui.dynamique-detail-field-modal label="Nom" field="name" />
                    <x-ui.dynamique-detail-field-modal label="Téléphone" field="telephone" />
                    <x-ui.dynamique-detail-field-modal label="Email" field="email" class="break-all" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Contact" cols="2">
                    <x-ui.dynamique-detail-field-modal label="Responsable" field="responsable" />
                    <x-ui.dynamique-detail-field-modal label="Localisation" field="localisation" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Description" cols="1">
                    <x-ui.dynamique-detail-field-modal label="Description" field="description" type="long-text" />
                </x-ui.detail-section-modal>

                <x-ui.detail-section-modal title="Statut" cols="1">
                    <x-ui.dynamique-detail-field-modal label="État" field="active" type="badge" :badgeMap="[
                        '1' => '<span class=\'px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200\'>Active</span>',
                        '0' => '<span class=\'px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200\'>Inactive</span>',
                    ]" />
                </x-ui.detail-section-modal>
            </div>
        </x-ui.detail-modal>
    </div>

    {{-- Modal d'ajout et de modification de site --}}
    <x-form.form-modal id="siteFormModal" width="70vw" title="Ajouter un site" confirmText="Enregistrer"
        :action="route('site.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset colsMd="2" legend="Informations générales et localisation">
            <x-form.input name="name" label="Nom du site" :value="old('name')" required />
            <x-form.input name="telephone" label="Téléphone" :value="old('telephone')" />
            <x-form.input name="email" label="Email" type="email" :value="old('email')" />
            <x-form.input name="localisation" label="Localisation" :value="old('localisation')" />
        </x-form.fieldset>

        {{-- Responsable et Description --}}
        <x-form.fieldset colsMd="1" legend="Responsable et Description">
            <x-form.input type="text" name="responsable" label="Responsable" :value="old('responsable')" />
            <x-form.textarea name="description" label="Description" :value="old('description')" rows="4" />
        </x-form.fieldset>

        {{-- Statut --}}
        <x-form.fieldset legend="Statut">
            <x-form.checkbox label="Site actif" name="active" />
        </x-form.fieldset>
    </x-form.form-modal>
@endsection
