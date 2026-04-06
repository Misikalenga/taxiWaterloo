@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <section id="accueil" class ="bg-gray-950 text-white">
    
        <div class="relative py-40 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('image/avion.png') }}');">
            <div class="absolute inset-0 bg-black/10"></div>
        </div>
    </section>
    <!-- hero fin -->
    <section class="bg-gray-900 pb-20 overflow-visible relative z-20">
        <div class="flex justify-center relative">
            <span class="inline-block bg-white -translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
                Tarifs
            </span>
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-20">
            <div id="price-slider" class="flex overflow-x-auto gap-6 scroll-smooth  py-10 no-scrollbar">


                @foreach($prices as $price)
                <div class="min-w-[280px] md:min-w-[320px] snap-center group relative bg-white/[0.03] p-8 rounded-[2rem] border border-white/5 transition-all duration-500 hover:bg-white/[0.07] hover:-translate-y-2 hover:border-taxi/50">

                    <div class="flex flex-col h-full justify-between space-y-8">
                        <div class="space-y-4">
                            <div class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center group-hover:bg-taxi transition-colors duration-500">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>

                            <h3 class="text-lg font-bold text-white leading-tight uppercase tracking-wide">
                                {{ $price->departure }} <br>
                                <span class="text-gray-600 font-light italic lowercase text-base">vers</span> <br>
                                {{ $price->destination }}
                            </h3>
                        </div>

                        <div class="flex flex-col border-t border-white/5 pt-6">
                            <div class="flex items-baseline gap-1">
                                <span class="text-3xl font-black text-white group-hover:text-taxi transition-colors">{{ $price->amount }}</span>
                                <span class="text-sm font-bold text-taxi uppercase">@if(is_numeric($price->amount)) € @endif</span>
                            </div>
                            @if($price->extras)
                                <span class="text-[10px] text-gray-500 uppercase tracking-widest mt-1">+ {{ $price->extras }}</span>
                            @endif
                        </div>

                        <a href="{{ route('reservation', ['trajet' => Str::slug($price->departure.'-vers-'.$price->destination)]) }}" 
                           class="flex items-center justify-center gap-2 py-3 px-4 bg-black border border-white/10 rounded-xl text-[10px] font-bold uppercase tracking-widest text-white transition-all duration-300 hover:bg-taxi hover:text-black  group-hover:border-taxi/30">
                            <span>Réserver</span>
                            <span class="translate-x-0 hidden group-hover:block transition-transform">→</span>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="flex justify-center items-center gap-4 mt-4">
                <span class="h-px w-12 bg-white/10"></span>
                <p class="text-gray-600 text-xs uppercase tracking-[0.2em]">Glissez pour voir les tarifs</p>
                <span class="h-px w-12 bg-white/10"></span>
            </div>
        </div>
    </section>

    <style>
        /* Masquer la scrollbar tout en gardant le scroll fonctionnel */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('price-slider');
            if (!slider) return;

            let scrollInterval;
            const scrollSpeed = 20; // Vitesse ajustée pour être fluide
            const edgeSize = 200;  

            // Fonction de vérification de la taille de l'écran
            const isDesktop = () => window.innerWidth >= 768;

            slider.addEventListener('mousemove', (e) => {
                // Si on est sur mobile, on ne fait rien
                if (!isDesktop()) return;

                const rect = slider.getBoundingClientRect();
                const x = e.clientX - rect.left;

                clearInterval(scrollInterval);

                if (x < edgeSize) {
                    scrollInterval = setInterval(() => {
                        slider.scrollLeft -= scrollSpeed;
                    }, 10);
                } else if (x > rect.width - edgeSize) {
                    scrollInterval = setInterval(() => {
                        slider.scrollLeft += scrollSpeed;
                    }, 10);
                }
            });

            // Sécurité supplémentaire : arrêter tout scroll si on quitte la zone
            // ou si on lève le doigt (touchevent)
            const stopScroll = () => clearInterval(scrollInterval);

            slider.addEventListener('mouseleave', stopScroll);
            slider.addEventListener('mouseup', stopScroll);
            slider.addEventListener('touchend', stopScroll); // Force l'arrêt sur mobile au cas où
        });
    </script>
    <section class="bg-gray-900 relative">
        <div class="flex justify-center relative  border border-gray-950 ">
            <span class="inline-block bg-white translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
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
@endsection