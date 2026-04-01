@extends('layouts.public')

@section('content')

<section id="accueil" >
    <div class="relative py-64 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('image/waterloo.png') }}');">
        <div class="absolute inset-0 bg-black/10"></div>

            <div class="relative z-10  max-w-5xl mx-auto text-center px-4 text-white">
        
                <h1 class="text-4xl md:text-5xl text-taxi font-extrabold mb-6  uppercase leading-tight">
                    Taxi Tony à Waterloo
                </h1>
                <p class="text-2xl text-gray-100">
                    Le partenaire dont vous avez besoin
                </p>
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