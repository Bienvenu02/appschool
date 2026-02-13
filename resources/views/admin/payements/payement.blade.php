@extends('app', ['title' => 'Paiements', 'entete' => 'Liste des paiements'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'Paiements',
        'infos' => 'Suivi et gestion des paiements des élèves',
    ])

    <!-- Intro -->
    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow transition-colors duration-300 mb-4">
        <h3 class="text-xl font-bold mb-4">Gestion des paiements</h3>
        <p>Retrouvez ici tous les paiements enregistrés et leur statut (total payé, reste, type, date, etc.).</p>
    </div>

    <!-- Tableau -->
    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden">
        <!-- En-tête du tableau -->
        <div class="{{ background_color_1() }} dark:bg-orange-300 px-4 py-3 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-800">Historique des paiements</h3>
            <a href="{{ route('payement.create') }}"
                class="inline-flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="white"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Nouveau paiement
            </a>
        </div>

        <!-- Corps -->
        <div class="p-4">
            <div class="overflow-x-auto">
                <table id="payementsTable"
                    class="datatable display nowrap w-full border-collapse border border-gray-200 dark:border-gray-700 text-sm">
                    <thead class="bg-gray-100 dark:bg-gray-400 text-gray-700 dark:text-gray-100">
                        <tr>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">N°</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Élève</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Classe</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Montant Payé</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Date Paiement</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Numero Recu</th>
                            <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payements as $index => $payement)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                                <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                    {{ $payement->inscription->eleve->nom }} {{ $payement->inscription->eleve->prenom }}
                                </td>
                                <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                    {{ $payement->inscription->classe->libelle }}
                                </td>
                                <td
                                    class="px-4 py-2 border border-gray-200 dark:border-gray-700 font-semibold text-green-600">
                                    {{ number_format($payement->montant, 0, ' ', ' ') }} FCFA
                                </td>
                                <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                    {{ $payement->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td>{{ $payement->numero_payement }}</td>
                                <td class="px-4 py-2 border border-gray-200 dark:border-gray-700 flex space-x-2">
                                    {{-- <a href="{{ route('payement.show', $payement) }}"
                                        class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded text-xs">👁️
                                        Voir</a> --}}
                                    <a href="{{ route('payement.edit', $payement) }}"
                                        class="px-2 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded text-xs">
                                        ✏️ Modifier
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
