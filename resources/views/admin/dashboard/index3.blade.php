@extends('app', ['title' => 'Dashboard', 'entete' => 'Tableau de bord'])

@section('content')

    @include('admin.layouts.entete', [
        'entete' => 'Dashboard',
        'infos' => 'Aperçu Général',
    ])

    <div class="space-y-8 p-4 sm:p-6 lg:p-8 bg-gray-50 min-h-screen">

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

            <div class="bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-indigo-600 hover:shadow-xl transition duration-300">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-4">
                            <svg class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20h-5m5 0a3 3 0 01-5.356-1.857M12 20h-5m5 0v-2m-4.516-5.59L17 3.32M4.982 9.482a3 3 0 010-4.965M4.982 9.482a3 3 0 000-4.965m0 4.965a3 3 0 010-4.965M2 10a2 2 0 012-2h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2v-8z" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500 truncate">Étudiants Inscrits</p>
                            <div class="mt-1 flex items-baseline">
                                <span class="text-3xl font-semibold text-gray-900">534</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3 text-sm">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        +12 Nouveaux ce mois
                    </span>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-yellow-500 hover:shadow-xl transition duration-300">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-4">
                            <svg class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M12 20a4 4 0 00-4-4H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2h-2a4 4 0 00-4 4z" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500 truncate">Membres du Personnel</p>
                            <div class="mt-1 flex items-baseline">
                                <span class="text-3xl font-semibold text-gray-900">45</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3 text-sm">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        3 Nouvelles Recrues
                    </span>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-green-500 hover:shadow-xl transition duration-300">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-4">
                            <svg class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M5 10h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v3a2 2 0 002 2z" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500 truncate">Classes Actives</p>
                            <div class="mt-1 flex items-baseline">
                                <span class="text-3xl font-semibold text-gray-900">22</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3 text-sm">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        Moyenne: 24 Éléves/Classe
                    </span>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-red-500 hover:shadow-xl transition duration-300">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-4">
                            <svg class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V6m0 4v2m0 2v2M5 9h14M5 15h14M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500 truncate">Frais Collectés (Mois)</p>
                            <div class="mt-1 flex items-baseline">
                                <span class="text-2xl font-semibold text-gray-900">12 500 000 XOF</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3 text-sm">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                        Reste à Collecter: 5%
                    </span>
                </div>
            </div>

        </div>

        <hr class="border-gray-300">

        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Actions Rapides
            </h3>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">

                <button class="flex flex-col items-center justify-center p-4 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 hover:border-indigo-700 transition duration-150 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1 group-hover:text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                    <span class="text-sm font-medium">Ajouter Étudiant</span>
                </button>

                <button class="flex flex-col items-center justify-center p-4 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-50 hover:border-yellow-600 transition duration-150 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1 group-hover:text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    <span class="text-sm font-medium">Nouveau Paiement</span>
                </button>

                <button class="flex flex-col items-center justify-center p-4 border border-green-500 text-green-600 rounded-lg hover:bg-green-50 hover:border-green-600 transition duration-150 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1 group-hover:text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                    <span class="text-sm font-medium">Gérer les Notes</span>
                </button>

                <button class="flex flex-col items-center justify-center p-4 border border-red-500 text-red-600 rounded-lg hover:bg-red-50 hover:border-red-600 transition duration-150 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1 group-hover:text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    <span class="text-sm font-medium">Calendrier</span>
                </button>

            </div>
        </div>

        <hr class="border-gray-300">

        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.142l1.09-1.09 1.09-1.09A4 4 0 1018.828 7.232l-4 4a4 4 0 00-5.656 0" />
                </svg>
                Historique des Dernières Connexions
            </h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rôle</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date/Heure</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse IP</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-indigo-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">**Admin Principal**</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Administrateur</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08/12/2025 21:35:00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">192.168.1.105</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Succès</span>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 hover:bg-indigo-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Prof. Dupont</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Professeur</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08/12/2025 21:01:45</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">203.0.113.44</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Succès</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-indigo-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Prof. Martin</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Professeur</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08/12/2025 20:55:12</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">172.16.254.1</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Échec</span>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 hover:bg-indigo-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Comptable Jean</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Gestionnaire</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08/12/2025 18:30:00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">192.168.1.200</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Succès</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection