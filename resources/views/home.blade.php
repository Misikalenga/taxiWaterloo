@extends('layouts.public')

@section('content')

    <section id="accueil" class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-4xl font-extrabold text-dark mb-6 text-center uppercase">Taxi Tony à Waterloo, le partenaire dont vous avez besoin</h1>
            <p class="text-lg text-gray-600 mb-6 text-center">
                Notre compagnie de taxis Taxi Tony est située à Rhode-Saint-Genèse, à côté de Waterloo. Avec plus de 25 ans d'expérience, notre équipe est en mesure de prendre en charge tous vos trajets, peu importe le moment de la journée ou de la nuit.
            </p>
            <div class="bg-taxi text-dark rounded-lg p-8 text-center shadow-md">
                <h2 class="text-2xl font-bold mb-2">Commandez votre taxi 7j/7 et 24h/24 !</h2>
                <p class="text-xl font-semibold mb-4">0496 30 60 40</p>
                <p>Nos employés et notre patron maîtrisent plusieurs langues (français, anglais,…), ce qui facilitera sans aucun doute la communication.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-3 border-b-2 border-taxi pb-2">Du petit trajet à l'international</h3>
                    <p class="text-gray-600">Que vous souhaitiez vous rendre à un rendez-vous en ville, à l'hôpital, à l'aéroport ou encore rentrer chez vous la nuit sans aucun risque, nous sommes à votre disposition à travers la Belgique et à l'international (France, Pays-Bas).</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3 border-b-2 border-taxi pb-2">Un service professionnel</h3>
                    <p class="text-gray-600">Service de shuttle pour l'aéroport, transport de personnes âgées à bon port en rassurant la famille, ou service VIP dans des véhicules spacieux (berlines et monovolumes) pour un confort absolu.</p>
                </div>
            </div>
        </div>
    </section>

@endsection