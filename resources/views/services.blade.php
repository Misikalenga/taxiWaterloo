@extends('layouts.public')

@section('content')

    <section class="bg-gray-900 py-20 md:py-32 relative overflow-hidden">

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-taxi/5 via-transparent to-transparent pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">

            <div class="mb-20">
                <span class="text-taxi uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Nos Prestations</span>
                <h1 class="text-4xl md:text-7xl font-medium text-white leading-tight mb-12">
                    Tous types de trajets <br>
                    <span class="text-gray-500 font-light italic">pris en charge</span>
                </h1>

                <div>
                    <a href="{{ route('tarifs') }} " class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-black text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full md:w-auto">
                        <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Découvrez nos tarifs</span>
                        <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

                <div class="md:col-span-8 bg-white/[0.02] border border-white/5 p-8 md:p-12 rounded-[2.5rem] group hover:border-taxi/30 transition-all duration-500 group">
                    <h2 class="text-white text-2xl font-bold mb-6 uppercase tracking-wider flex items-center gap-4">
                        <span class="w-8 h-px bg-taxi"></span>
                        Pour tout type de public
                    </h2>
                    <div class="grid md:grid-cols-2 gap-8 group-hover:text-gray-300 duration-300 transition-all text-gray-400 font-light leading-relaxed">
                        <p>
                            Notre société jeune et dynamique offre un service irréprochable à l’ensemble de sa clientèle. 
                            Que vous soyez un <span class="text-taxi font-medium italic">particulier</span> ou que vous vous déplaciez dans le cadre de votre <span class="text-taxi font-medium italic">travail</span>, nous vous garantissons des prestations à la hauteur de vos attentes.
                        </p>
                        <p>
                            Vous vous déplacez <span class="text-taxi font-medium italic">en groupe</span> ? Nous sommes également aptes à vous prendre en charge ! Précisez-nous le nombre de personnes lors de votre réservation.
                        </p>
                    </div>
                    <div class="mt-8 pt-8 border-t border-white/5 text-sm italic text-gray-500">
                        Toujours à votre écoute, nous adaptons sans cesse notre offre à vos demandes.
                    </div>
                </div>

                <div class="md:col-span-4 bg-taxi p-8 md:p-10 flex flex-col justify-between group relative overflow-hidden rounded-[2.5rem] transition-transform duration-500 hover:scale-[1.02]">
                    <div class="relative z-10">
                        <h2 class="text-black text-2xl font-black uppercase leading-tight mb-6">À toute heure du jour et de la nuit</h2>
                        <p class="text-black/80 font-medium leading-relaxed mb-8 text-sm">
                            Nos chauffeurs et voitures sont disponibles 7j/7 et 24h/24. Ne vous privez plus de sortir !
                        </p>
                    </div>
                    <div class="relative hidden md:block z-10">
                        <a href="tel:+32496306040" class="outline outline-2 outline-black -outline-offset-1 group-hover:text-white relative inline-flex items-center justify-center px-8 py-4 bg-taxi text-black font-bold transition-all overflow-hidden rounded-xl shadow-xl active:scale-95 w-full">
                            <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Appeler</span>
                            <div class="absolute inset-0 bg-black scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                        </a>
                    </div>

                    <div class="relative md:hidden z-10">
                        <a href="tel:+32496306040" class="group-hover:outline outline-2 outline-black -outline-offset-1 group-hover:text-black relative inline-flex items-center justify-center px-8 py-4 bg-black text-white font-bold transition-all overflow-hidden rounded-xl shadow-xl active:scale-95 w-full">
                            <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Appeler</span>
                            <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                        </a>
                    </div>
                    <span class="absolute -bottom-4 -right-4 text-black/5 text-9xl font-black">24</span>
                </div>

                <div class="md:col-span-12 bg-white/[0.02] border border-white/5 p-8 md:p-12 rounded-[2.5rem]">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                        <div class="space-y-4 group">
                            <h3 class="text-white font-bold uppercase tracking-widest text-sm flex items-center gap-3 group-hover:text-taxi transition-colors">
                                <span class="w-2 h-2 bg-taxi rounded-full"></span> Proximité
                            </h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-300 duration-300 transition-all font-light">
                                Petits trajets locaux, centre-ville ou visites. Ne perdez plus de temps à chercher un stationnement, nous vous y emmenons en quelques minutes.
                            </p>
                        </div>

                        <div class="space-y-4 group">
                            <h3 class="text-white font-bold uppercase tracking-widest text-sm flex items-center gap-3 group-hover:text-taxi transition-colors">
                                <span class="w-2 h-2 bg-taxi rounded-full"></span> Santé
                            </h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-300 duration-300 transition-all font-light">
                                Rendez-vous à l’hôpital ou difficultés de déplacement ? Nos chauffeurs assurent une assistance courtoise et une ponctualité absolue.
                            </p>
                        </div>

                        <div class="space-y-4 group">
                            <h3 class="text-white font-bold uppercase tracking-widest text-sm flex items-center gap-3 group-hover:text-taxi transition-colors">
                                <span class="w-2 h-2 bg-taxi rounded-full"></span> Longue Distance
                            </h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-300 duration-300 transition-all font-light">
                                France, Pays-Bas, Allemagne ou navettes aéroports. Voyagez sans stress vers toutes les destinations internationales.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection