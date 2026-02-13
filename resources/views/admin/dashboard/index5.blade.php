@extends('app', ['title' => 'Dashboard', 'entete' => 'Tableau de bord'])

@section('content')

@include('admin.layouts.entete', [
    'entete' => 'dashboard',
    'infos' => 'Vue d\'ensemble administrative',
])

<!-- Hero Stats avec Gradient Background -->
<div class="relative mb-8">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl opacity-10 blur-3xl"></div>
    <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Carte 1 - Étudiants avec animation -->
        <div class="group relative bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 rounded-xl p-3 backdrop-blur-sm">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <span class="bg-white bg-opacity-20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">+12%</span>
                </div>
                <h3 class="text-white text-opacity-90 text-sm font-medium mb-2">Étudiants Actifs</h3>
                <p class="text-white text-4xl font-bold mb-1">1,245</p>
                <p class="text-white text-opacity-80 text-xs">+156 ce mois</p>
            </div>
        </div>

        <!-- Carte 2 - Enseignants -->
        <div class="group relative bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 rounded-xl p-3 backdrop-blur-sm">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="bg-white bg-opacity-20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">+5</span>
                </div>
                <h3 class="text-white text-opacity-90 text-sm font-medium mb-2">Enseignants</h3>
                <p class="text-white text-4xl font-bold mb-1">87</p>
                <p class="text-white text-opacity-80 text-xs">Tous départements</p>
            </div>
        </div>

        <!-- Carte 3 - Cours -->
        <div class="group relative bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 rounded-xl p-3 backdrop-blur-sm">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <span class="bg-white bg-opacity-20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">24 actifs</span>
                </div>
                <h3 class="text-white text-opacity-90 text-sm font-medium mb-2">Cours Disponibles</h3>
                <p class="text-white text-4xl font-bold mb-1">156</p>
                <p class="text-white text-opacity-80 text-xs">8 nouveaux ce mois</p>
            </div>
        </div>

        <!-- Carte 4 - Revenus -->
        <div class="group relative bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 rounded-xl p-3 backdrop-blur-sm">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <span class="bg-white bg-opacity-20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">+8.2%</span>
                </div>
                <h3 class="text-white text-opacity-90 text-sm font-medium mb-2">Revenus Mensuel</h3>
                <p class="text-white text-4xl font-bold mb-1">45.8K €</p>
                <p class="text-white text-opacity-80 text-xs">Objectif: 50K €</p>
            </div>
        </div>
    </div>
</div>

<!-- Section principale avec layout moderne -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Graphique principal - 2/3 de largeur -->
    <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-800">Inscriptions & Activité</h3>
                <p class="text-sm text-gray-500 mt-1">Tendance sur 12 mois</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium hover:bg-blue-100 transition-colors">Mensuel</button>
                <button class="px-4 py-2 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">Annuel</button>
            </div>
        </div>
        
        <!-- Graphique en barres 3D style -->
        <div class="relative h-80">
            <div class="absolute inset-0 flex items-end justify-around px-4 pb-8">
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 40%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">125 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Jan</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 50%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">145 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Fév</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 72%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">178 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Mar</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 58%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">156 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Avr</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 85%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">198 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Mai</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 68%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">167 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Jun</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-gray-400 to-gray-300 rounded-t-xl hover:from-gray-500 hover:to-gray-400 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 35%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">89 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Jul</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 92%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">215 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Aoû</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 100%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">234 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Sep</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 78%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">189 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Oct</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 shadow-lg group-hover:shadow-xl" style="height: 82%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">195 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Nov</span>
                </div>
                <div class="flex flex-col items-center group w-full max-w-[60px]">
                    <div class="relative w-full bg-gradient-to-t from-purple-500 to-purple-400 rounded-t-xl hover:from-purple-600 hover:to-purple-500 transition-all duration-300 shadow-lg group-hover:shadow-xl animate-pulse" style="height: 65%">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">162 étudiants</div>
                    </div>
                    <span class="text-xs text-gray-600 mt-3 font-medium">Déc</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats circulaires - 1/3 largeur -->
    <div class="space-y-6">
        <!-- Taux de présence -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl shadow-lg p-6 border border-green-100">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Taux de Présence</h3>
            <div class="flex items-center justify-center">
                <div class="relative w-40 h-40">
                    <svg class="transform -rotate-90 w-40 h-40">
                        <circle cx="80" cy="80" r="70" stroke="#e5e7eb" stroke-width="12" fill="none" />
                        <circle cx="80" cy="80" r="70" stroke="#10b981" stroke-width="12" fill="none"
                            stroke-dasharray="440" stroke-dashoffset="66" stroke-linecap="round" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center flex-col">
                        <span class="text-4xl font-bold text-gray-800">85%</span>
                        <span class="text-xs text-gray-500 mt-1">Moyenne</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-between text-sm">
                <span class="text-gray-600">Aujourd'hui</span>
                <span class="font-semibold text-green-600">+2.3%</span>
            </div>
        </div>

        <!-- Performance académique -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-lg p-6 border border-blue-100">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Performance Académique</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium text-gray-700">Excellent</span>
                        <span class="text-sm font-bold text-blue-600">42%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2.5 rounded-full shadow-lg" style="width: 42%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium text-gray-700">Bien</span>
                        <span class="text-sm font-bold text-emerald-600">35%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-2.5 rounded-full shadow-lg" style="width: 35%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium text-gray-700">Moyen</span>
                        <span class="text-sm font-bold text-amber-600">18%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                        <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2.5 rounded-full shadow-lg" style="width: 18%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium text-gray-700">À améliorer</span>
                        <span class="text-sm font-bold text-red-600">5%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                        <div class="bg-gradient-to-r from-red-500 to-red-600 h-2.5 rounded-full shadow-lg" style="width: 5%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Historique connexions + Activités -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
    <!-- Historique des connexions - Design carte moderne -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-r from-slate-800 to-slate-900 px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-white">Historique des Connexions</h3>
                    <p class="text-slate-300 text-sm mt-1">Surveillance en temps réel</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl px-4 py-2">
                    <span class="text-white text-sm font-semibold">Live</span>
                </div>
            </div>
        </div>
        
        <div class="p-6">
            <div class="space-y-3">
                <!-- Connexion 1 -->
                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition-shadow border border-green-100">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">JD</div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold text-gray-800 text-sm">Jean Dupont</h4>
                        <p class="text-xs text-gray-500">Administrateur • 08/12 à 14:23</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Succès</span>
                        <span class="text-xs text-gray-400 mt-1">Paris, FR</span>
                    </div>
                </div>

                <!-- Connexion 2 -->
                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition-shadow border border-green-100">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">ML</div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold text-gray-800 text-sm">Marie Laurent</h4>
                        <p class="text-xs text-gray-500">Enseignant • 08/12 à 13:45</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Succès</span>
                        <span class="text-xs text-gray-400 mt-1">Lyon, FR</span>
                    </div>
                </div>

                <!-- Connexion 3 - Échec -->
                <div class="flex items-center p-4 bg-gradient-to-r from-red-50 to-rose-50 rounded-xl hover:shadow-md transition-shadow border border-red-100">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">PB</div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-red-500 border-2 border-white rounded-full animate-pulse"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold text-gray-800 text-sm">Pierre Bernard</h4>
                        <p class="text-xs text-gray-500">Étudiant • 08/12 à 12:30</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="bg-red-100 text-red-700 text-xs font-bold px-3 py-1 rounded-full">Échec</span>
                        <span class="text-xs text-gray-400 mt-1">Marseille, FR</span>
                    </div>
                </div>

                <!-- Connexion 4 -->
                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition-shadow border border-green-100">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">SM</div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold text-gray-800 text-sm">Sophie Martin</h4>
                        <p class="text-xs text-gray-500">Enseignant • 08/12 à 11:15</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Succès</span>
                        <span class="text-xs text-gray-400 mt-1">Toulouse, FR</span>
                    </div>
                </div>

                <!-- Connexion 5 -->
                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition-shadow border border-green-100">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">LC</div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold text-gray-800 text-sm">Lucas Chevalier</h4>
                        <p class="text-xs text-gray-500">Étudiant • 08/12 à 10:00</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Succès</span>
                        <span class="text-xs text-gray-400 mt-1">Bordeaux, FR</span>
                    </div>
                </div>
            </div>

            <button class="w-full mt-6 py-3 bg-gradient-to-r from-slate-700 to-slate-800 hover:from-slate-800 hover:to-slate-900 text-white font-semibold rounded-xl transition-all transform hover:scale-105 shadow-lg">
                Voir l'historique complet
            </button>
        </div>
    </div>

    <!-- Flux d'activités -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-800 to-purple-900 px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-white">Flux d'Activités</h3>
                    <p class="text-indigo-200 text-sm mt-1">Dernières actions système</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl px-4 py-2">
                    <span class="text-white text-sm font-semibold">Aujourd'hui</span>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="space-y-6">
                <!-- Activité 1 -->
                <div class="flex items-start space-x-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-blue-400 rounded-full animate-ping"></div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium"><span class="font-bold text-blue-600">Marie Laurent</span> a créé un nouveau cours</p>
                        <p class="text-xs text-gray-500 mt-1">Mathématiques Avancées • Il y a 2h</p>
                    </div>
                </div>

                <!-- Activité 2 -->
                <div class="flex items-start space-x-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium">15 nouveaux étudiants validés</p>
                        <p class="text-xs text-gray-500 mt-1">Inscription Licence 1 • Il y a 4h</p>
                    </div>
                </div>

                <!-- Activité 3 -->
                <div class="flex items-start space-x-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium">Paiement reçu de <span class="font-bold text-amber-600">Pierre Bernard</span></p>
                        <p class="text-xs text-gray-500 mt-1">850€ • Frais de scolarité • Il y a 5h</p>
                    </div>
                </div>

                <!-- Activité 4 -->
                <div class="flex items-start space-x-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium">Examen programmé</p>
                        <p class="text-xs text-gray-500 mt-1">Physique Quantique • 15/12 à 14h • Il y a 6h</p>
                    </div>
                </div>

                <!-- Activité 5 -->
                <div class="flex items-start space-x-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium">Alerte système</p>
                        <p class="text-xs text-gray-500 mt-1">Tentative de connexion suspecte • Il y a 8h</p>
                    </div>
                </div>
            </div>

            <button class="w-full mt-6 py-3 bg-gradient-to-r from-indigo-700 to-purple-800 hover:from-indigo-800 hover:to-purple-900 text-white font-semibold rounded-xl transition-all transform hover:scale-105 shadow-lg">
                Voir toutes les activités
            </button>
        </div>
    </div>
</div>

<!-- Section rapide - Actions et stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Actions rapides -->
    <div class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-2xl shadow-xl p-6 text-white">
        <h3 class="text-lg font-bold mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Actions Rapides
        </h3>
        <div class="space-y-3">
            <button class="w-full py-3 bg-white bg-opacity-10 hover:bg-opacity-20 rounded-xl text-left px-4 transition-all backdrop-blur-sm flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Nouvel étudiant
            </button>
            <button class="w-full py-3 bg-white bg-opacity-10 hover:bg-opacity-20 rounded-xl text-left px-4 transition-all backdrop-blur-sm flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Créer un cours
            </button>
            <button class="w-full py-3 bg-white bg-opacity-10 hover:bg-opacity-20 rounded-xl text-left px-4 transition-all backdrop-blur-sm flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Générer rapport
            </button>
        </div>
    </div>

    <!-- Événements à venir -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Événements
        </h3>
        <div class="space-y-3">
            <div class="flex items-center p-3 bg-purple-50 rounded-xl border border-purple-100">
                <div class="bg-purple-600 text-white rounded-lg px-3 py-2 text-center mr-3">
                    <div class="text-xs font-semibold">DÉC</div>
                    <div class="text-lg font-bold">15</div>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">Examen final</p>
                    <p class="text-xs text-gray-500">14:00 - Amphi A</p>
                </div>
            </div>
            <div class="flex items-center p-3 bg-blue-50 rounded-xl border border-blue-100">
                <div class="bg-blue-600 text-white rounded-lg px-3 py-2 text-center mr-3">
                    <div class="text-xs font-semibold">DÉC</div>
                    <div class="text-lg font-bold">18</div>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">Réunion pédagogique</p>
                    <p class="text-xs text-gray-500">10:00 - Salle 202</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alertes système -->
    <div class="bg-gradient-to-br from-red-50 to-rose-50 rounded-2xl shadow-lg p-6 border border-red-100">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            Alertes
        </h3>
        <div class="space-y-3">
            <div class="bg-white p-3 rounded-xl border border-red-200">
                <p class="text-sm font-semibold text-red-700">3 paiements en retard</p>
                <p class="text-xs text-gray-600 mt-1">Action requise</p>
            </div>
            <div class="bg-white p-3 rounded-xl border border-amber-200">
                <p class="text-sm font-semibold text-amber-700">Mise à jour système</p>
                <p class="text-xs text-gray-600 mt-1">Disponible maintenant</p>
            </div>
            <div class="bg-white p-3 rounded-xl border border-orange-200">
                <p class="text-sm font-semibold text-orange-700">Sauvegarde planifiée</p>
                <p class="text-xs text-gray-600 mt-1">Ce soir à 23:00</p>
            </div>
        </div>
    </div>
</div>

@endsection