@extends('app', ['title' => 'Dashboard', 'entete' => 'Tableau de bord'])

@section('content')
@include('admin.layouts.entete', [
    'entete' => 'dashboard',
    'infos' => 'Tableau de bord administratif',
])

<div class="container mx-auto px-4 py-6">
    <!-- Cartes de statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Carte Étudiants -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Étudiants inscrits</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">1,248</h3>
                    <p class="text-green-500 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        +12% ce mois
                    </p>
                </div>
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.67 3.623a10.95 10.95 0 00-2.665-4.356M14 10a4 4 0 01-4 4m0 0a4 4 0 01-4-4m4 4V2"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Carte Enseignants -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Enseignants</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">84</h3>
                    <p class="text-green-500 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        +3% ce mois
                    </p>
                </div>
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Carte Classes -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Classes actives</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">42</h3>
                    <p class="text-gray-500 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path>
                        </svg>
                        Stable
                    </p>
                </div>
                <div class="bg-purple-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Carte Taux de présence -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Taux de présence</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">94.5%</h3>
                    <p class="text-green-500 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        +2.3% cette semaine
                    </p>
                </div>
                <div class="bg-yellow-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Graphique et historique de connexion -->
        <div class="lg:col-span-2">
            <!-- Graphique simple (statique) -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Activité des connexions (7 derniers jours)</h2>
                    <span class="text-sm text-gray-500">Semaine du 12 au 18 juin</span>
                </div>
                
                <!-- Bar chart simplifié -->
                <div class="h-64 flex items-end space-x-4 pt-6">
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Lun</div>
                        <div class="w-full bg-blue-500 rounded-t-lg" style="height: 60%"></div>
                        <div class="text-sm font-medium mt-2">142</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Mar</div>
                        <div class="w-full bg-blue-500 rounded-t-lg" style="height: 80%"></div>
                        <div class="text-sm font-medium mt-2">189</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Mer</div>
                        <div class="w-full bg-blue-600 rounded-t-lg" style="height: 95%"></div>
                        <div class="text-sm font-medium mt-2">224</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Jeu</div>
                        <div class="w-full bg-blue-500 rounded-t-lg" style="height: 75%"></div>
                        <div class="text-sm font-medium mt-2">176</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Ven</div>
                        <div class="w-full bg-blue-500 rounded-t-lg" style="height: 65%"></div>
                        <div class="text-sm font-medium mt-2">152</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Sam</div>
                        <div class="w-full bg-blue-400 rounded-t-lg" style="height: 30%"></div>
                        <div class="text-sm font-medium mt-2">68</div>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="text-xs text-gray-500 mb-1">Dim</div>
                        <div class="w-full bg-blue-300 rounded-t-lg" style="height: 20%"></div>
                        <div class="text-sm font-medium mt-2">45</div>
                    </div>
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <div class="flex justify-between">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">945</p>
                            <p class="text-gray-500 text-sm">Connexions cette semaine</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">135</p>
                            <p class="text-gray-500 text-sm">Moyenne quotidienne</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-800">224</p>
                            <p class="text-gray-500 text-sm">Pic (Mercredi)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historique des connexions récentes -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Historique des connexions récentes</h2>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rôle</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure de connexion</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="text-blue-600 font-medium">MA</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">Marie Martin</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Administratif</span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">18 juin, 08:42</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">En ligne</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <span class="text-green-600 font-medium">PD</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">Pierre Dubois</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Enseignant</span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">18 juin, 08:15</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">En ligne</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-purple-100 rounded-full flex items-center justify-center">
                                            <span class="text-purple-600 font-medium">SD</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">Sophie Durand</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Étudiant</span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">18 juin, 07:58</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Déconnecté</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                            <span class="text-yellow-600 font-medium">JL</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">Jean Lambert</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Parent</span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">17 juin, 21:32</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Déconnecté</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-red-100 rounded-full flex items-center justify-center">
                                            <span class="text-red-600 font-medium">CD</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">Claire Dumas</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Direction</span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">17 juin, 19:15</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Déconnecté</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-6 pt-4 border-t border-gray-100">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                        Voir tout l'historique
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Section latérale avec stats et actions rapides -->
        <div class="lg:col-span-1">
            <!-- Aperçu des événements -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Événements à venir</h2>
                
                <div class="space-y-4">
                    <div class="flex items-start p-3 rounded-lg border border-blue-100 bg-blue-50">
                        <div class="flex-shrink-0 mr-3">
                            <div class="bg-blue-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Réunion des enseignants</h4>
                            <p class="text-sm text-gray-600">20 juin, 14:00 - Salle de conférence</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start p-3 rounded-lg border border-green-100 bg-green-50">
                        <div class="flex-shrink-0 mr-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Date limite des notes</h4>
                            <p class="text-sm text-gray-600">25 juin - Tous les enseignants</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start p-3 rounded-lg border border-purple-100 bg-purple-50">
                        <div class="flex-shrink-0 mr-3">
                            <div class="bg-purple-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Rentrée scolaire</h4>
                            <p class="text-sm text-gray-600">2 septembre - Début de l'année</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                        Voir le calendrier complet
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Actions rapides</h2>
                
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 hover:bg-gray-50 hover:border-blue-300 transition-colors duration-200">
                        <div class="bg-blue-100 p-3 rounded-full mb-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Nouvel utilisateur</span>
                    </a>
                    
                    <a href="#" class="flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 hover:bg-gray-50 hover:border-green-300 transition-colors duration-200">
                        <div class="bg-green-100 p-3 rounded-full mb-2">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Rapport</span>
                    </a>
                    
                    <a href="#" class="flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 hover:bg-gray-50 hover:border-purple-300 transition-colors duration-200">
                        <div class="bg-purple-100 p-3 rounded-full mb-2">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Équipe</span>
                    </a>
                    
                    <a href="#" class="flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 hover:bg-gray-50 hover:border-yellow-300 transition-colors duration-200">
                        <div class="bg-yellow-100 p-3 rounded-full mb-2">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Paramètres</span>
                    </a>
                </div>
                
                <!-- Résumé statut système -->
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <h3 class="font-medium text-gray-800 mb-4">Statut du système</h3>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Base de données</span>
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">En ligne</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Serveur d'applications</span>
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Normal</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Stockage</span>
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">64% utilisé</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Dernière sauvegarde</span>
                            <span class="text-sm font-medium text-gray-800">17 juin 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pied de page avec info de version -->
<div class="mt-8 py-4 border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p>© 2023 Système de Gestion Scolaire. Tous droits réservés.</p>
            <p class="mt-2 md:mt-0">Version 2.1.4 | Dernière mise à jour: 15 juin 2023</p>
        </div>
    </div>
</div>
@endsection