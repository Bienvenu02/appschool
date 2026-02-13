@extends('app', ['title' => 'Gestion École', 'entete' => 'Gestion École'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Gestion Générale de l\'École',
        'infos' => 'Administrez tous les aspects de votre établissement scolaire',
    ])

    <div class="container mx-auto px-4 py-6">

        {{-- KPI Principaux --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

            <!-- Sites -->
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-sm mb-1">Nombre de sites</p>
                        <h3 class="text-3xl font-bold">3</h3>
                        <p class="text-orange-200 text-xs mt-2">Sites</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-3">
                        <span class="text-2xl">🏫</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-orange-400/30">
                    <div class="flex justify-between text-sm">
                        <span class="text-orange-100">Sites actifs</span>
                        <span class="text-orange-200">2</span>
                    </div>
                </div>
            </div>

            <!-- Effectif Total -->
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm mb-1">Effectif Total</p>
                        <h3 class="text-3xl font-bold">1,850</h3>
                        <p class="text-blue-200 text-xs mt-2">Étudiants actifs</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-3">
                        <span class="text-2xl">👥</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-blue-400/30">
                    <div class="flex justify-between text-sm">
                        <span class="text-blue-100">+5.2%</span>
                        <span class="text-blue-200">vs. trimestre dernier</span>
                    </div>
                </div>
            </div>

            <!-- Personnel -->
            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm mb-1">Personnel</p>
                        <h3 class="text-3xl font-bold">142</h3>
                        <p class="text-purple-200 text-xs mt-2">Enseignants & Staff</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-3">
                        <span class="text-2xl">👨‍🏫</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-purple-400/30">
                    <div class="flex justify-between text-sm">
                        <span class="text-purple-100">92%</span>
                        <span class="text-purple-200">Taux de présence</span>
                    </div>
                </div>
            </div>

            <!-- Finance -->
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm mb-1">Recettes Mensuelles</p>
                        <h3 class="text-3xl font-bold">25.8M</h3>
                        <p class="text-green-200 text-xs mt-2">FCFA</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-3">
                        <span class="text-2xl">💰</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-green-400/30">
                    <div class="flex justify-between text-sm">
                        <span class="text-green-100">+12.3%</span>
                        <span class="text-green-200">Objectif atteint</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Actions Rapides --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Actions Rapides</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
                <a href=""
                    class="bg-blue-50 dark:bg-blue-900/30 hover:bg-blue-100 dark:hover:bg-blue-800/50 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">📝</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Nouvelle
                        Inscription</span>
                </a>

                <a href=""
                    class="bg-green-50 dark:bg-green-900/30 hover:bg-green-100 dark:hover:bg-green-800/50 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">💳</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Enregistrer
                        Paiement</span>
                </a>

                <a href=""
                    class="bg-purple-50 dark:bg-purple-900/30 hover:bg-purple-100 dark:hover:bg-purple-800/50 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">📚</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Créer Cours</span>
                </a>

                <a href=""
                    class="bg-yellow-50 dark:bg-yellow-900/30 hover:bg-yellow-100 dark:hover:bg-yellow-800/50 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">📢</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Annonce</span>
                </a>

                <a href=""
                    class="bg-red-50 dark:bg-red-900/30 hover:bg-red-100 dark:hover:bg-red-800/50 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">📊</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Générer Rapport</span>
                </a>

                <a href=""
                    class="bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 rounded-lg p-4 flex flex-col items-center justify-center transition group">
                    <span class="text-2xl mb-2">⚙️</span>
                    <span class="text-sm text-gray-700 dark:text-gray-300 text-center font-medium">Paramètres</span>
                </a>
            </div>
        </div>

        {{-- Vue d'ensemble --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Événements à venir -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 lg:col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Événements à Venir</h3>
                    <a href="" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">
                        Voir tout
                    </a>
                </div>

                <div class="space-y-4">
                    @foreach ([['date' => '15 Déc', 'title' => 'Examens finaux', 'type' => '📝', 'color' => 'red'], ['date' => '20 Déc', 'title' => 'Conseil de classe', 'type' => '👥', 'color' => 'blue'], ['date' => '22 Déc', 'title' => 'Cérémonie remise diplômes', 'type' => '🎓', 'color' => 'green'], ['date' => '05 Jan', 'title' => 'Rentrée scolaire', 'type' => '🏫', 'color' => 'purple'], ['date' => '10 Jan', 'title' => 'Réunion parents-professeurs', 'type' => '👨‍👩‍👧‍👦', 'color' => 'orange']] as $event)
                        <div
                            class="flex items-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-{{ $event['color'] }}-100 dark:bg-{{ $event['color'] }}-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">{{ $event['type'] }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-medium text-gray-800 dark:text-gray-100 truncate">{{ $event['title'] }}</p>
                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <span class="mr-3">📅 {{ $event['date'] }}</span>
                                    <span>⏰ 08:30</span>
                                </div>
                            </div>
                            <button class="ml-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                <span class="text-lg">⋯</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Statistiques par Cycle</h3>

                <div class="space-y-4">
                    @foreach ([['cycle' => 'Maternelle', 'effectif' => 180, 'classes' => 6, 'color' => 'pink'], ['cycle' => 'Primaire', 'effectif' => 450, 'classes' => 15, 'color' => 'blue'], ['cycle' => 'Collège', 'effectif' => 620, 'classes' => 20, 'color' => 'green'], ['cycle' => 'Lycée', 'effectif' => 600, 'classes' => 18, 'color' => 'purple']] as $cycle)
                        <div class="p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-medium text-gray-800 dark:text-gray-100">{{ $cycle['cycle'] }}</span>
                                <span
                                    class="text-sm px-2 py-1 bg-{{ $cycle['color'] }}-100 dark:bg-{{ $cycle['color'] }}-900/30 text-{{ $cycle['color'] }}-800 dark:text-{{ $cycle['color'] }}-300 rounded">
                                    {{ $cycle['classes'] }} classes
                                </span>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-1 mr-3">
                                    <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full bg-{{ $cycle['color'] }}-500 rounded-full"
                                            style="width: {{ ($cycle['effectif'] / 1850) * 100 }}%">
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="text-sm font-semibold text-gray-700 dark:text-gray-300">{{ $cycle['effectif'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Dernières activités --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Dernières Activités</h3>
                <div class="flex space-x-2">
                    <button
                        class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                        Aujourd'hui
                    </button>
                    <button
                        class="px-3 py-1 text-sm bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg hover:bg-blue-200 dark:hover:bg-blue-800/50 transition">
                        7 derniers jours
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-sm text-gray-500 dark:text-gray-400 border-b dark:border-gray-700">
                            <th class="pb-3 font-medium">Date/Heure</th>
                            <th class="pb-3 font-medium">Activité</th>
                            <th class="pb-3 font-medium">Utilisateur</th>
                            <th class="pb-3 font-medium">Détails</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ([['time' => '10:45', 'activity' => 'Paiement enregistré', 'user' => 'Marie DOSSOU', 'details' => 'Trimestre 2 - 150,000 FCFA', 'icon' => '💰'], ['time' => '09:30', 'activity' => 'Nouvelle inscription', 'user' => 'Koffi ADJOVI', 'details' => 'Classe de 6ème A', 'icon' => '📝'], ['time' => 'Hier 16:20', 'activity' => 'Note ajoutée', 'user' => 'Prof. AMOUSSOU', 'details' => 'Mathématiques - Contrôle #3', 'icon' => '📊'], ['time' => 'Hier 14:15', 'activity' => 'Absence signalée', 'user' => 'Surveillant', 'details' => 'Élève YAO - 3ème B', 'icon' => '⚠️'], ['time' => 'Hier 11:00', 'activity' => 'Annonce publiée', 'user' => 'Direction', 'details' => 'Réunion parents-professeurs', 'icon' => '📢']] as $activity)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                <td class="py-3">
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ $activity['time'] }}</div>
                                </td>
                                <td class="py-3">
                                    <div class="flex items-center">
                                        <span class="mr-2">{{ $activity['icon'] }}</span>
                                        <span
                                            class="font-medium text-gray-800 dark:text-gray-100">{{ $activity['activity'] }}</span>
                                    </div>
                                </td>
                                <td class="py-3">
                                    <div class="text-sm text-gray-700 dark:text-gray-300">{{ $activity['user'] }}</div>
                                </td>
                                <td class="py-3">
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ $activity['details'] }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Section infos école --}}
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Informations école -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl shadow-lg p-6 text-white">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Informations École</h3>
                    <div class="flex gap-2">
                        <button onclick="openModalFormSingle('ecoleDetailsModal')" data-tip="Voir détails"
                            class="bg-white/20 hover:bg-white/30 rounded-lg p-2 transition tooltip">
                            👁
                        </button>
                        <button onclick="openModalFormSingle('ecoleFormModal')" data-tip="Modifier"
                            class="bg-white/20 hover:bg-white/30 rounded-lg tooltip p-2 transition duration-200">
                            ✏️
                        </button>
                    </div>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="mr-3">🏫</span>
                        <div>
                            <p class="text-sm text-gray-300">Nom</p>
                            <p class="font-medium">{{ $ecole->name }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-3">📍</span>
                        <div>
                            <p class="text-sm text-gray-300">Adresse</p>
                            <p class="font-medium">{{ $ecole->ville . ', ' . $ecole->pays }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-3">📞</span>
                        <div>
                            <p class="text-sm text-gray-300">Téléphone</p>
                            <p class="font-medium">{{ $ecole->telephone }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-3">✉️</span>
                        <div>
                            <p class="text-sm text-gray-300">Email</p>
                            <p class="font-medium">{{ $ecole->email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Année scolaire -->
            <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl shadow-lg p-6 text-white">
                <h3 class="text-lg font-semibold mb-4">Année Scolaire 2024-2025</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-indigo-200 mb-1">Période</p>
                        <p class="text-xl font-bold">Sept 2024 - Juin 2025</p>
                    </div>
                    <div>
                        <p class="text-sm text-indigo-200 mb-1">Jours restants</p>
                        <p class="text-3xl font-bold">185</p>
                    </div>
                    <div class="pt-3 border-t border-indigo-400/30">
                        <div class="flex justify-between text-sm">
                            <span>Trimestre 1</span>
                            <span class="font-medium">✔ Terminé</span>
                        </div>
                        <div class="flex justify-between text-sm mt-1">
                            <span>Trimestre 2</span>
                            <span class="font-medium">⚙ En cours</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prochaines échéances -->
            <div class="bg-gradient-to-br from-rose-500 to-rose-600 rounded-xl shadow-lg p-6 text-white">
                <h3 class="text-lg font-semibold mb-4">Prochaines Échéances</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-white/10 rounded-lg">
                        <div>
                            <p class="font-medium">Paiements scolarité</p>
                            <p class="text-sm text-rose-200">Trimestre 2 - Échéance</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xl font-bold">15 Déc</p>
                            <p class="text-xs text-rose-200">3 jours</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-white/10 rounded-lg">
                        <div>
                            <p class="font-medium">Bulletins trimestriels</p>
                            <p class="text-sm text-rose-200">Publication</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xl font-bold">20 Déc</p>
                            <p class="text-xs text-rose-200">8 jours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-form.single-form-modal id="ecoleFormModal" width="70vw" title="Mettre à jour l'école"
            confirmText="Sauvegarder" action="{{ route('ecole.update', $ecole) }}" method="PUT" enctype="multipart/form-data">
            {{-- Informations générales --}}
            <x-form.fieldset colsMd="2" legend="Informations générales">
                <x-form.input name="name" label="Nom de l'école" :value="$ecole->name" required />
                <x-form.input name="code" label="Code de l'école" :value="$ecole->code" />
                <x-form.input name="slogan" label="Slogan" :value="$ecole->slogan" />
                <x-form.input name="ifu" label="IFU" :value="$ecole->ifu" required />
            </x-form.fieldset>

            {{-- Contact --}}
            <x-form.fieldset legend="Coordonnées">
                <x-form.input type="email" name="email" label="Email" :value="$ecole->email" />
                <x-form.input name="telephone" label="Téléphone" :value="$ecole->telephone" />
                <x-form.input name="site_web" label="Site web" :value="$ecole->site_web" />
            </x-form.fieldset>

            {{-- Localisation --}}
            <x-form.fieldset legend="Localisation">
                <x-form.input name="adresse" label="Adresse" :value="$ecole->adresse" />
                <x-form.input name="ville" label="Ville" :value="$ecole->ville" />
                <x-form.input name="pays" label="Pays" :value="$ecole->pays ?? 'Bénin'" />
            </x-form.fieldset>

            {{-- Médias --}}
            <x-form.fieldset colsMd="1" legend="Médias & description">
                <x-form.input type="file" name="logo" label="Logo de l'école" />
                <x-form.textarea name="description" label="Description" :value="$ecole->description" />
            </x-form.fieldset>

            {{-- Statut --}}
            <x-form.fieldset legend="Statut">
                <x-form.select name="active" label="Statut" :options="[1 => 'Active', 0 => 'Inactive']" :value="old('active', $ecole->active)" />
            </x-form.fieldset>
        </x-form.single-form-modal>

        {{-- Modal de détails de l'école --}}
        <x-ui.detail-modal id="ecoleDetailsModal" width="50vw" title="Détails de l'école">

            <div class="space-y-6">

                {{-- Section Informations principales --}}
                <x-ui.detail-section-modal title="Informations principales" cols="2">
                    <x-ui.single-detail-field-modal label="Nom" :value="$ecole->name" />
                    <x-ui.single-detail-field-modal label="Code" :value="$ecole->code" />
                    <x-ui.single-detail-field-modal label="Slogan" :value="$ecole->slogan" />
                    <x-ui.single-detail-field-modal label="IFU" :value="$ecole->ifu" />
                </x-ui.detail-section-modal>

                {{-- Section Contact --}}
                <x-ui.detail-section-modal title="Contact" cols="2">
                    <x-ui.single-detail-field-modal label="Téléphone" :value="$ecole->telephone" />
                    <x-ui.single-detail-field-modal label="Email" :value="$ecole->email" class="break-all" />
                    <x-ui.single-detail-field-modal label="Site web" :value="$ecole->site_web" />
                </x-ui.detail-section-modal>

                {{-- Section Localisation --}}
                <x-ui.detail-section-modal title="Localisation" cols="3">
                    <x-ui.single-detail-field-modal label="Adresse" :value="$ecole->adresse" />
                    <x-ui.single-detail-field-modal label="Ville" :value="$ecole->ville" />
                    <x-ui.single-detail-field-modal label="Pays" :value="$ecole->pays" />
                </x-ui.detail-section-modal>

                {{-- Section Description --}}
                @if ($ecole->description)
                    <x-ui.detail-section-modal title="Description" cols="1">
                        <x-ui.single-detail-field-modal label="" :value="$ecole->description" type="long-text" />
                    </x-ui.detail-section-modal>
                @endif

                {{-- Section Logo --}}
                @if ($ecole->logo)
                    <x-ui.detail-section-modal title="Logo" cols="1">
                        <x-ui.single-detail-field-modal label="Logo de l'école" :value="asset('storage/' . $ecole->logo)" type="image" />
                    </x-ui.detail-section-modal>
                @endif

                {{-- Section Statut avec badge personnalisé --}}
                <x-ui.detail-section-modal title="Statut" cols="1">
                    <x-ui.single-detail-field-modal label="État" type="badge">
                        <span
                            class="px-3 py-1 rounded-full text-sm font-medium
                    {{ $ecole->active ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' }}">
                            {{ $ecole->active ? 'Active' : 'Inactive' }}
                        </span>
                    </x-ui.single-detail-field-modal>
                </x-ui.detail-section-modal>

            </div>

            {{-- Footer personnalisé (optionnel) --}}
            <x-slot:footer>
                <button type="button"
                    onclick="closeModalForm('ecoleDetailsModal'); openModalFormSingle('ecoleFormModal')"
                    class="px-5 py-2.5 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors font-medium">
                    Modifier
                </button>
                <button type="button" onclick="closeModalForm('ecoleDetailsModal')"
                    class="px-5 py-2.5 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors font-medium">
                    Fermer
                </button>
            </x-slot:footer>

        </x-ui.detail-modal>

    </div>
@endsection
