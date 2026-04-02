@extends('layouts.public')

@section('content')

<section id="accueil" class ="bg-gray-950 text-white">
    <!-- Hero Section -->
    <div class="relative py-64 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('image/waterloo.png') }}');">
        <div class="absolute inset-0 bg-black/10"></div>

            <div class="relative z-10  max-w-5xl mx-auto text-center px-4 text-white">
        
                <h1 class="text-4xl md:text-5xl text-taxi font-extrabold mb-6  uppercase leading-tight">
                    Taxi Tony à Waterloo
                </h1>
                <p class="text-2xl text-gray-100">
                    Le partenaire dont vous avez besoin
                </p>
                <div class="mt-10">
                    <a href="{{ route('reservation') }}" class="bg-taxi group text-black px-6 py-3 rounded-xl font-bold shadow-2xl hover:bg-gray-950 border-2 border-taxi  hover:shadow-lg transition">
                        <span class="inline-block group-hover:-translate-y-1 group-hover:text-taxi transition">Réservez votre taxi</span>
                    </a>
                </div>
            </div>
        </div>
    
    <!-- hero fin -->

    <div class="bg-black py-12 md:py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="space-y-10">

                    <div class="relative p-8 rounded-3xl bg-blue-600/10 border border-blue-500/20 shadow-2xl shadow-blue-900/20">
                        <div class="absolute -top-4 left-6 bg-blue-600 text-white text-xs font-black tracking-[0.2em] uppercase px-4 py-1.5 rounded-lg shadow-lg">
                            Service Premium
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 flex items-center gap-3">
                            <span class="text-blue-400">✈️</span> Airport Transfer
                        </h3>

                        <p class="text-blue-100/80 leading-relaxed mb-4">
                            Simplifiez vos départs et arrivées. Nous suivons l'état de votre vol en temps réel pour vous garantir une prise en charge ponctuelle, sans stress, directement à la sortie du terminal.
                        </p>

                        <div class="flex items-center gap-2 text-blue-400 font-bold italic">
                            <span class="h-px w-8 bg-blue-400"></span>
                            "We drive, you fly"
                        </div>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-white leading-tight uppercase">
                        Votre Taxi <span class="text-taxi">24h/7j</span> <br>
                        à Waterloo & environs
                    </h2>

                    <div class="space-y-6 text-gray-400 text-lg leading-relaxed">
                        <p>
                            Basée à <span class="text-white font-semibold">Rhode-Saint-Genèse</span>, l'équipe de <span class="text-taxi font-semibold">Taxi Tony</span> met ses 25 ans d'expertise à votre service pour tous vos trajets locaux et internationaux.
                        </p>
                    </div>

                    <div class="pt-4">
                        <a href="tel:+32496306040" class="group inline-flex items-center gap-5 bg-white text-black px-8 py-5 rounded-2xl shadow-2xl hover:bg-taxi transition-all transform hover:-translate-y-1">
                            <div class="bg-black p-2 rounded-xl text-taxi group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col items-start">
                                <span class="text-xs uppercase font-bold text-gray-500 tracking-tighter">Appel direct 24h/24</span>
                                <span class="text-2xl font-black tracking-wider">0496 30 60 40</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-4 bg-taxi/10 blur-3xl rounded-full"></div>

                    <div class="relative bg-gray-900/50 backdrop-blur-xl rounded-[2.5rem] p-8 md:p-12 border border-white/5 shadow-2xl">
                        <div class="space-y-10">
                            <div class="flex gap-6">
                                <div class="shrink-0 w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-taxi text-xl font-bold border border-white/10">
                                    FR
                                </div>
                                <p class="text-gray-300 text-lg italic leading-relaxed">
                                    "Maîtrisant plusieurs langues (Français, Anglais, Néerlandais), notre équipe assure une communication fluide pour tous vos déplacements."
                                </p>
                            </div>

                            <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

                            <div class="space-y-5">
                                <p class="text-white font-bold text-center lg:text-left">Consultez nos services & prix :</p>

                                <div class="grid grid-cols-1 gap-4">
                                    <a href="{{ route('tarifs') }}" class="group flex items-center justify-between bg-white/5 border border-white/10 p-5 rounded-2xl hover:bg-white/10 transition-all">
                                        <span class="text-white font-bold tracking-wide">Liste des tarifs</span>
                                        <span class="text-taxi transform group-hover:translate-x-2 transition-transform text-2xl font-black">≫</span>
                                    </a>

                                    <a href="{{ route('contact') }}" class="flex items-center justify-center w-full bg-taxi text-black font-black py-5 rounded-2xl hover:bg-yellow-400 transition-all shadow-[0_0_20px_rgba(250,204,21,0.2)]">
                                        Plus d'infos & Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


        <p class="text-lg text-gray-200 mb-10 text-center max-w-3xl mx-auto">
            Notre compagnie de taxis Taxi Tony est située à Rhode-Saint-Genèse, à côté de Waterloo. 
            Avec plus de 25 ans d'expérience, notre équipe est prête jour et nuit.
        </p>

        <div class="bg-taxi text-dark rounded-2xl p-8 text-center shadow-2xl transform hover:scale-105 transition duration-300">
            <h2 class="text-2xl font-bold mb-2">Commandez votre taxi 7j/7 et 24h/24 !</h2>
            <p class="text-3xl font-black mb-4">0496 30 60 40</p>
            <p class="text-sm opacity-90 italic">Communication fluide en français et anglais.</p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-black/40 backdrop-blur-sm p-6 rounded-xl border border-white/10">
                <h3 class="text-xl font-bold mb-3 border-b-2 border-taxi pb-2 text-taxi">Du petit trajet à l'international</h3>
                <p class="text-gray-300">Que ce soit pour un rendez-vous en ville, l'hôpital, l'aéroport ou rentrer chez vous la nuit, nous couvrons la Belgique, la France et les Pays-Bas.</p>
            </div>
            <div class="bg-black/40 backdrop-blur-sm p-6 rounded-xl border border-white/10">
                <h3 class="text-xl font-bold mb-3 border-b-2 border-taxi pb-2 text-taxi">Un service professionnel</h3>
                <p class="text-gray-300">Service shuttle aéroport, transport de personnes âgées et service VIP dans des berlines ou monovolumes pour un confort absolu.</p>
            </div>
        </div>
    </div>
</section>

@endsection