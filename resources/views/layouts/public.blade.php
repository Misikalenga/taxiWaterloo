<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name', 'Taxi Tony') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <nav class="absolute bg-gray-900 text-black w-full top-0  z-50 shadow-lg">
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
                <a class="flex-shrink-0 font-bold text-2xl text-taxi uppercase" href="{{ route('home') }}">
                    {{ config('app.name', 'Taxi Tony') }}
                </a>
                <div class="hidden md:flex space-x-6  text-md font-medium px-4">
                    <a href="{{ route('home') }}" class="my-auto  text-white hover:text-taxi transition">Accueil</a>
                    <a href="{{ route('tarifs') }}" class="my-auto text-white hover:text-taxi transition">Tarifs</a>
                    <a href="{{ route('services') }}" class="my-auto text-white hover:text-taxi transition">Nos services</a>
                    <a href="{{ route('nocturnes') }}" class="my-auto text-white hover:text-taxi transition">Transports nocturnes</a>
                    
                </div>    
                    <a href="{{ route('reservation') }}" class="group hidden md:block hover:outline outline-2 outline-gray-950 -outline-offset-1 relative inline-flex items-center justify-center px-4 py-2 bg-taxi text-black hover:text-taxi font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 md:w-auto">
                        <span class="relative z-10 text-md">Réservez<span class="hidden lg:inline">  votre  taxi </span></span>
                        <div class="absolute inset-0 bg-gray-950 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
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

    <div id="floating-cart" class="fixed bottom-8 right-8 z-[9000] hidden transition-all duration-300 transform translate-x-20 opacity-0 flex space-x-4">
        <a href="{{ route('reservation') }}" class="group relative inline-flex items-center justify-center px-3 py-2 bg-taxi font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 hover:border-gray-900 border-2 border-taxi  md:w-auto"> 
            <img src="{{ asset('image/panier.png') }}" alt="Panier" class="w-6 h-6 relative z-10"> 
            <span class="text-sm mt-1 relative z-10 text-black" id="cart-count">
                0
            </span>
        </a>
        <a href="{{ route('reservation') }}" class="group hover:border-gray-900 border-2 border-taxi  relative inline-flex items-center justify-center px-4 py-2 bg-taxi text-black font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 md:w-auto">
            <span class="relative z-10 text-md">Réservez votre taxi</span>
        </a>
    </div>

    <main class="min-h-screen z-10 relative mt-24">

        <!-- Hero Section -->
        @if(Route::currentRouteName() !== 'home')
            <section id="accueil" class ="bg-gray-950 text-white">

                <div class="relative py-40 bg-cover bg-center bg-fixed" 
                    style="background-image:
                        @if(Route::currentRouteName() === 'tarifs')
                            url('{{ asset('image/tarifs.png') }}')
                        @elseif(Route::currentRouteName() === 'services')
                            url('{{ asset('image/services.png') }}')
                        @elseif(Route::currentRouteName() === 'nocturnes')
                            url('{{ asset('image/nocturnes.png') }}')
                        @elseif(Route::currentRouteName() === 'emploi')
                            url('{{ asset('image/emploi.png') }}')
                        @elseif(Route::currentRouteName() === 'contact')
                            url('{{ asset('image/contact.png') }}')
                        @elseif(Route::currentRouteName() === 'reservation')
                            url('{{ asset('image/reservation.png') }}')
                        @endif
                    ;">
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>

                <div class="flex justify-center w-full absolute">
                    <span class="inline-block bg-white -translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
                        {{ Route::currentRouteName() }}
                    </span>
                </div>
            </section>
        @endif
        <!-- hero fin -->

        @yield('content')
    </main>

    @if (Route::currentRouteName() !== 'contact')
        <!-- contact -->
        <section class="bg-gray-900 relative">
            <div class="flex justify-center w-full absolute">
                <span class="inline-block bg-white -translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
                    Contactez-nous
                </span>
            </div>  
            <div class="bg-gray-50 relative z-10 py-20 md:py-32 overflow-hidden border-t border-gray-200">

                <div class="absolute right-0 top-1/2 -translate-y-1/2 text-gray-200/40 text-[15rem] font-black pointer-events-none uppercase tracking-tighter">
                    Tony
                </div>

                <div class="max-w-6xl mx-auto px-6 relative z-10">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-12">

                        <div class="max-w-2xl">
                            <div class="w-12 h-1 bg-taxi mb-8"></div>
                            <p class="text-2xl md:text-3xl text-gray-800 font-light leading-snug tracking-tight">
                                Notre compagnie de taxis <span class="text-black font-bold">Taxi Tony</span> est située à <span class="italic">Rhode-Saint-Genèse</span>, à côté de Waterloo. 
                                Avec plus de <span class="text-gray-500 underline decoration-taxi decoration-4 underline-offset-4">25 ans d'expérience</span>, notre équipe est prête jour et nuit.
                            </p>
                        </div>

                        <div class="w-full lg:w-auto">
                            <div class="space-y-8">
                                <div class="space-y-1">
                                    <h2 class="text-black text-sm font-bold uppercase tracking-[0.3em]">Commandez votre taxi</h2>
                                    <p class="text-gray-400 text-xs italic tracking-widest uppercase">7j/7 et 24h/24 !</p>
                                </div>

                                <a href="tel:+32496306040" class="block text-4xl md:text-5xl font-black text-gray-900 transition-all duration-300 tracking-tighter hover:scale-105">
                                    0496 30 60 40
                                </a>

                                <div class="space-y-3 border-l-2 border-gray-100 pl-6">
                                    <div class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-taxi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <p class="text-gray-600 text-sm font-medium tracking-wide">Rue François Libert 27, 1410 Waterloo</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <svg class="w-4 h-4 text-taxi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        <a href="mailto:taxitony@live.com" class="text-gray-600 text-sm font-medium hover:scale-105 transition-all duration-300 tracking-tighte">taxitony@live.com</a>
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    <div class="flex items-center gap-4">
                                        <span class="h-px w-8 bg-taxi"></span>
                                        <p class="text-gray-500 text-[10px] uppercase tracking-widest font-bold">Communication fluide : Français & Anglais</p>
                                    </div>

                                    <a href="{{ route('contact') }}" class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-4 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full md:w-auto">
                                        <span class="relative z-10 uppercase tracking-[0.2em] text-md">Contactez-nous</span>
                                        <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif  




    <!-- Footer -->
                        
    <footer class="bg-gray-900 text-white ">
        <div class="bg-gray-800 py-2 border-b border-gray-800"></div>
        <div class="max-w-7xl mx-auto pt-12 px-4 sm:px-6 lg:px-8">
            <div class=" grid grid-cols-2 md:flex md:justify-between md:gap-8">

                <div class="col-span-2 w-64 mb-8 md:mb-0">
                    <a class="text-taxi font-bold text-xl mb-4 uppercase" href="{{ route('home') }}">
                        {{ config('app.name', 'Taxi Tony') }}
                    </a>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Votre partenaire de confiance pour tous vos déplacements à Waterloo et ses environs. 
                        Disponible 24h/24 et 7j/7 pour vous conduire à destination en toute sécurité.
                    </p>
                </div>

                <div class="mb-8 md:mb-0">
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

                <div class="mb-8 md:mb-0">
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

                <div class="mb-8 md:mb-0">
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