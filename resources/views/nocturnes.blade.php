@extends('layouts.public')

@section('content')

    <section class="bg-gray-900 py-20 md:py-32 relative overflow-hidden">

        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-taxi/10 blur-[120px] rounded-full pointer-events-none opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-500/5 blur-[100px] rounded-full pointer-events-none opacity-20"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">

            <div class="mb-20 text-center md:text-left">
                <span class="text-taxi uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Disponibilité 24h/24 & 7j/7</span>
                <h1 class="text-5xl md:text-8xl font-medium text-white leading-tight mb-12">
                    Service fiable <br>
                    <span class="text-gray-500 font-light italic">& disponible la nuit</span>
                </h1>

                <div>
                    <a href="{{ route('tarifs') }} " class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-black text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full md:w-auto">
                        <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Découvrez nos tarifs</span>
                        <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

                <div class="md:col-span-8 bg-white/[0.02] border border-white/5 p-8 md:p-12 rounded-[2.5rem] hover:border-taxi/30 transition-all duration-500 group">
                    <h2 class="text-white text-2xl font-bold mb-10 uppercase tracking-widest flex items-center gap-4">
                        <span class="w-8 h-px bg-taxi"></span>
                        Pourquoi choisir notre taxi de nuit ?
                    </h2>

                    <div class="grid md:grid-cols-2 gap-10 ">
                        <div class="space-y-4">
                            <h3 class="text-taxi font-bold  uppercase tracking-wider">Sécurité & Sérénité</h3>
                            <p class="text-gray-400 group-hover:text-gray-300 duration-300 transition-all font-light leading-relaxed ">
                                Nos chauffeurs expérimentés connaissent la région sur le bout des doigts, même en pleine nuit. Profitez d’un trajet calme et sécurisé, peu importe l'heure.
                            </p>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-taxi font-bold  uppercase tracking-wider">Disponibilité Totale</h3>
                            <p class="text-gray-400 group-hover:text-gray-300 duration-300 transition-all font-light leading-relaxed ">
                                Passée une certaine heure, les transports se font rares. Chez {{config('app.name')}}, un coup de fil suffit pour que nous soyons là dans les plus brefs délais.
                            </p>
                        </div>
                    </div>

                    <div class="mt-12 p-6 bg-white/[0.03] hover:bg-white/5 rounded-3xl border border-white/5 flex flex-col md:flex-row items-center gap-6">
                        <div class="text-gray-400 group-hover:text-gray-300 duration-300 transition-all   font-light">
                            <span class="text-taxi font-bold uppercase block mb-1">Confort & Discrétion</span>
                            Véhicules propres et conçus pour un confort maximal. Nous respectons votre espace et votre intimité.
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 bg-taxi p-8 md:p-10 flex flex-col justify-between group relative overflow-hidden rounded-[2.5rem] transition-transform duration-500 hover:scale-[1.02]">
                    <div>
                        <h2 class="text-black text-xl font-bold uppercase mb-8 leading-tight">Quand faire appel à nous ?</h2>
                        <ul class="space-y-4">
                            @php
                                $reasons = [
                                    "Retour de soirée ou festival",
                                    "Arrivée tardive (Aéroport/Gare)",
                                    "Départ matinal en vacances",
                                    "Urgence médicale non vitale",
                                    "Déplacement pro hors horaires"
                                ];
                            @endphp
                            @foreach($reasons as $reason)
                                <li class="flex items-start gap-3 text-gray-700 font-medium text-xs uppercase tracking-wide group-hover:text-black transition-colors">
                                    <span >✔</span> {{ $reason }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="relative hidden md:block z-10 mt-10">
                        <a href="{{ route('reservation') }}" class="outline outline-2 outline-black -outline-offset-1 group-hover:text-white relative inline-flex items-center justify-center px-8 py-4 bg-taxi text-black font-bold transition-all overflow-hidden rounded-xl shadow-xl active:scale-95 w-full">
                            <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Appeler</span>
                            <div class="absolute inset-0 bg-black scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                        </a>
                    </div>

                    <div class="relative md:hidden z-10 mt-10">
                        <a href="{{ route('reservation') }}" class="group-hover:outline outline-3 outline-black -outline-offset-1 group-hover:text-black relative inline-flex items-center justify-center px-8 py-4 bg-black text-white font-bold transition-all overflow-hidden rounded-xl shadow-xl active:scale-95 w-full">
                            <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Appeler</span>
                            <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                        </a>
                    </div>
                </div>

                <div class="md:col-span-12 group hover:border-taxi/30 bg-white/[0.02]  duration-300 transition-all border border-white/5 p-8 md:p-12 rounded-[2.5rem] relative overflow-hidden">
                    <div class="max-w-3xl">
                        <p class="text-gray-400 group-hover:text-gray-300 text-lg md:text-xl font-light leading-relaxed">
                            Vous avez fait la fête toute la nuit ? Votre vol a accumulé du retard ? <span class="text-white font-medium italic">Pas de panique !</span> <br><br>
                            <span class="text-taxi uppercase">{{config('app.name')}}</span> assure tous vos déplacements de nuit, quelle que soit l’heure et la région. Notre service est fiable : vous êtes certain(e) d’arriver à bon port en toute sérénité.
                        </p>
                    </div>
                    <div class="absolute right-12 bottom-12 opacity-10 hidden md:block">
                        <svg class="w-32 h-32 text-white group-hover:text-taxi duration-300 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3c.132 0 .263 0 .393.007a9 9 0 0 0 7.599 15.985A9 9 0 1 1 12 3z"/></svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection