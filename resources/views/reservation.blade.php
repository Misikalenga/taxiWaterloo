@extends('layouts.public')

@section('content')

    <section id="reservation" class="py-16 bg-taxi ">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-dark mb-8 text-center uppercase">Votre Réservation (Panier)</h2>
            
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div id="cart-items" class="mb-6 space-y-4 min-h-[100px]">
                    </div>
                
                <div class="border-t-2 border-gray-200 pt-4 mb-6 flex justify-between items-center">
                    <span class="text-xl font-bold text-dark">Total estimé :</span>
                    <span id="cart-total" class="text-2xl font-extrabold text-dark">0 €</span>
                </div>

                <form id="reservation-form" onsubmit="submitReservation(event)" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="res-email">Email pour confirmation :</label>
                        <input type="email" id="res-email" placeholder="votre@email.com" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-taxi" required>
                    </div>
                    <button type="submit" class="w-full bg-dark text-white text-lg font-bold py-3 rounded hover:bg-gray-800 transition">
                        Valider ma réservation
                    </button>
                    <p class="text-sm text-gray-500 text-center mt-2">Aucun paiement en ligne. Vous serez contacté pour confirmation.</p>
                </form>
            </div>
        </div>
    </section>


@endsection