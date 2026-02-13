@extends('admin.layouts.auth_layout', ['title' => "Initialisation de l'application"])

@section('content')
    <div class="text-center">
        <h1 class="text-3xl font-bold text-blue-700">Initialisation de l’application</h1>
        <p class="text-gray-600 mt-2 text-sm max-w-xl">
            Veuillez renseigner les informations nécessaires pour configurer votre application avant la première
            utilisation.
        </p>
    </div>

    @if ($errors->any())
        <div class="w-full max-w-5xl mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg text-left">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow-2xl rounded-2xl w-full max-w-5xl h-[650px] flex flex-col overflow-hidden">

        <header class="px-10 pt-4 pb-2">
            <div class="flex justify-between items-center mb-3">
                <div class="flex-1 text-center">
                    <div id="step1-circle"
                        class="w-9 h-9 mx-auto rounded-full flex items-center justify-center bg-blue-600 text-white font-semibold text-sm">
                        1</div>
                    <p class="text-xs mt-1 font-medium text-blue-600">Informations Ecoles</p>
                </div>
                <div class="flex-1 text-center">
                    <div id="step2-circle"
                        class="w-9 h-9 mx-auto rounded-full flex items-center justify-center bg-gray-300 text-gray-600 font-semibold text-sm">
                        2</div>
                    <p class="text-xs mt-1 text-gray-600">Sites</p>
                </div>
                <div class="flex-1 text-center">
                    <div id="step3-circle"
                        class="w-9 h-9 mx-auto rounded-full flex items-center justify-center bg-gray-300 text-gray-600 font-semibold text-sm">
                        3</div>
                    <p class="text-xs mt-1 text-gray-600">Cycles / Sites</p>
                </div>
            </div>
            <hr class="border-gray-300">
        </header>

        <!-- Contenu scrollable -->
        <main class="flex-1 overflow-y-auto px-10 py-2">
            <form id="multiStepForm" method="POST" action="{{ route('initialisation.store') }}" class="h-full"
                enctype="multipart/form-data">
                @csrf

                <!-- Étape 1 -->
                <div id="step1" class="step pb-6">
                    <h2 class="text-xl font-semibold mb-5 text-gray-800">Informations sur l’école</h2>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Nom et code -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                                Nom de l’école <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Ex: Complexe Scolaire Les Étoiles" required
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Code école</label>
                            <input type="text" name="code" placeholder="Ex: CSLE2025" value="{{ old('code') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Slogan et IFU -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Slogan</label>
                            <input type="text" name="slogan" placeholder="Ex: Le savoir avant tout"
                                value="{{ old('slogan') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                IFU <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="ifu" required placeholder="Ex: 3204567890123"
                                value="{{ old('ifu') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Email et téléphone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" required placeholder="Ex: contact@ecoleetoiles.com"
                                value="{{ old('email') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Téléphone <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="telephone" required placeholder="Ex: +229 01 60 00 00 00"
                                value="{{ old('telephone') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Adresse et ville -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Adresse <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="adresse" required placeholder="Ex: Quartier Zogbo, Cotonou"
                                value="{{ old('adresse') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Ville <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="ville" required placeholder="Ex: Cotonou"
                                value="{{ old('ville') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Pays et site web -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Pays</label>
                            <input type="text" name="pays" value="Bénin" value="{{ old('pays') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Site web</label>
                            <input type="url" name="site_web" placeholder="https://www.mon-ecole.com"
                                value="{{ old('site_web') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Logo et Annee Scolaire -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Logo de l’école <span class="text-red-500">*</span>
                            </label>
                            <input type="file" name="logo" accept="image/*" required value="{{ old('logo') }}"
                                class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md px-3 py-2 cursor-pointer focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                            <p class="text-xs text-gray-500 mt-1">Formats acceptés : JPG, PNG. Taille max : 2 Mo.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Annee scolaire actuelle<span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="annee_scolaire" placeholder="Ex : 2025-2026" required
                                value="{{ old('annee_scolaire') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 h-9.5 text-gray-900 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" />
                        </div>

                        <!-- Description -->
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea name="description" rows="4"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                placeholder="Ex: École privée offrant un enseignement de qualité du préscolaire au secondaire...">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Étape 2 -->
                <div id="step2" class="step hidden">
                    <h2 class="text-xl font-semibold mb-5 text-gray-800">Sites de l’établissement</h2>
                    <p class="text-gray-600 mb-6">
                        Renseignez ici les différents sites de votre établissement (ex : Siège, Annexe 1, Annexe 2...).
                    </p>

                    <div id="sites-container" class="space-y-8">
                        <!-- Premier site par défaut -->
                        <div class="p-6 border border-gray-200 rounded-lg bg-gray-50 relative site-item">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nom -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        Nom du site <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="sites[0][name]" required placeholder="Ex: Siège principal"
                                        value="{{ old('sites.0.name') }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                                </div>

                                <!-- Localisation -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                                    <input type="text" name="sites[0][localisation]"
                                        value="{{ old('sites.0.localisation') }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="Ex: Quartier Zogbo, Cotonou">
                                </div>

                                <!-- Téléphone -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="sites[0][telephone]" required
                                        value="{{ old('sites.0.telephone') }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="Ex: +229 60 00 00 00">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" name="sites[0][email]" value="{{ old('sites.0.email') }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="Ex: contact@annexe1.com">
                                </div>

                                <!-- Responsable -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Responsable du
                                        site<span class="text-red-500">*</span></label>
                                    <input type="text" name="sites[0][responsable]" required
                                        value="{{ old('sites.0.responsable') }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="Ex: M. HOUNYE Bienvenu">
                                </div>

                                <!-- Statut -->
                                <div class="flex items-center mt-2 space-x-2">
                                    <input type="checkbox" name="sites[0][active]" value="1" checked
                                        value="{{ old('sites.0.active') }}" class="accent-blue-600 h-5 w-5 rounded">
                                    <label class="text-gray-700 text-sm">Site actif</label>
                                </div>

                                <!-- Description -->
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Description du
                                        site</label>
                                    <textarea name="sites[0][description]" rows="3"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="Ex: Annexe dédiée au cycle primaire...">{{ old('sites.0.description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bouton pour ajouter un nouveau site -->
                    <div class="mt-6 pb-6">
                        <button type="button" id="add-site"
                            class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                            + Ajouter un autre site
                        </button>
                    </div>
                </div>

                <!-- Étape 3 -->
                <div id="step3" class="step hidden">
                    <h2 class="text-xl font-semibold mb-5 text-gray-800">Cycles par site</h2>
                    <p class="text-gray-600 mb-6">
                        Sélectionnez les cycles disponibles pour chaque site de votre établissement.
                    </p>

                    <div id="cycles-container" class="space-y-8">
                        <!-- Ici les cycles seront générés automatiquement -->
                    </div>
                </div>
            </form>
        </main>

        <!-- Footer -->
        <footer class="border-t border-gray-300 px-10 py-4 flex justify-between bg-gray-50">
            <button type="button" id="prevBtn"
                class="bg-gray-300 text-gray-700 px-6 py-2.5 rounded-lg hover:bg-gray-400 transition hidden">Précédent</button>
            <button type="button" id="nextBtn"
                class="bg-blue-600 text-white px-6 py-2.5 rounded-lg hover:bg-blue-700 transition ml-auto">Suivant</button>
            <button type="submit" form="multiStepForm" id="submitBtn"
                class="bg-green-600 text-white px-6 py-2.5 rounded-lg hover:bg-green-700 transition hidden">Terminer</button>
        </footer>
    </div>
@endsection

@section('script')
    <script>
        const oldSites = @json(old('sites', []));
    </script>
    <script src="{{ asset('js/admin/initialisation.js') }}"></script>
@endsection
