<style>
    .h-16-pers {
        height: calc(var(--spacing) * 16)/* 4rem = 64px */;
    }
</style>
<header
    class="bg-gray-200 h-16-pers dark:bg-gray-900 shadow flex items-center justify-between px-4 transition-colors duration-300">
    <div class="flex items-center space-x-2">
        <!-- Bouton menu hamburger (mobile) -->
        <button class="md:hidden text-gray-600 dark:text-gray-300" onclick="toggleSidebar()" aria-label="Ouvrir le menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Bouton toggle sidebar (desktop) -->
        <button class="hidden md:inline-flex text-gray-600 dark:text-gray-300" onclick="toggleSidebarDesktop()"
            aria-label="Réduire le menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
        </button>

        <!-- Titre -->
        <h2 class="text-lg font-semibold {{ text_color_2() }} dark:text-white">{{ $entete ?? '' }}</h2>
    </div>

    <div class="flex items-center space-x-4">

        <!-- Bouton Dark Mode -->
        <button id="darkModeToggle"
            class="p-2 rounded-full hover:bg-white dark:hover:bg-gray-700 transition-colors duration-300"
            aria-label="Changer le mode sombre">
            <svg id="darkModeIcon" xmlns="http://www.w3.org/2000/svg"
                class="icon-transition h-6 w-6 text-gray-800 dark:text-gray-200" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3
             7 7 0 0021 12.79z" />
            </svg>
        </button>

        <!-- Menu utilisateur -->
        <div class="relative">
            <button onclick="toggleUserMenu()"
                class="flex items-center space-x-2 p-2 rounded-full hover:bg-white dark:hover:bg-gray-700"
                aria-label="Menu utilisateur">
                <img src="https://i.pravatar.cc/40" alt="Avatar" class="rounded-full w-8 h-8">
                <span class="hidden md:inline">Admin</span>
            </button>
            <div id="userMenu"
                class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden transform scale-95 opacity-0 transition-all duration-200 origin-top-right pointer-events-none z-50">
                <a href="{{ route('profile.edit', Auth::user()) }}" 
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profil</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Paramètres</a>
                <form action="{{ route('logout') }}" method="POST" data-turbo-frame="_top">
                    @csrf
                    <button type="button" onclick="openConfirmModal('confirmLogout', this)"
                        class="block px-4 py-2 w-full text-left hover:bg-gray-100 dark:hover:bg-gray-700 text-red-500">Déconnexion</button>
                </form>
            </div>
            <x-form.confirm-modal id="confirmLogout" message="Êtes-vous sûr de vouloir vous déconnecter ?" />
        </div>
    </div>
</header>
