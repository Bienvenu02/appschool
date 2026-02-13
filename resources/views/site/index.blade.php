@extends('site', ['title' => 'Accueil'])

@section('content')
    <!-- Home Section (Hero + À propos) -->
    <section id="home">
        <!-- Carousel + Hero dans le même conteneur -->
        <div class="relative w-full h-[500px] preload keen-slider" id="my-keen-slider">
            <!-- Slides -->
            <div class="keen-slider__slide">
                <img src="{{ asset('images/site/image-1.jpg') }}" class="w-full h-full object-cover" loading="lazy"
                    alt="Slide 1">
            </div>
            <div class="keen-slider__slide">
                <img src="{{ asset('images/site/image-2.jpg') }}" class="w-full h-full object-cover" loading="lazy"
                    alt="Slide 2">
            </div>
            <div class="keen-slider__slide">
                <img src="{{ asset('images/site/image-3.jpg') }}" class="w-full h-full object-cover" loading="lazy"
                    alt="Slide 3">
            </div>

            <!-- Boutons -->
            <button id="prev"
                class="absolute top-1/2 left-4 -translate-y-1/2 z-20 bg-white/50 text-black px-2 py-1 rounded-full hover:bg-white">
                ‹
            </button>
            <button id="next"
                class="absolute top-1/2 right-4 -translate-y-1/2 z-20 bg-white/50 text-black px-2 py-1 rounded-full hover:bg-white">
                ›
            </button>

            <!-- Points -->
            <div id="dots" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10"></div>

            <!-- Hero text superposé -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/30 text-center px-4 z-10"
                data-aos="fade-down" data-aos-duration="3000">
                <h1 class="text-4xl font-bold mb-4">Bienvenue à l'École Sainte Geneviève</h1>
                <p class="mb-6">Former les leaders de demain dès le primaire</p>
                <a href="#contact"
                    class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-200">
                    Nous contacter
                </a>
            </div>
        </div>

        <!-- À propos -->
        <div class="max-full mx-auto px-16 grid md:grid-cols-2 gap-12 items-center bg-white text-gray-800 py-20">
            <!-- Image -->
            <div data-aos="fade-right" data-aos-duration="1200">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=800&h=500&fit=crop"
                    alt="Salle de classe" class="rounded-xl shadow-2xl w-full object-cover" />
            </div>

            <!-- Texte -->
            <div data-aos="fade-left" data-aos-duration="1200">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-4">
                    À propos de notre école
                </h2>
                <div class="w-16 h-1 bg-[#0047AB] mb-6"></div>
                <p class="text-lg leading-relaxed mb-6 text-gray-600">
                    Depuis l’an 2000, l’École Sainte Geneviève s’engage à offrir
                    une éducation de qualité qui inspire confiance, curiosité et ambition.
                    Nous accompagnons nos élèves pour qu’ils deviennent des leaders
                    responsables, créatifs et prêts à relever les défis du monde de demain.
                </p>
                <a href="#contact"
                    class="inline-block bg-[#0047AB] text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                    En savoir plus
                </a>
            </div>
        </div>
    </section>

    <!-- Offres pédagogiques -->
    <section id="offers" class="py-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Titre -->
            <h2 class="text-3xl font-extrabold text-center mb-12 text-gray-800" data-aos="fade-down"
                data-aos-duration="1000" data-aos-once="true">
                Nos offres pédagogiques
            </h2>

            <!-- Cartes -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg flex flex-col items-center text-center card" data-aos="zoom-in"
                    data-aos-duration="1000" data-aos-once="true">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-100 text-blue-600 rounded-full mb-6">
                        📚
                    </div>
                    <h3 class="text-xl text-center font-semibold mb-3 text-gray-800">Maternelle</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Développement moteur et social dès le jeune âge pour éveiller la curiosité et l'autonomie.
                    </p>
                </div>

                <!-- Carte 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg flex flex-col items-center text-center" data-aos="zoom-in"
                    data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-100 text-green-600 rounded-full mb-6">
                        ✏️
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Primaire</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Programme scolaire complet du CI au CM2, axé sur la réussite académique et la confiance en soi.
                    </p>
                </div>

                <!-- Carte 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg flex flex-col items-center text-center" data-aos="zoom-in"
                    data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
                    <div class="flex items-center justify-center w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full mb-6">
                        🎯
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Soutien scolaire</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Renforcement des acquis et accompagnement personnalisé pour chaque élève.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="gallery" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-8" data-aos="fade-down" data-aos-duration="800"
                data-aos-once="true">
                Galerie
            </h2>

            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-duration="800"
                data-aos-once="true">
                Quelques moments capturés à l'École Sainte Geneviève — salles, activités et rencontres.
            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="zoom-in">
                <!-- Item 1 -->
                <div class="group block overflow-hidden rounded-xl shadow-md">
                    <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Salle de classe"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Salle de classe</h3>
                        <p class="text-sm text-gray-500">Ambiance de travail et échanges.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="group block overflow-hidden rounded-xl shadow-md" data-aos="zoom-in" data-aos-delay="150">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Lecture"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Lecture</h3>
                        <p class="text-sm text-gray-500">Ateliers de lecture et compréhension.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="group block overflow-hidden rounded-xl shadow-md" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Atelier"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Atelier</h3>
                        <p class="text-sm text-gray-500">Créativité et projets manuels.</p>
                    </div>
                </div>

                <div class="group block overflow-hidden rounded-xl shadow-md" data-aos="zoom-in" data-aos-delay="450">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Cour de récréation"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Cour</h3>
                        <p class="text-sm text-gray-500">Jeux et détente pendant la récréation.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="group block overflow-hidden rounded-xl shadow-md" data-aos="zoom-in" data-aos-delay="600">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Travail en équipe"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Projet</h3>
                        <p class="text-sm text-gray-500">Collaborations et projets pédagogiques.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="group block overflow-hidden rounded-xl shadow-md" data-aos="zoom-in" data-aos-delay="750">
                    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?w=800&h=600&auto=format&fit=crop&q=60"
                        alt="Cérémonie scolaire"
                        class="w-full h-56 object-cover transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)] group-hover:scale-[1.03]">
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-gray-800">Cérémonie</h3>
                        <p class="text-sm text-gray-500">Événements et rencontres officielles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chiffres clés -->
    <section id="stats" class="py-10 bg-blue-600 text-white text-center">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-6">
            <div data-aos="flip-left">
                <h3 class="text-4xl font-bold">350+</h3>
                <p>Élèves</p>
            </div>
            <div data-aos="flip-left" data-aos-delay="150">
                <h3 class="text-4xl font-bold">98%</h3>
                <p>Taux de réussite</p>
            </div>
            <div data-aos="flip-left" data-aos-delay="300">
                <h3 class="text-4xl font-bold">20+</h3>
                <p>Enseignants</p>
            </div>
            <div data-aos="flip-left" data-aos-delay="450">
                <h3 class="text-4xl font-bold">23</h3>
                <p>Années d’existence</p>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Témoignages</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow" data-aos="zoom-in">
                    <p>"Une école qui a transformé la vie de mon enfant."</p>
                    <span class="block mt-4 font-semibold">- Parent d'élève</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" data-aos="zoom-in">
                    <p>"Des enseignants dévoués et un environnement sain."</p>
                    <span class="block mt-4 font-semibold">- Ancien élève</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div data-aos="fade-right">
                <h2 class="text-3xl font-extrabold mb-6 text-gray-900">Contactez-nous</h2>
                <p class="mb-2 text-gray-700"><strong>Adresse :</strong> Cotonou, Bénin</p>
                <p class="mb-2 text-gray-700"><strong>Email :</strong> <a href="mailto:contact@saintegenevieve.bj"
                        class="text-blue-600 hover:underline">contact@saintegenevieve.bj</a></p>
                <p class="mb-6 text-gray-700"><strong>Tél :</strong> +229 90 00 00 00</p>
                <iframe src="https://maps.google.com/maps?q=Cotonou&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="w-full h-72 rounded-xl shadow-md border-0" loading="lazy"
                    aria-label="Carte de Cotonou"></iframe>
            </div>

            <!-- Formulaire moderne -->
            <form action="#" method="POST" class="bg-gray-50 p-8 rounded-xl shadow-lg space-y-8"
                data-aos="fade-left">
                @csrf

                <!-- Nom -->
                <div class="relative">
                    <input type="text" id="name" name="name" placeholder=" " required
                        class="peer w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
                    <label for="name"
                        class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-[-0.6rem] peer-focus:text-sm peer-focus:text-blue-600 bg-white px-1">
                        Votre nom
                    </label>
                </div>

                <!-- Email -->
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder=" " required
                        class="peer w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
                    <label for="email"
                        class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-[-0.6rem] peer-focus:text-sm peer-focus:text-blue-600 bg-white px-1">
                        Votre email
                    </label>
                </div>

                <!-- Message -->
                <div class="relative">
                    <textarea id="message" name="message" rows="5" placeholder=" " required
                        class="peer w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-transparent resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"></textarea>
                    <label for="message"
                        class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-[-0.6rem] peer-focus:text-sm peer-focus:text-blue-600 bg-white px-1">
                        Votre message
                    </label>
                </div>

                <!-- Bouton -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 rounded-md shadow-md hover:bg-blue-700 transition">
                    Envoyer
                </button>
            </form>
        </div>
    </section>
@endsection
