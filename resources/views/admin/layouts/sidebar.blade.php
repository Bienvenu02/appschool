<!-- Overlay mobile (seulement visible sur mobile quand le menu est ouvert) -->
<div id="mobile-overlay" class="md:hidden" onclick="toggleSidebar()"></div>

<aside id="sidebar"
    class="bg-gray-200 dark:bg-gray-900 min-h-screen fixed md:sticky md:top-0 z-40 mobile-hidden transition-all duration-300 ease-in-out">

    <!-- Bloc haut : logo + nom + bouton fermer (mobile) -->
    <div class="flex items-center justify-between h-16 bg-white dark:bg-gray-800 px-4 shadow">
        <div class="flex items-center">
            <img src="{{ asset('images/logo/site_logo.png') }}" alt="Logo" class="w-16 h-12 rounded-full">
            <span class="text-md font-bold text-[#F4A261] ">{{ SITE_NAME }}</span>
        </div>
        <button class="md:hidden text-gray-600 dark:text-gray-300" onclick="toggleSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="space-y-1 p-4 overflow-y-auto h-[calc(100vh-4rem)] sidebar-scroll">

        {{-- Section Eleve --}}
        <x-sidebar.section-sidebar section="Eleve">
            <x-sidebar.sidebar-link label="Liste des Élèves" icon="👨‍🎓" />
            <x-sidebar.sidebar-link label="Gestion des Absences" icon="📅" />
            <x-sidebar.sidebar-link label="Bulletins Scolaires" icon="📝" />
        </x-sidebar.section-sidebar>

        {{-- Section Scolarité  --}}
        <x-sidebar.section-sidebar section="Scolarité">
            <x-sidebar.sidebar-link label="Payement Frais Scolaire" icon="💰" />
            <x-sidebar.sidebar-link label="Historique des Payements" icon="📜" />
        </x-sidebar.section-sidebar>

        <!-- Inscription Élève -->
        <x-sidebar.section-sidebar section="Inscription Élève">
            <x-sidebar.sidebar-link label="Nouvelle Inscription" icon="📝" />
            <x-sidebar.sidebar-link label="Liste des Inscriptions" icon="📋" />
        </x-sidebar.section-sidebar>

        {{-- Secteur Maternelle --}}
        <x-sidebar.section-sidebar section="Maternelle">
            <x-sidebar.sidebar-link label="Inscription Enfant" route="dashboard" icon="📝" />
            <x-sidebar.sidebar-dropdown id="maternelle" label="Gestion des Classes" icon="🏫">
                <x-sidebar.link label="Classes" route="dashboard" />
                <x-sidebar.link label="Matières" route="dashboard" />
            </x-sidebar.sidebar-dropdown>
        </x-sidebar.section-sidebar>

        {{-- Section primaire --}}
        <x-sidebar.section-sidebar section="Primaire">
            <x-sidebar.sidebar-link label="Inscription Élève" route="dashboard" icon="📝" />
            <x-sidebar.sidebar-dropdown id="primaire" label="Gestion des Classes" icon="🏫">
                <x-sidebar.link label="Classes" route="dashboard" />
                <x-sidebar.link label="Matières" route="dashboard" />
            </x-sidebar.sidebar-dropdown>
        </x-sidebar.section-sidebar>

        {{-- Tiers --}}
        <x-sidebar.section-sidebar section="Tiers">

            {{-- Gestion des cycles --}}
            <x-sidebar.sidebar-link label="Gestion des Cycles" route="cycle.index" icon="📅" />

            {{-- Gestion de nos cycles par annee scolaire et site  --}}
             <x-sidebar.sidebar-link label="Nos Cycles" route="affectation-site-cycle.index" icon="📅" />

            {{-- Gestion des groupes --}}
            <x-sidebar.sidebar-link label="Gestion des Groupes" route="groupe.index" icon="📝" />

            {{-- Gestion des niveaux --}}
            <x-sidebar.sidebar-link turbo="false" label="Gestion des Niveaux" route="niveau.index" icon="📚" />

            {{-- Gestion des séries --}}
            <x-sidebar.sidebar-link turbo="false" label="Gestion des Séries" route="serie.index" icon="🎓" />

            {{-- Gestion de Classe --}}
            <x-sidebar.sidebar-link turbo="false" label="Gestion des Classes" route="classe.index" icon="🏫" />

            {{-- Nos Classe par annee scolaire et site  --}}
            <x-sidebar.sidebar-link turbo="false" label="Nos Classes" route="affectation-site-classe.index" icon="🏫" />

        </x-sidebar.section-sidebar>

        {{-- Administration --}}
        <x-sidebar.section-sidebar section="Administration">

            {{-- Gestion des roles  --}}
            <x-sidebar.sidebar-dropdown id="role_gestion" label="Roles" icon="🛡️">
                <x-sidebar.link label="Gestion des Roles" route="role.index" />
                <x-sidebar.link label="Securité" route="dashboard" />
            </x-sidebar.sidebar-dropdown>

            {{-- Gestion des utilisateurs systeme --}}
            <x-sidebar.sidebar-dropdown id="utilisateur_gestion" label="Utilisateurs" icon="👤">
                <x-sidebar.link label="Utilisateurs Système" route="utilisateur.index" />
                <x-sidebar.link label="Securité" route="dashboard" />
            </x-sidebar.sidebar-dropdown>

            {{-- Gestion des sites  --}}
            <x-sidebar.sidebar-dropdown id="site_gestion" label="Sites" icon="🏫">
                <x-sidebar.link label="Gestion des Sites" route="site.index" />
                <x-sidebar.link label="Securité" route="dashboard" />
            </x-sidebar.sidebar-dropdown>

            {{-- Gestion de l'école  --}}
            <x-sidebar.sidebar-dropdown id="ecole_gestion" label="Ecole" icon="🏢">
                <x-sidebar.link label="Gestion de l'école" route="ecole.index" />
                <x-sidebar.link label="Securité" route="dashboard" />
            </x-sidebar.sidebar-dropdown>
        </x-sidebar.section-sidebar>
    </nav>
</aside>
