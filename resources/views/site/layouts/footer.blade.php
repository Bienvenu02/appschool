<footer class="bg-gray-900 text-gray-300 mt-10">
    <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <h3 class="font-bold text-lg mb-3">{{ SITE_NAME }}</h3>
            <p>École primaire au Bénin, dédiée à l'excellence éducative depuis plus de 20 ans.</p>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-3">Liens utiles</h3>
            <ul>
                <li><a href="#" class="hover:text-white">Mentions légales</a></li>
                <li><a href="#" class="hover:text-white">Politique de confidentialité</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-3">Contact</h3>
            <p>Email : {{ EMAIL }}</p>
            <p>Tél : {{ CONTACT }}</p>
        </div>
    </div>
    <div class="bg-gray-800 text-center py-3 text-sm">
        &copy; {{ date('Y') }} {{ APP_NAME }} - Tous droits réservés
    </div>
</footer>
