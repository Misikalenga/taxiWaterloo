@extends('layouts.public')

@section('content')

    <section id="contact" class="py-16 bg-gray-100">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold text-dark mb-6 uppercase">Contactez-nous</h2>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-center"><span class="font-bold w-32">Adresse :</span> Rue François Libert 27, 1410 Waterloo</li>
                    <li class="flex items-center"><span class="font-bold w-32">Téléphone :</span> 0496 30 60 40</li>
                    <li class="flex items-center"><span class="font-bold w-32">Email :</span> taxitony@live.com</li>
                    <li class="flex items-center"><span class="font-bold w-32">TVA :</span> BE0473860341</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded shadow-sm">
                <h3 class="text-xl font-bold mb-4">Demande de devis gratuit</h3>
                <form class="space-y-4" onsubmit="event.preventDefault(); alert('Message envoyé ! (Simulation)');">
                    <input type="text" placeholder="Nom" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-taxi" required>
                    <input type="email" placeholder="Email" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-taxi" required>
                    <input type="text" placeholder="Sujet" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-taxi" required>
                    <textarea placeholder="Message" rows="4" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-taxi" required></textarea>
                    <button type="submit" class="w-full bg-dark text-white font-bold py-2 rounded hover:bg-gray-800 transition">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>

@endsection