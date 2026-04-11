@extends('layouts.public')

@section('content')

    <section class="bg-gray-900 pb-20 overflow-visible relative z-20">
        <div class="flex justify-center relative">
            <span class="inline-block bg-white -translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
                Tarifs
            </span>
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-20">
            <div id="price-slider" class="flex overflow-x-auto gap-6  py-10 no-scrollbar">


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
            const scrollSpeed = 10; // Vitesse ajustée pour être fluide
            const edgeSize = 150;  

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

@endsection