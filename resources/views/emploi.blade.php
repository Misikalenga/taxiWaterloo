@extends('layouts.public')

@section('content')

    <section class="bg-gray-900 py-20 md:py-32 relative overflow-hidden">

        <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-taxi/5 blur-[120px] rounded-full pointer-events-none opacity-30"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-white/5 blur-[100px] rounded-full pointer-events-none opacity-10"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">

            <div class="mb-20">
                <span class="text-taxi uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Rejoignez l'équipe</span>
                <h1 class="text-5xl md:text-8xl font-medium text-white leading-tight mb-12">
                    Nos offres <br>
                    <span class="text-gray-500 font-light italic">d'emploi</span>
                </h1>

                <p class="text-gray-400 text-lg max-w-2xl font-light leading-relaxed mb-12">
                    Taxi Tony à Waterloo se développe. Nous sommes constamment à la recherche de nouveaux talents pour offrir un service d'excellence à notre clientèle.
                </p>

                <a href="mailto:taxitony@live.com" class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-black text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full md:w-auto">
                    <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Postuler maintenant</span>
                    <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <div class="bg-white/[0.02]  border border-white/5 p-10 md:p-14 rounded-[2.5rem] hover:border-taxi/30 transition-all duration-500">
        <div class="mb-12">
            <h2 class="text-white text-3xl font-bold uppercase tracking-widest mb-2">Profil Recherché</h2>
            <div class="w-12 h-1 bg-taxi"></div>
        </div>

        <div class="space-y-10">
            <div class="flex gap-6 group">
                <span class="text-taxi font-black text-xl">01.</span>
                <div>
                    <h3 class="text-white font-bold uppercase text-xs tracking-[0.2em] mb-3">Chauffeur de Taxi</h3>
                    <p class="text-gray-400 font-light group-hover:text-gray-300 duration-300 transition-all leading-relaxed">
                        Nous recherchons des chauffeurs motivés, ayant une excellente présentation et un sens du contact client irréprochable.
                    </p>
                </div>
            </div>

            <div class="flex gap-6 group">
                <span class="text-taxi font-black text-xl">02.</span>
                <div>
                    <h3 class="text-white font-bold uppercase text-xs tracking-[0.2em] mb-3">Âge & Expérience</h3>
                    <p class="text-gray-400 font-light group-hover:text-gray-300 duration-300 transition-all leading-relaxed">
                        Âge minimum requis : <span class="text-taxi font-medium">25 ans</span>. Une bonne connaissance de la région est un atout.
                    </p>
                </div>
            </div>

            <div class="flex gap-6 group">
                <span class="text-taxi font-black text-xl">03.</span>
                <div>
                    <h3 class="text-white font-bold uppercase text-xs tracking-[0.2em] mb-3">Disponibilité</h3>
                    <p class="text-gray-400 font-light group-hover:text-gray-300 duration-300 transition-all leading-relaxed">
                        Flexibilité demandée : disponible au moins <span class="text-taxi font-medium italic">un week-end par mois</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-8">
        <div class="bg-taxi p-10 rounded-[2.5rem] flex-1 transition-transform duration-500 hover:scale-[1.02]">
            <h2 class="text-black text-2xl font-black uppercase mb-8">Ce que nous proposons</h2>
            <ul class="grid grid-cols-1 gap-4">
                <li class="flex items-start gap-3 font-medium text-xs uppercase tracking-wide text-black transition-colors">
                    <span >✔</span>
                    Conditions de travail intéressantes
                </li>
                <li class="flex items-start gap-3 font-medium text-xs uppercase tracking-wide text-black transition-colors">
                    <span >✔</span>
                    Équipe jeune et dynamique
                </li>
                <li class="flex items-start gap-3 font-medium text-xs uppercase tracking-wide text-black transition-colors">
                    <span >✔</span>
                    Service d'excellence
                </li>
            </ul>
        </div>

        <div class="bg-white/[0.02]  border border-white/5 hover:border-taxi/30 transition-all duration-500  p-10 rounded-[2.5rem] flex flex-col justify-center items-center text-center ">
            <p class="text-gray-500 text-xs hover:text-gray-300 duration-300 transition-all uppercase tracking-[0.3em] mb-6">Prêt à nous rejoindre ?</p>
            
            <a href="mailto:taxitony@live.com" class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full">
                <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Postuler maintenant</span>
                <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
            </a>
            
            <p class="mt-6 text-gray-400 hover:text-gray-300 duration-300 transition-all text-xs font-light">Envoyez CV + Lettre de motivation</p>
        </div>
    </div>

</div>
        </div>
    </section>

@endsection