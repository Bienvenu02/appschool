@extends('app', ['title' => 'Gestion des Utilisateurs', 'entete' => 'Utilisateurs'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion des Utilisateurs',
        'infos' => 'Gérez les comptes utilisateurs de votre système scolaire',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- Statistiques --}}
        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-4 mb-6
            auto-rows-fr">
            <!-- Carte 1 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200 
                min-w-0 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div class="min-w-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Utilisateurs Systeme</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">156</h3>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/50 rounded-lg p-3 flex-shrink-0 ml-4">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">+12% ce mois</p>
                </div>
            </div>

            <!-- Carte 2 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200 
                min-w-0 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div class="min-w-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Administrateurs</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">8</h3>
                    </div>
                    <div class="bg-red-100 dark:bg-red-900/50 rounded-lg p-3 flex-shrink-0 ml-4">
                        <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200 
                min-w-0 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div class="min-w-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Enseignants</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">42</h3>
                    </div>
                    <div class="bg-green-100 dark:bg-green-900/50 rounded-lg p-3 flex-shrink-0 ml-4">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500">+5% ce mois</p>
                </div>
            </div>

            <!-- Carte 4 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 hover:-translate-y-1 transition-transform duration-200 
                min-w-0 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div class="min-w-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Professeurs</p>
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">143</h3>
                    </div>
                    <div class="bg-cyan-100 dark:bg-cyan-900/50 rounded-lg p-3 flex-shrink-0 ml-4">
                        <svg class="w-8 h-8 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs text-green-500 dark:text-green-400">92% d'activité</p>
                </div>
            </div>

        </div>

        {{-- Filtres et recherche --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-3">
                <h5 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Liste des Utilisateurs</h5>
                <button onclick="openModalForm('userFormModal')"
                    class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un utilisateur
                </button>
            </div>

            <form action="#" method="GET" class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rechercher</label>
                    <input type="text" name="search"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nom, email..." value="{{ request('search') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rôle</label>
                    <select name="role"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les rôles</option>
                        <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Administrateur</option>
                        <option value="teacher" {{ request('role') == 'teacher' ? 'selected' : '' }}>Enseignant</option>
                        <option value="student" {{ request('role') == 'student' ? 'selected' : '' }}>Étudiant</option>
                        <option value="parent" {{ request('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Statut</label>
                    <select name="status"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les statuts</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactif</option>
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

        {{-- Table des utilisateurs --}}
        <x-table.datatable title="Liste des utilisateurs" :columns="[
            'N°',
            'Utilisateur',
            'Role',
            'Statut',
            'Dernière Modification',
            'Dernière Connexion',
            'Créé par',
            'Modifié par',
            'Actions',
        ]" tableId="UsersTable">
            @forelse ($users as $index => $user)
                <x-table.tr>
                    <x-table.td style="text-align: left">{{ '#' . $index + 1 }}</x-table.td>
                    <x-table.td>
                        <div class="font-medium text-gray-900 dark:text-gray-100">{{ $user->name }}</div>
                        @if ($user->email)
                            <div class="text-xs text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
                        @endif
                    </x-table.td>
                    <x-table.td>
                        @forelse ($user->roles as $role_user)
                            <span class="px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ $role_user->role->name }}
                            </span>
                        @empty
                            <span class="text-gray-400">N/A</span>
                        @endforelse
                    </x-table.td>
                    <x-table.td>
                        @if ($user->active)
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
                    <x-table.td>{{ $user->updatedAtForHumans() }}</x-table.td>
                    <x-table.td>{{ $user->lastConnection->created_at ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $user->userCreated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>{{ $user->userUpdated->name ?? 'N/A' }}</x-table.td>
                    <x-table.td>
                        <div class="flex items-center gap-2">
                            {{-- Bouton Modifier --}}
                            <x-form.button.edit :model="$user" modal="siteFormModal" :fields="[
                                'nom',
                                'telephone',
                                'email',
                                'localisation',
                                'responsable',
                                'description',
                                'active',
                            ]"
                                :route="route('site.update', $user->id)" />

                            {{-- Bouton Voir détails --}}
                            <x-ui.button.detail-modal :model="$user" modal="siteDetailsModal" :fields="[
                                'nom',
                                'telephone',
                                'email',
                                'localisation',
                                'responsable',
                                'description',
                                'active',
                            ]" />

                            {{-- Bouton Supprimer --}}
                            <x-ui.button.delete-modal route="site.destroy" :param="$user->id" modalId="deleteUser" />
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
    </div>

    {{-- Modal d'ajout et de modification de site --}}
    <x-form.form-modal id="userFormModal" width="70vw" title="Ajouter un utilisateur" confirmText="Enregistrer"
        :action="route('utilisateur.store')" method="POST">

        {{-- Informations générales --}}
        <x-form.fieldset legend="Informations personnelles">
            <x-form.input name="name" label="Nom complet" :value="old('name')" required placeholder="Nom complet" />
            <x-form.input type="email" name="email" label="Email" :value="old('email')" placeholder="Adresse email" />
            <x-form.input type="integer" name="telephone" label="Telephone" :value="old('telephone')" placeholder="Tel" />
        </x-form.fieldset>

        {{-- Accès & statut --}}
        <x-form.fieldset colsMd="2" legend="Accès & statut">
            {{-- <x-form.select label="Rôle" name="roles[]" :options="$roles" :value="old('role', $user->role ?? '')" multiple /> --}}
            <x-form.select label="Statut" name="status" :options="['active' => 'Actif', 'inactive' => 'Inactif']" :value="old('status', $user->status ?? '')" />
            <x-form.input type="integer" name="telephone" label="Telephone" placeholder="Tel" />
        </x-form.fieldset>

        {{-- Statut et documents --}}
        <x-form.fieldset legend="Statut et documents">
            <x-form.input type="file" name="cv" label="Cv" />
            <x-form.input type="file" name="photo" label="Photo" />
            <x-form.checkbox label="Actif" name="active" />
        </x-form.fieldset>

        <div class="mt-4">
            <label>Type de personnel :</label>

            <!-- Option 1 : Boutons radio -->
            <div class="flex gap-4">
                <div>
                    <input type="radio" id="personnel" name="type_personnel" value="personnel">
                    <label for="personnel">Personnel</label>
                </div>

                <div>
                    <input type="radio" id="enseignant" name="type_personnel" value="enseignant">
                    <label for="enseignant">Enseignant</label>
                </div>
            </div>
        </div>

    </x-form.form-modal>
@endsection
