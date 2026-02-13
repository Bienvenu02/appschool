@extends('app', ['title' => 'Dashboard', 'entete' => 'Tableau de bord'])

@section('content')

@include('admin.layouts.entete', [
    'entete' => 'dashboard',
    'infos' => 'Tableau de bord administratif',
])

<!-- Cartes statistiques -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Carte Étudiants -->
    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Étudiants inscrits</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-2">1,245</h3>
                <p class="text-green-500 text-sm mt-2">
                    <span class="font-semibold">+12%</span> ce mois
                </p>
            </div>
            <div class="bg-blue-100 rounded-full p-3">
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Carte Enseignants -->
    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Enseignants actifs</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-2">87</h3>
                <p class="text-green-500 text-sm mt-2">
                    <span class="font-semibold">+3</span> nouveaux
                </p>
            </div>
            <div class="bg-green-100 rounded-full p-3">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Carte Cours -->
    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Cours disponibles</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-2">156</h3>
                <p class="text-blue-500 text-sm mt-2">
                    <span class="font-semibold">24</span> en cours
                </p>
            </div>
            <div class="bg-purple-100 rounded-full p-3">
                <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Carte Revenus -->
    <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Revenus ce mois</p>
                <h3 class="text-3xl font-bold text-gray-800 mt-2">45,890 €</h3>
                <p class="text-green-500 text-sm mt-2">
                    <span class="font-semibold">+8.2%</span> vs dernier mois
                </p>
            </div>
            <div class="bg-yellow-100 rounded-full p-3">
                <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Section graphiques et tableaux -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Graphique des inscriptions -->
    <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Inscriptions mensuelles</h3>
            <select class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                <option>2024</option>
                <option>2023</option>
            </select>
        </div>
        <div class="h-64 flex items-end justify-around space-x-2">
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 45%"></div>
                <span class="text-xs text-gray-600 mt-2">Jan</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 55%"></div>
                <span class="text-xs text-gray-600 mt-2">Fév</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 70%"></div>
                <span class="text-xs text-gray-600 mt-2">Mar</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 60%"></div>
                <span class="text-xs text-gray-600 mt-2">Avr</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 80%"></div>
                <span class="text-xs text-gray-600 mt-2">Mai</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 75%"></div>
                <span class="text-xs text-gray-600 mt-2">Jun</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 40%"></div>
                <span class="text-xs text-gray-600 mt-2">Jul</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 85%"></div>
                <span class="text-xs text-gray-600 mt-2">Aoû</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 90%"></div>
                <span class="text-xs text-gray-600 mt-2">Sep</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 65%"></div>
                <span class="text-xs text-gray-600 mt-2">Oct</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 70%"></div>
                <span class="text-xs text-gray-600 mt-2">Nov</span>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="w-full bg-blue-500 rounded-t-md hover:bg-blue-600 transition-colors" style="height: 50%"></div>
                <span class="text-xs text-gray-600 mt-2">Déc</span>
            </div>
        </div>
    </div>

    <!-- Répartition par niveau -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Répartition par niveau</h3>
        <div class="space-y-4">
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600">Licence</span>
                    <span class="font-semibold text-gray-800">45%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: 45%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600">Master</span>
                    <span class="font-semibold text-gray-800">30%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-green-500 h-2 rounded-full" style="width: 30%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600">Doctorat</span>
                    <span class="font-semibold text-gray-800">15%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-purple-500 h-2 rounded-full" style="width: 15%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600">Formation continue</span>
                    <span class="font-semibold text-gray-800">10%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 10%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Historique des connexions et Activités récentes -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Historique des connexions -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Dernières connexions</h3>
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700 font-medium">Voir tout</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-2 text-xs font-semibold text-gray-600 uppercase">Utilisateur</th>
                        <th class="text-left py-3 px-2 text-xs font-semibold text-gray-600 uppercase">Rôle</th>
                        <th class="text-left py-3 px-2 text-xs font-semibold text-gray-600 uppercase">Date/Heure</th>
                        <th class="text-left py-3 px-2 text-xs font-semibold text-gray-600 uppercase">Statut</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">JD</div>
                                <span class="ml-2 text-sm text-gray-800">Jean Dupont</span>
                            </div>
                        </td>
                        <td class="py-3 px-2 text-sm text-gray-600">Admin</td>
                        <td class="py-3 px-2 text-sm text-gray-600">08/12 14:23</td>
                        <td class="py-3 px-2">
                            <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">Succès</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">ML</div>
                                <span class="ml-2 text-sm text-gray-800">Marie Laurent</span>
                            </div>
                        </td>
                        <td class="py-3 px-2 text-sm text-gray-600">Enseignant</td>
                        <td class="py-3 px-2 text-sm text-gray-600">08/12 13:45</td>
                        <td class="py-3 px-2">
                            <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">Succès</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">PB</div>
                                <span class="ml-2 text-sm text-gray-800">Pierre Bernard</span>
                            </div>
                        </td>
                        <td class="py-3 px-2 text-sm text-gray-600">Étudiant</td>
                        <td class="py-3 px-2 text-sm text-gray-600">08/12 12:30</td>
                        <td class="py-3 px-2">
                            <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full">Échec</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">SM</div>
                                <span class="ml-2 text-sm text-gray-800">Sophie Martin</span>
                            </div>
                        </td>
                        <td class="py-3 px-2 text-sm text-gray-600">Enseignant</td>
                        <td class="py-3 px-2 text-sm text-gray-600">08/12 11:15</td>
                        <td class="py-3 px-2">
                            <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">Succès</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">LC</div>
                                <span class="ml-2 text-sm text-gray-800">Lucas Chevalier</span>
                            </div>
                        </td>
                        <td class="py-3 px-2 text-sm text-gray-600">Étudiant</td>
                        <td class="py-3 px-2 text-sm text-gray-600">08/12 10:00</td>
                        <td class="py-3 px-2">
                            <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">Succès</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Activités récentes -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Activités récentes</h3>
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700 font-medium">Voir tout</a>
        </div>
        <div class="space-y-4">
            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-800"><span class="font-semibold">Marie Laurent</span> a ajouté un nouveau cours</p>
                    <p class="text-xs text-gray-500 mt-1">Il y a 2 heures</p>
                </div>
            </div>

            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-800">15 nouveaux étudiants ont été validés</p>
                    <p class="text-xs text-gray-500 mt-1">Il y a 4 heures</p>
                </div>
            </div>

            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-800">Paiement en attente de <span class="font-semibold">Pierre Bernard</span></p>
                    <p class="text-xs text-gray-500 mt-1">Il y a 5 heures</p>
                </div>
            </div>

            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-800">Nouvel examen programmé pour le 15/12</p>
                    <p class="text-xs text-gray-500 mt-1">Il y a 6 heures</p>
                </div>
            </div>

            <div class="flex items-start space-x-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-800">Tentative de connexion suspecte détectée</p>
                    <p class="text-xs text-gray-500 mt-1">Il y a 8 heures</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection