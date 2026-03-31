<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name', 'Taxi Tony') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <nav class="bg-gray-900 text-black sticky top-0 z-50 shadow-lg">
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
                <div class="hidden md:flex space-x-6 text-md font-medium px-4">
                    <a href="{{ route('home') }}" class="my-auto  text-white hover:text-taxi transition">Accueil</a>
                    <a href="{{ route('tarifs') }}" class="my-auto text-white hover:text-taxi transition">Tarifs</a>
                    <a href="{{ route('services') }}" class="my-auto text-white hover:text-taxi transition">Nos services</a>
                    <a href="{{ route('nocturnes') }}" class="my-auto text-white hover:text-taxi transition">Transports nocturnes</a>
                    <a href="{{ route('home') }}" class="my-auto  text-white hover:text-taxi transition">Reservation</a>
                </div>    

                    
                    <a href="#reservation" class="bg-taxi text-black flex px-1 py-1 rounded font-bold hover:bg-yellow-500 transition"><img src="{{ asset('image/panier.png') }}" alt="Panier" class="w-6 h-6"> <span class="text-sm mt-auto" id="cart-count">0</span></a>
                
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    
                        
    <footer class="bg-gray-900 text-white mt-12">
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
                        <li><a href="#reservation" class="hover:text-taxi transition">Réserver une course</a></li>
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