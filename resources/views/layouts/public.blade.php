<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name', 'Taxi Tony') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <nav class="bg-gray-900 text-black  top-0  z-50 shadow-lg">
        <div class="h-10 bg-blue-700/20 flex items-center justify-between px-6">
            <div class="flex gap-2">
                <a href="https://www.facebook.com/taxitonywaterloo/" target="_blank"><img src="{{ asset('image/facebook.png') }}" alt="facebook" class="w-8 hover:scale-110 transition-transform"></a>
                <a href="https://wa.me/+32496306040" target="_blank"><img src="{{ asset('image/whatsapp.png') }}" alt="whatsapp" class="w-8 hover:scale-110 transition-transform"></a>
                <a class="text-white my-auto active:text-taxi hover:scale-105 transition-transform" href="tel:+32496306040">+32 496 30 60 40</a>
            </div>
            <div class="flex gap-4">
                <a class="text-white hover:underline active:text-taxi" href="">fr</a>
                <a class="text-white hover:underline active:text-taxi" href="">en</a>
                <a class="text-white hover:underline active:text-taxi" href="">nl</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 items-center">
                <a class="flex-shrink-0 font-bold text-xl text-taxi uppercase" href="{{ route('home') }}">
                    {{ config('app.name', 'Taxi Tony') }}
                </a>
                <div class="hidden md:flex space-x-6  text-md font-medium px-4">
                    <a href="{{ route('home') }}" class="my-auto  text-white hover:text-taxi transition">Accueil</a>
                    <a href="{{ route('tarifs') }}" class="my-auto text-white hover:text-taxi transition">Tarifs</a>
                    <a href="{{ route('services') }}" class="my-auto text-white hover:text-taxi transition">Nos services</a>
                    <a href="{{ route('nocturnes') }}" class="my-auto text-white hover:text-taxi transition">Transports nocturnes</a>
                    
                </div>    
                <a href="{{ route('reservation')}}" class="flex items-center bg-taxi text-black px-4 py-2 rounded-xl font-bold shadow-2xl hover:bg-yellow-500 hover:shadow-lg transition">
                    <span>Réserver un taxi</span>
                </a>                    
                

                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden flex flex-col justify-center items-center w-10 h-10 space-y-1 focus:outline-none group">
                    <div id="bar-1" class="w-8 h-1 bg-white rounded-full transition-all duration-300"></div>
                    <div id="bar-2" class="w-8 h-1 bg-white rounded-full transition-all duration-300"></div>
                    <div id="bar-3" class="w-8 h-1 bg-white rounded-full transition-all duration-300"></div>
                </button>

            </div>
        </div>
    </nav>
    <div id="mobile-menu" class="fixed  inset-y-0 right-0 w-64 bg-gray-900 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-40">
        <div class="flex flex-col p-6 space-y-4 mt-20 font-semibold">
            <a href="{{ route('home') }}" class="text-white hover:text-taxi py-2 border-b border-gray-800">Accueil</a>
            <a href="{{ route('tarifs') }}" class="text-white hover:text-taxi py-2 border-b border-gray-800">Tarifs</a>
            <a href="{{ route('services') }}" class="text-white hover:text-taxi py-2 border-b border-gray-800">Services</a>
            <a href="{{ route('nocturnes') }}" class="text-white hover:text-taxi py-2 border-b border-gray-800">Nocturnes</a>
            <a href="{{ route('reservation') }}" class="text-taxi py-2">Réserver un taxi</a>
        </div>
    </div>
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('bar-1');
        const bar2 = document.getElementById('bar-2');
        const bar3 = document.getElementById('bar-3');

        mobileMenuButton.addEventListener('click', () => {
            if (mobileMenu.classList.contains('translate-x-full')) {
                mobileMenu.classList.remove('translate-x-full');
                mobileMenu.classList.add('translate-x-0');
                bar1.classList.add('rotate-45', 'translate-y-2');
                bar2.classList.add('opacity-0');
                bar3.classList.add('-rotate-45', '-translate-y-2');
            } else {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
                bar1.classList.remove('rotate-45', 'translate-y-2');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-2');
            }
        });
    </script>

    <!-- panier + reservation -->

    <div id="floating-cart" class="fixed bottom-8 right-8 z-50 hidden transition-all duration-300 transform translate-x-20 opacity-0 flex space-x-4">
        <a href="#reservation" class="bg-taxi rounded-xl text-black flex px-1 py-1 rounded font-bold hover:bg-yellow-500 hover:shadow-lg transition"><img src="{{ asset('image/panier.png') }}" alt="Panier" class="w-6 h-6"> <span class="text-sm m-auto" id="cart-count">0</span></a>

        <a href="{{ route('reservation')}}" class="flex items-center bg-taxi text-black px-4 py-2 rounded-xl font-bold shadow-2xl hover:bg-yellow-500 hover:shadow-lg transition">
            <span>Réserver un taxi </span>
        </a>
    </div>

    <main class="min-h-screen">
        @yield('content')
    </main>

    
                        
    <footer class="bg-gray-900 text-white mt-12 ">
        <div class="bg-gray-800 py-2 border-b border-gray-800"></div>
        <div class="max-w-7xl mx-auto pt-12 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:justify-between md:gap-8">

                <div class="w-64">
                    <a class="text-taxi font-bold text-xl mb-4 uppercase" href="{{ route('home') }}">
                        {{ config('app.name', 'Taxi Tony') }}
                    </a>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Votre partenaire de confiance pour tous vos déplacements à Waterloo et ses environs. 
                        Disponible 24h/24 et 7j/7 pour vous conduire à destination en toute sécurité.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="{{ route('emploi') }}" class="hover:text-taxi transition">Offres d'emploi</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-taxi transition">Contact</a></li>
                        <li><a href="{{ route('reservation') }}" class="hover:text-taxi transition">Réserver un taxi</a></li>
                        <li>
                            @auth
                                <a href="/dashboard" class="my-auto hover:text-taxi text-gray-300 transition">Admin</a>
                            @else
                                <a href="/login" class="my-auto hover:text-taxi text-gray-300 transition ">Espace Chauffeur</a>
                            @endauth
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-center">
                            <span class="text-taxi mr-2">📍</span> Waterloo, Belgique
                        </li>
                        <li class="flex items-center">
                            <span class="text-taxi mr-2">📞</span> 
                            <a class="text-gray-300 my-auto hover:text-taxi transition" href="tel:+32496306040">+32 496 30 60 40</a>
                        </li>
                        <li class="flex items-center">
                            <span class="text-taxi mr-2">✉️</span> 
                            <a href="mailto:info@taxitony.be" class="hover:text-taxi">info@taxitony.be</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/taxitonywaterloo/" target="_blank"><img src="{{ asset('image/facebook.png') }}" alt="facebook" class="w-8 hover:scale-110 transition-transform"></a>
                        <a href="https://wa.me/+32496306040" target="_blank"><img src="{{ asset('image/whatsapp.png') }}" alt="whatsapp" class="w-8 hover:scale-110 transition-transform"></a>
                    </div>
                    <p class="mt-4 text-xs text-gray-500 italic w-40">
                        Suivez nos actualités et promotions sur les réseaux sociaux.
                    </p>
                </div>

            </div>
                </div>
        <div class="bg-gray-800 border-t border-gray-700 p-2 mt-8 flex flex-col md:flex-row justify-center items-center text-xs text-gray-400">
            <p>© {{ date('Y') }} Taxi Tony Waterloo. Tous droits réservés.</p>
        </div>

    </footer>

</body>
</html>