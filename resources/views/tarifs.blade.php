@extends('layouts.public')

@section('content')

    <section id="tarifs" class="py-16 bg-gray-100 ">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-dark mb-8 text-center uppercase">Nos Tarifs & Réservations</h2>
            <p class="text-center text-gray-600 mb-10">Sélectionnez votre trajet pour l'ajouter à votre réservation en ligne.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Waterloo – Zaventem Airport</h4>
                        <p class="text-gray-500">55 €</p>
                    </div>
                    <button onclick="addToCart('Waterloo – Zaventem Airport', 55)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Zaventem Airport – Waterloo</h4>
                        <p class="text-gray-500">55 € (+ parking)</p>
                    </div>
                    <button onclick="addToCart('Zaventem Airport – Waterloo', 55)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Waterloo – Bruxelles</h4>
                        <p class="text-gray-500">50 €</p>
                    </div>
                    <button onclick="addToCart('Waterloo – Bruxelles', 50)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Waterloo – Charleroi Airport</h4>
                        <p class="text-gray-500">75 €</p>
                    </div>
                    <button onclick="addToCart('Waterloo – Charleroi Airport', 75)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Waterloo – Braine-l'Alleud</h4>
                        <p class="text-gray-500">20 €</p>
                    </div>
                    <button onclick="addToCart('Waterloo – Braine-l\'Alleud', 20)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
                <div class="bg-white p-5 rounded shadow-sm flex justify-between items-center border-l-4 border-taxi">
                    <div>
                        <h4 class="font-bold text-lg">Lasne – Zaventem Airport</h4>
                        <p class="text-gray-500">60 €</p>
                    </div>
                    <button onclick="addToCart('Lasne – Zaventem Airport', 60)" class="bg-dark text-white px-4 py-2 rounded hover:bg-gray-800 transition">Réserver</button>
                </div>
            </div>
            
            <div class="mt-8 text-center bg-white p-6 rounded shadow-sm">
                <p class="font-bold text-lg">Waterloo – Waterloo : au compteur</p>
                <p class="text-gray-600 mt-2">Toutes autres courses : contactez-nous au <strong>0496/30.60.40</strong> !</p>
            </div>
        </div>
    </section>

@endsection