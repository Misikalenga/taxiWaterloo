@extends('layouts.public')

@section('content')

<section id="accueil" class ="bg-gray-950 text-white">
    <!-- Hero Section -->
    <div class="relative py-52 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('image/waterloo.png') }}');">
        <div class="absolute inset-0 bg-black/10"></div>

            <div class="relative z-10  max-w-5xl mx-auto text-center px-4 text-white">
        
                <h1 class="text-4xl md:text-5xl text-taxi font-extrabold mb-6  uppercase leading-tight">
                    Taxi Tony à Waterloo
                </h1>
                <p class="text-2xl text-gray-100">
                    Le partenaire dont vous avez besoin
                </p>
                <div class="mt-10">
                    <a href="{{ route('reservation') }}" 
                       class="group relative inline-flex items-center justify-center px-4 py-2 pl-8 font-bold text-black transition-all duration-300 bg-taxi rounded-xl border-2 border-taxi hover:bg-gray-950 hover:text-taxi shadow-[0_10px_20px_rgba(250,204,21,0.3)] hover:shadow-[0_15px_30px_rgba(0,0,0,0.4)] transform hover:-translate-y-0.5 active:scale-95">

                        <span class="relative flex items-center gap-2">
                            Réservez votre taxi
                            <span class="inline-block transition-all duration-300 transform translate-x-[-10px] opacity-0 group-hover:translate-x-0 group-hover:opacity-100">»</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="absolute -bottom-2 left-0 w-full overflow-hidden leading-[0]">
                <svg class="relative block w-[calc(100%+1.3px)] h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V120H1200V0C1123.15,48,1031.42,76.53,923.63,88.7c-157.14,17.74-279.4-23.7-418.51-40.45C337.33,26.47,175.76,46.12,0,0Z" fill="#111827"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
    <!-- hero fin -->
    <!-- section 2 -->
<section class="bg-gray-900 pt-20 md:pt-32">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

            <div class="lg:col-span-7 space-y-12">
                
                <div class="space-y-4">
                    <span class="text-taxi uppercase tracking-[0.4em] text-xs font-semibold">Service d'Excellence</span>
                    <h2 class="text-4xl md:text-6xl font-medium text-white leading-[1.1] tracking-tight">
                        Transport Privé <br>
                        <span class="text-gray-500 font-light italic">et</span> Professionnel
                    </h2>
                </div>

                <div class="max-w-xl">
                    <p class="text-gray-400 text-lg md:text-xl leading-relaxed font-light">
                        Depuis 25 ans, <span class="text-white">Taxi Tony</span> assure vos déplacements à Waterloo et Rhode-Saint-Genèse. Une ponctualité rigoureuse alliée au confort d'une flotte entretenue.
                    </p>
                </div>

                <div class="flex flex-wrap gap-6 pt-4">
                    <a href="tel:+32496306040" class="group flex items-center gap-8 border border-white/10 px-8 py-5 transition-all duration-500 hover:border-taxi">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-gray-500 mb-1">Centrale 24h/7j</span>
                            <span class="text-2xl font-light text-white tracking-wider group-hover:text-taxi transition-colors">+32 496 30 60 40</span>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center group-hover:bg-taxi group-hover:border-taxi transition-all">
                            <svg class="w-4 h-4 text-white group-hover:text-black transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 pb-20 md:pb-32">
                <div class="bg-white/[0.03] p-10 border border-white/5 relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-4 text-yellow-500/10 hover:-translate-x-5 transition-all duration-500 text-8xl font-bold select-none">TAXI</div>
                    
                    <div class="space-y-8 relative z-10">
                        <div class="space-y-2">
                            <h3 class="text-white text-xl font-medium tracking-wide">Airport Transfer</h3>
                            <div class="h-0.5 w-12 bg-taxi"></div>
                        </div>
                        
                        <p class="text-gray-500 leading-relaxed font-light text-sm md:text-base">
                            Prise en charge personnalisée aux terminaux de Zaventem, Charleroi et gares internationales. Suivi de vol en temps réel pour une attente zéro.
                        </p>

                        <ul class="space-y-4 text-xs uppercase tracking-widest text-gray-400">
                            <li class="flex items-center gap-3 hover:translate-x-5 transition-all duration-500">
                                <span class="w-1.5 h-1.5 bg-taxi rounded-full"></span>
                                Chauffeurs Multilingues
                            </li>
                            <li class="flex items-center gap-3 hover:translate-x-5 transition-all duration-500">
                                <span class="w-1.5 h-1.5 bg-taxi rounded-full"></span>
                                Berlines de standing
                            </li>
                            <li class="flex items-center gap-3 hover:translate-x-5 transition-all duration-500">
                                <span class="w-1.5 h-1.5 bg-taxi rounded-full"></span>
                                Accueil nominatif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="flex justify-center relative">
        <span class="inline-block bg-white translate-y-1/2 relative z-20 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
            Pourquoi nous choisir ?
        </span>
    </div>   
</section>

<!-- section 3 -->
<section class="bg-gray-50 py-24 md:py-32 overflow-x-hidden relative">
    
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] md:w-[1000px] h-[600px] md:h-[1000px] bg-taxi/5 rounded-full blur-3xl -translate-y-1/2 pointer-events-none z-0"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10 text-center">
        
        <div class="space-y-6 mb-16">
            <h2 class="text-3xl md:text-6xl font-bold text-gray-900 tracking-tight leading-tight uppercase">
                L'excellence du transport <br>
                <span class="text-taxi underline decoration-gray-900/10 md:decoration-8 underline-offset-8">à votre service</span>
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light leading-relaxed">
                Plus qu'un simple taxi, nous sommes votre partenaire mobilité pour tous vos déplacements à Waterloo et Rhode-Saint-Genèse.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 mb-24 px-4">
            <div class="p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                <div class="text-2xl mb-3 group-hover:scale-125 flex justify-center transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                        <path d="M325-111.5q-73-31.5-127.5-86t-86-127.5Q80-398 80-480.5t31.5-155q31.5-72.5 86-127t127.5-86Q398-880 480.5-880t155 31.5q72.5 31.5 127 86t86 127Q880-563 880-480.5T848.5-325q-31.5 73-86 127.5t-127 86Q563-80 480.5-80T325-111.5ZM480-162q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[11px] uppercase tracking-widest mb-2">Multilingue</h4>
                <p class="pt-4 text-[11px] text-gray-500 leading-relaxed border-t border-gray-50 mt-4">
                    Communication fluide en Français, Anglais et Néerlandais pour vos clients internationaux et voyages d'affaires.
                </p>
            </div>
            <div class="p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                <div class="text-2xl mb-3 group-hover:scale-125 flex justify-center transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                        <path d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm-99.5 291.5Q275-137 226-186t-77.5-114.5Q120-366 120-440t28.5-139.5Q177-645 226-694t114.5-77.5Q406-800 480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80q-74 0-139.5-28.5ZM678-242q82-82 82-198t-82-198q-82-82-198-82t-198 82q-82 82-82 198t82 198q82 82 198 82t198-82ZM480-440Z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[11px] uppercase tracking-widest mb-2">Ponctualité</h4>
                <p class="pt-4 text-[11px] text-gray-500 leading-relaxed border-t border-gray-50 mt-4">
                    Nous suivons vos vols et trains en temps réel. Pas de stress, votre chauffeur vous attend quoi qu'il arrive.
                </p>
            </div>
            <div class="p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                <div class="text-2xl mb-3 group-hover:scale-125 flex justify-center transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                        <path d="M160-240v-320 13-173 480Zm556 100L576-280q-13-13-18.5-28t-5.5-30q0-32 23-57t59-25q28 0 44 13t38 35q20-20 36.5-34t45.5-14q37 0 59.5 25.5T880-337q0 15-6 30t-18 27L716-140ZM160-640h640v-80H160v80Zm303 480H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v213q-35-25-76.5-39T716-560q-57 0-107.5 21.5T520-480H160v240h279q3 21 9 41t15 39Z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[11px] uppercase tracking-widest mb-2">Prix Fixes</h4>
                <p class="pt-4 text-[11px] text-gray-500 leading-relaxed border-t border-gray-50 mt-4">
                    Transparence totale : le prix annoncé à la réservation est celui que vous payez. Pas de frais de bagages.
                </p>
            </div>
            <div class="p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group md:col-span-2">
                <div class="text-2xl mb-3 group-hover:scale-125 flex justify-center transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                        <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[11px] uppercase tracking-widest mb-2">Standing</h4>
                <p class="pt-4 text-[11px] text-gray-500 leading-relaxed border-t border-gray-50 mt-4">
                    Berlines de luxe entretenues quotidiennement. Confort, discrétion et bouteille d'eau à bord.
                </p>
            </div>
            <div class="p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group col-span-2 md:col-span-1">
                <div class="text-2xl mb-3 group-hover:scale-125 flex justify-center transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                        <path d="M337.5-463Q311-498 289-537q-5 14-6.5 28.5T281-480q0 83 58 141t141 58q14 0 28.5-2t28.5-6q-39-22-74-48.5T396-396q-32-32-58.5-67ZM567-364.5Q630-328 702-308q-40 51-98 79.5T481-200q-117 0-198.5-81.5T201-480q0-65 28.5-123t79.5-98q20 72 56.5 135T453-452q51 51 114 87.5ZM743-380q-20-5-39.5-11T665-405q8-18 11.5-36.5T680-480q0-83-58.5-141.5T480-680q-20 0-38.5 3.5T405-665q-8-19-13.5-38T381-742q24-9 49-13.5t51-4.5q117 0 198.5 81.5T761-480q0 26-4.5 51T743-380ZM440-840v-120h80v120h-80Zm0 840v-120h80V0h-80Zm323-706-57-57 85-84 57 56-85 85ZM169-113l-57-56 85-85 57 57-85 84Zm671-327v-80h120v80H840ZM0-440v-80h120v80H0Zm791 328-85-85 57-57 84 85-56 57ZM197-706l-84-85 56-57 85 85-57 57Zm199 310Z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[11px] uppercase tracking-widest mb-2">Dispo 24/7</h4>
                <p class="pt-4 text-[11px] text-gray-500 leading-relaxed border-t border-gray-50 mt-4">
                    Une centrale opérationnelle jour et nuit pour vos urgences ou vos départs matinaux.
                </p>
            </div>
        </div>

        <div class="space-y-6 mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 tracking-tight leading-tight uppercase">
                L'expérience client est <br>
                <span class="text-taxi underline decoration-gray-900/10 md:decoration-8 underline-offset-8">au cœur de nos trajets</span>
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light leading-relaxed">
                La satisfaction de nos passagers est notre plus belle récompense. Découvrez les témoignages de ceux qui nous font confiance.
            </p>
        </div>

        <div class="max-w-4xl mx-auto px-0 md:px-4 group overflow-hidden">
            <div id="custom-slider" class="flex overflow-x-hidden scroll-smooth snap-x snap-mandatory w-full">

                <div class="slide-item min-w-full snap-center cursor-pointer py-10 px-2 md:px-4">
                    <div class="bg-white p-8 md:p-14 shadow-xl border border-gray-100 flex flex-col items-center space-y-6 rounded-[2rem] md:rounded-[2.5rem] transition-transform active:scale-[0.98] mx-2">
                        <div class="flex gap-1 text-taxi text-xl">★★★★★</div>
                        <p class="text-gray-700 text-base md:text-2xl font-light italic leading-relaxed text-center pointer-events-none">
                            "Service impeccable pour mon transfert vers Zaventem. Ponctuel, voiture très propre et chauffeur d'une grande politesse. Je recommande Taxi Tony sans hésiter."
                        </p>
                        <div class="text-center border-t border-gray-100 pt-6 w-full pointer-events-none">
                            <p class="text-gray-900 font-bold uppercase tracking-widest text-sm">Jean-Marc D.</p>
                            <p class="text-gray-400 text-[10px] uppercase tracking-widest mt-1">Waterloo — Aéroport</p>
                        </div>
                    </div>
                </div>

                <div class="slide-item min-w-full snap-center cursor-pointer py-10 px-2 md:px-4">
                    <div class="bg-white p-8 md:p-14 shadow-xl border border-gray-100 flex flex-col items-center space-y-6 rounded-[2rem] md:rounded-[2.5rem] transition-transform active:scale-[0.98] mx-2">
                        <div class="flex gap-1 text-taxi text-xl">★★★★★</div>
                        <p class="text-gray-700 text-base md:text-2xl font-light italic leading-relaxed text-center pointer-events-none">
                            "Habituée des transports nocturnes, je me sens toujours en sécurité avec Tony. La réservation est simple et le chauffeur parlait parfaitement anglais."
                        </p>
                        <div class="text-center border-t border-gray-100 pt-6 w-full pointer-events-none">
                            <p class="text-gray-900 font-bold uppercase tracking-widest text-sm">Sarah L.</p>
                            <p class="text-gray-400 text-[10px] uppercase tracking-widest mt-1">Rhode-Saint-Genèse — Midi</p>
                        </div>
                    </div>
                </div>

            </div>

            <div id="slider-dots" class="flex justify-center gap-2 mt-4">
                <button class="dot-btn h-3 rounded-full transition-all duration-500 bg-taxi w-8" data-index="0"></button>
                <button class="dot-btn h-3 rounded-full transition-all duration-500 bg-gray-300 w-3" data-index="1"></button>
            </div>
        </div>

        <div class="pt-16 flex flex-col  gap-8 justify-center items-center">
            <a href="{{ route('reservation') }}" class="group relative inline-flex items-center justify-center px-12 py-5 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full md:w-auto">
                <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Réserver mon trajet</span>
                <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
            </a>
            
            <div class="flex flex-col items-center md:items-start group cursor-pointer">
                <span class="text-[10px] uppercase text-gray-400 tracking-widest mb-1 group-hover:text-taxi transition-colors">Appel direct 24h/24</span>
                <a href="tel:+32496306040" class="text-gray-900 font-black border-b-4 border-taxi text-2xl md:text-3xl hover:bg-taxi/10 transition-all">
                    0496 30 60 40
                </a>
            </div>
        </div>

    </div>
    
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('custom-slider');
    const dotBtns = document.querySelectorAll('.dot-btn');
    const slides = document.querySelectorAll('.slide-item');
    let currentIndex = 0;
    const totalSlides = dotBtns.length;
    let autoPlayInterval;

    // Met à jour visuellement les points (Tailwind classes)
    function updateDotStyles(activeIndex) {
        dotBtns.forEach((btn, i) => {
            if (i === activeIndex) {
                btn.classList.replace('bg-gray-300', 'bg-taxi');
                btn.classList.replace('w-3', 'w-8');
            } else {
                btn.classList.replace('bg-taxi', 'bg-gray-300');
                btn.classList.replace('w-8', 'w-3');
            }
        });
    }

    // Déplace le scroll vers la slide demandée
    function goToSlide(index) {
        currentIndex = index;
        slider.scrollTo({
            left: slider.clientWidth * index,
            behavior: 'smooth'
        });
        updateDotStyles(index);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        goToSlide(currentIndex);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 5000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // Clic sur une slide pour passer à la suivante
    slides.forEach((slide) => {
        slide.addEventListener('click', () => {
            nextSlide();
            resetAutoPlay();
        });
    });

    // Clic sur les points de navigation
    dotBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const index = parseInt(btn.getAttribute('data-index'));
            goToSlide(index);
            resetAutoPlay();
        });
    });

    // Synchronisation si l'utilisateur swipe au doigt (mobile)
    slider.addEventListener('scroll', () => {
        const index = Math.round(slider.scrollLeft / slider.clientWidth);
        if (index !== currentIndex) {
            currentIndex = index;
            updateDotStyles(currentIndex);
        }
    });

    startAutoPlay();
});
</script>
<!-- section 4 -->
<section class="bg-gray-900 border-t border-white/5 relative">
    <div class="flex justify-center relative">
        <span class="inline-block bg-white -translate-y-1/2 relative z-30 border border-gray-200 text-gray-500 uppercase tracking-[0.3em] text-md font-bold px-4 py-2 rounded-full shadow-sm">
            Service Global
        </span>
    </div>  

    <div class="max-w-6xl mx-auto px-6 relative z-10 pt-16 md:pt-32 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-24 relative">
            
            <div class="relative">
                <div class="absolute -top-10 -left-6 text-8xl font-black text-white/[0.02] select-none pointer-events-none">01</div>
                <div class="space-y-8 relative z-10">
                    <h3 class="text-white text-xl md:text-2xl font-bold uppercase tracking-wide border-b border-taxi/30 pb-6 leading-tight">
                        Du petit trajet aux déplacements <br>
                        <span class="text-gray-500  italic">nationaux et internationaux</span>
                    </h3>
                    <div class="space-y-6 text-gray-400  leading-relaxed text-sm md:text-base">
                        <p>Que vous souhaitiez vous rendre à un rendez-vous en ville, à l’hôpital, à l’aéroport ou encore rentrer chez vous la nuit sans aucun risque, nous sommes à votre disposition.</p>
                        <p>Nous nous déplaçons à travers la Belgique (Waterloo, Lasne, Rhode-Saint-Genèse, La Hulpe, Braine-l’Alleud, Lillois-Witterzée, Nivelles, Alsemberg, Dworp, Braine-le-Château, Braine-le-Comte, Genval, etc.), mais nous pouvons également effectuer des transports à l’international, notamment en France et aux Pays-Bas. N’hésitez pas à nous faire part de vos besoins concernant d’autres pays ; nous vous répondrons rapidement.</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-10 -left-6 text-8xl font-black text-white/[0.02] select-none pointer-events-none">02</div>
                <div class="space-y-8 relative z-10">
                    <h3 class="text-white text-xl md:text-2xl font-bold uppercase tracking-wide border-b border-taxi/30 pb-6 leading-tight">
                        Un service professionnel <br>
                        <span class="text-gray-500  italic">pour tous</span>
                    </h3>
                    <div class="space-y-6 text-gray-400  leading-relaxed text-sm md:text-base">
                        <p>Nous proposons un service de shuttle pour l’aéroport afin que vous arriviez à l’heure pour votre vol sans vous inquiéter de votre stationnement.</p>
                        <p>Nous sommes également formés pour transporter les personne âgées à bon port. Nous pouvons alors rassurer la famille et les proches lors de leur arrivée.</p>
                        <p>Vous avez besoin d’un service VIP ? Faites-nous part de vos attentes. Nos véhicules (berlines et monovolumes), spacieux et modernes, vous assurent un trajet dans un confort absolu.</p>
                    </div>
                </div>
            </div>

        </div>
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
        
        <a href="tel:+32496306040" class="block text-4xl md:text-5xl font-black text-gray-900 transition-all duration-300 tracking-tighter hover:-translate-y-1">
            0496 30 60 40
        </a>

        <div class="space-y-3 border-l-2 border-gray-100 pl-6">
            <div class="flex items-center gap-3">
                <svg class="w-4 h-4 text-taxi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <p class="text-gray-600 text-sm font-medium tracking-wide">Rue François Libert 27, 1410 Waterloo</p>
            </div>
            <div class="flex items-center gap-3">
                <svg class="w-4 h-4 text-taxi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <a href="mailto:taxitony@live.com" class="text-gray-600 text-sm font-medium hover:-translate-y-1 transition-all duration-300 tracking-tighte">taxitony@live.com</a>
            </div>
        </div>

        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <span class="h-px w-8 bg-taxi"></span>
                <p class="text-gray-500 text-[10px] uppercase tracking-widest font-bold">Communication fluide : Français & Anglais</p>
            </div>

            <a href="mailto:taxitony@live.com" class="inline-flex items-center justify-center px-8 py-3 bg-gray-900 text-white text-xs uppercase tracking-[0.2em] font-bold rounded-none hover:bg-taxi hover:text-black transition-all duration-300 shadow-xl">
                Contactez-nous
            </a>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</section>

@endsection