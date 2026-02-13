@extends('app', ['title' => 'Payements', 'entete' => $payement->exists ? 'Modifier Payement' : 'Nouveau Payement'])

@section('content')
@include('admin.layouts.entete', [
    'entete' => 'Payements',
    'infos' => $payement->exists ? 'Modifier un payement existant' : 'Créer un nouveau payement',
])

<section class="mb-12">

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="{{ background_color_1() }} px-4 py-3 rounded shadow mb-5">
        <h4 class="text-lg font-bold text-gray-800 dark:text-gray-900">
            {{ $payement->exists ? 'Modifier le payement' : 'Formulaire de payement' }}
        </h4>
    </div>

    <form action="{{ route($payement->exists ? 'payement.update' : 'payement.store', ['payement' => $payement]) }}"
        method="POST" class="bg-gray-50 dark:bg-gray-800 shadow rounded p-6 space-y-6" id="payementForm">
        @csrf
        @method($payement->exists ? 'put' : 'post')

        <!-- Choix de l'élève -->
        <div>
            <label class="block font-semibold mb-1">Élève <span class="text-red-500">*</span></label>
            <select name="eleve_id" required
                class="w-full border border-gray-300 dark:border-gray-600 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500
                       bg-white dark:bg-gray-700 dark:text-gray-100">
                <option value="">-- Sélectionner un élève --</option>
                @foreach ($eleves as $eleve)
                    <option value="{{ $eleve->id }}" @selected(old('eleve_id', $payement->inscription->eleve->id ?? '') == $eleve->id)>
                        {{ $eleve->nom }} {{ $eleve->prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Montant -->
        <div>
            <label class="block font-semibold mb-1">Montant du payement <span class="text-red-500">*</span></label>
            <input type="text" name="montant" id="montant"
                value="{{ old('montant', isset($payement->montant) ? number_format($payement->montant, 0, ',', ' ') : '') }}"
                required
                class="w-full border border-gray-300 dark:border-gray-600 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500"
                oninput="formatMontant(this)">
        </div>

        <!-- Boutons -->
        <div class="flex space-x-2 justify-end mt-6">
            <a href="{{ route('payement.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Annuler</a>

            <button type="submit" id="submitBtn"
                class="relative z-50 submit-btn px-4 py-2 bg-blue-600 text-white rounded
                       hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed
                       transition-all duration-300 flex items-center justify-center gap-2">
                <span class="spinner hidden w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
                <span class="btn-text">{{ $payement->exists ? 'Mettre à jour' : 'Enregistrer' }}</span>
            </button>
        </div>
    </form>
</section>
@endsection

@section('script')
<script>
    // ==== Formatage montant tous les 3 chiffres ====
    function formatMontant(input) {
        let value = input.value.replace(/\D/g, '');
        if(value) {
            input.value = new Intl.NumberFormat('fr-FR').format(value);
        } else {
            input.value = '';
        }
    }

    // ==== Submit avec conversion montant en nombre pur ====
    const form = document.getElementById('payementForm');
    const submitBtn = document.getElementById('submitBtn');

    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Supprime les espaces avant envoi
            const montantInput = document.getElementById('montant');
            montantInput.value = montantInput.value.replace(/\s/g, '');

            // Affiche le loader
            const spinner = submitBtn.querySelector('.spinner');
            const btnText = submitBtn.querySelector('.btn-text');
            submitBtn.disabled = true;
            if (spinner) spinner.classList.remove('hidden');
            if (btnText) btnText.textContent =
                '{{ $payement->exists ? 'Mise à jour en cours...' : 'Enregistrement en cours...' }}';
        });
    }
</script>
@endsection
