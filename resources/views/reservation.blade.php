@extends('layouts.public')

@section('content')

    <section class="bg-gray-900 py-20 md:py-32 relative overflow-hidden">

        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-taxi/5 blur-[120px] rounded-full pointer-events-none opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="mb-16">
                <span class="text-taxi uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Planifiez votre trajet</span>
                <h2 class="text-4xl md:text-7xl font-medium text-white leading-tight">
                    Réservez votre <br>
                    <span class="text-gray-500 font-light italic">chauffeur privé</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <div class="lg:col-span-5 space-y-8">
                    <div class="bg-white/[0.02] border border-white/5 p-10 rounded-[2.5rem]  hover:border-taxi/30 transition-all duration-500">
                        <h3 class="text-white text-2xl font-bold uppercase tracking-widest mb-6 flex items-center gap-4">
                            <span class="w-8 h-px bg-taxi"></span>
                            Informations
                        </h3>
                        <p class="text-gray-300 font-light leading-relaxed mb-8">
                            Toutes nos réservations sont confirmées par SMS ou e-mail. Pour les demandes urgentes (moins de 2 heures), privilégiez l'appel direct.
                        </p>

                        <div class="space-y-4">
                            <div class="w-full">
                                <a href="tel:0496306040" class="group w-full hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-4 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full ">
                                    <span class="relative z-10 uppercase tracking-[0.2em] text-md">Contactez-nous</span>
                                    <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                                </a>
                            </div>
                            <div class="p-6 bg-white/5 rounded-xl border border-white/5">
                                <span class="text-gray-400 font-bold uppercase text-[10px] tracking-widest block mb-1">Disponibilité</span>
                                <span class="text-white font-medium uppercase text-sm italic">7j/7 et 24h/24</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-taxi p-10 rounded-[2.5rem]">
                        <h4 class="text-black font-black uppercase text-sm mb-2">Transparence totale</h4>
                        <p class="text-black/80 text-xs font-medium leading-relaxed uppercase tracking-wide">
                            Nos prix sont fixes pour les aéroports. Pas de mauvaise surprise, même en cas de trafic.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-white/[0.02] border border-white/5 p-8 md:p-14 rounded-[2.5rem] shadow-2xl hover:border-taxi/30 transition-all duration-500">
                    <form id="reservation" action="#" method="POST" class="space-y-6">

                        <div class="space-y-2">
                            <label class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] ml-4">Choisissez votre forfait</label>
                            <div class="relative">
                                <select name="trajet" class="w-full bg-gray-900 border border-white/10 text-white rounded-2xl p-4 appearance-none focus:outline-none focus:border-taxi transition-colors cursor-pointer">
                                    @foreach($prices as $price)
                                        <option value="{{ Str::slug($price->departure.'-vers-'.$price->destination) }}">{{ $price->departure }} → {{ $price->destination }} @if(is_numeric($price->amount)) - {{ $price->amount }}€ @endif</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-taxi">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-gray-500 text-[10px] font-bold uppercase tracking-widest ml-4">Nom complet</label>
                                <input id="name" type="text" placeholder="John Doe" class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 text-white text-sm focus:outline-none focus:border-taxi transition-colors">
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-500 text-[10px] font-bold uppercase tracking-widest ml-4">Téléphone</label>
                                <input id="tel"type="tel" placeholder="04XX XX XX XX" class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 text-white text-sm focus:outline-none focus:border-taxi transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-gray-500 text-[10px] font-bold uppercase tracking-widest ml-4">Date de prise en charge</label>
                                <input type="date" class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 text-white text-sm focus:outline-none focus:border-taxi transition-colors">
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-500 text-[10px] font-bold uppercase tracking-widest ml-4">Heure souhaitée</label>
                                <input type="time" class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 text-white text-sm focus:outline-none focus:border-taxi transition-colors">
                            </div>
                        </div>

                        <div class="pt-6">
                            <button id="next" class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-2xl shadow-2xl active:scale-95 w-full">
                                <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Réserver</span>
                                <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                            </button>
                        </div>
                        
                        <div class="pt-6">
                            <button type="submit" class="group hidden hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-2xl shadow-2xl active:scale-95 w-full">
                                <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Confirmer ma réservation</span>
                                <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* Style spécifique pour masquer l'icône calendrier par défaut sur les inputs sombres sur certains navigateurs */
        input[type="date"]::-webkit-calendar-picker-indicator,
        input[type="time"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }
    </style>

    <script>
        // Script pour gérer la soumission du formulaire de réservation
        next = document.getElementById('next');
        next.document.addEventListener('click', ()=>{
            next.classListt.remove('hidden');
        })
        tel = document.getElementById('tel');
        name = document.getElementById('name');
        document.getElementById('reservation').addEventListener('submit', function(e) {
            e.preventDefault();
            regexTel = /^04[0-9]{8}$/;
            regexName = /^[a-zA-ZÀ-ÖØ-öø-ÿ\s'-]+$/;
            if(regexTel.test(tel.value) && regexName.test(name.value)) {
                this.submit();
            } else {
                alert('Veuillez entrer un nom et un numéro de téléphone valides.');
            }

        });
    </script>

@endsection