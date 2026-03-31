@extends('layouts.public')

@section('content')

    <section id="transports-nocturnes" class="py-16 bg-dark text-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-taxi mb-8 text-center uppercase">Transport Nocturne</h2>
            <p class="text-center text-gray-300 mb-10 text-lg">Rentrez chez vous en toute sérénité avec Taxi Tony.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded border-t-4 border-taxi">
                    <h3 class="text-xl font-bold mb-3 text-taxi">Sécurité & Tranquillité</h3>
                    <p class="text-sm text-gray-300">Nos chauffeurs sont expérimentés et connaissent la région sur le bout des doigts, même en pleine nuit.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded border-t-4 border-taxi">
                    <h3 class="text-xl font-bold mb-3 text-taxi">Disponibilité 24h/24</h3>
                    <p class="text-sm text-gray-300">Passée une certaine heure, il peut être difficile de trouver des transports. Chez TAXI TONY, nous sommes disponibles en permanence.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded border-t-4 border-taxi">
                    <h3 class="text-xl font-bold mb-3 text-taxi">Confort & Discrétion</h3>
                    <p class="text-sm text-gray-300">Nos véhicules sont propres et conçus pour un confort maximal. Que vous soyez seul(e) ou à plusieurs, nous respectons votre intimité.</p>
                </div>
            </div>
        </div>
    </section>

@endsection