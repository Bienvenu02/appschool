<header class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center space-x-1">
            <img src="{{ asset(LOGO) }}" alt="Logo" class="h-12 w-15">
            <span class="font-bold text-lg" style="{{ color_0() }}">{{ SITE_NAME }}</span>
        </a>
        <nav class="hidden md:flex space-x-6 font-medium">
            <a href="{{ route('home') }}#home"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Accueil</a>
            <a href="{{ route('home') }}#offers"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Offres</a>
            <a href="{{ route('home') }}#gallery"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Galerie</a>
            <a href="{{ route('home') }}#stats"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Chiffres</a>
            <a href="{{ route('home') }}#testimonials"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Témoignages</a>
            <a href="{{ route('home') }}#contact"
                class="text-[15px] font-medium hover:bg-[#eee] hover:text-[#F4A261] transition duration-200 p-2 rounded-full">Contact</a>
        </nav>
        <a href="{{ route('login') }}"
            class="hidden md:inline-block {{ background_color_2() }} text-white px-4 py-2 rounded-full text-center text-sm font-semibold hover:bg-[#1166AB] transition duration-200">
            Espace Membre
        </a>
        <div class="md:hidden">
            <button id="menu-btn" class="text-gray-800 focus:outline-none text-2xl">
                ☰
            </button>
        </div>
    </div>
    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden bg-white shadow-md md:hidden">
        <nav class="flex flex-col space-y-3 p-4">
            <a href="{{ route('home') }}#home" class="px-2">Accueil</a>
            <a href="{{ route('home') }}#offers" class="px-2">Offres</a>
            <a href="{{ route('home') }}#gallery" class="px-2">Galerie</a>
            <a href="{{ route('home') }}#stats" class="px-2">Chiffres clés</a>
            <a href="{{ route('home') }}#testimonials" class="px-2">Témoignages</a>
            <a href="{{ route('home') }}#contact" class="px-2">Contact</a>
            <a href=""
                class="bg-[#d5be60] text-white text-center py-2 rounded-full font-semibold">
                Espace Membre
            </a>
        </nav>
    </div>
</header>
