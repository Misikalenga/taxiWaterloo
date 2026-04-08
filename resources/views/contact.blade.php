@extends('layouts.public')

@section('content')

<section id="contact" class="py-20 md:py-32 bg-gray-50 relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="mb-16">
                <span class="text-taxi uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Une question ?</span>
                <h1 class="text-5xl md:text-8xl font-medium text-black leading-tight mb-12">
                    Contactez <br>
                    <span class="text-gray-500 font-light italic">notre équipe</span>
                </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">

            <div class="space-y-8 ">
                <div class="bg-white border border-gray-200 p-10 rounded-[2.5rem] shadow-sm group  transition-transform duration-500 hover:scale-[1.02]">
                    <div class="mb-10">
                        <h3 class="text-gray-900 text-2xl font-bold uppercase tracking-widest mb-2">Coordonnées</h3>
                        <div class="w-12 h-1 bg-taxi"></div>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex flex-col md:flex-row md:items-center gap-2">
                            <span class="text-gray-400 font-bold uppercase text-[10px] tracking-widest w-24">Adresse</span>
                            <span class="text-gray-700 font-medium">Rue François Libert 27, 1410 Waterloo</span>
                        </li>
                        <li class="flex flex-col md:flex-row md:items-center gap-2">
                            <span class="text-gray-400 font-bold uppercase text-[10px] tracking-widest w-24">Téléphone</span>
                            <a href="tel:0496306040" class="text-gray-900 font-black hover:text-taxi transition-colors">0496 30 60 40</a>
                        </li>
                        <li class="flex flex-col md:flex-row md:items-center gap-2">
                            <span class="text-gray-400 font-bold uppercase text-[10px] tracking-widest w-24">Email</span>
                            <a href="mailto:taxitony@live.com" class="text-gray-700 font-medium hover:underline">taxitony@live.com</a>
                        </li>
                        <li class="flex flex-col md:flex-row md:items-center gap-2">
                            <span class="text-gray-400 font-bold uppercase text-[10px] tracking-widest w-24">TVA</span>
                            <span class="text-gray-500 font-light">BE 0473 860 341</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white border border-gray-200 p-4 rounded-[2.5rem] shadow-sm h-80 overflow-hidden relative  transition-transform duration-500 hover:scale-[1.02]">
                    <div id="map" class="w-full h-full rounded-[1.8rem] z-0"></div>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="bg-white border border-gray-200 p-10 md:p-14 rounded-[2.5rem] shadow-xl relative overflow-hidden  transition-transform duration-500 hover:scale-[1.02]">
                    <div class="relative z-10">
                        <h3 class="text-gray-900 text-2xl font-black uppercase mb-8">Demande de devis gratuit</h3>
                        
                        <form class="space-y-4" onsubmit="event.preventDefault(); alert('Message envoyé !');">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Nom" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm focus:outline-none focus:border-taxi transition-colors" required>
                                <input type="email" placeholder="Email" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm focus:outline-none focus:border-taxi" required>
                            </div>
                            <input type="text" placeholder="Sujet" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm focus:outline-none focus:border-taxi" required>
                            <textarea placeholder="Votre message" rows="4" class="w-full bg-gray-50 border border-gray-100 rounded-xl p-4 text-sm focus:outline-none focus:border-taxi" required></textarea>
                            
                            <button type="submit" class="group hover:outline outline-2 outline-taxi -outline-offset-1 hover:text-black relative inline-flex items-center justify-center px-12 py-5 bg-gray-950 text-white font-bold transition-all overflow-hidden rounded-xl shadow-2xl active:scale-95 w-full mt-4">
                                <span class="relative z-10 uppercase tracking-[0.2em] text-xs">Envoyer le message</span>
                                <div class="absolute inset-0 bg-taxi scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-0"></div>
                            </button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Coordonnées de Rue François Libert 27, Waterloo
        const lat = 50.71603; 
        const lng = 4.39671;

        const map = L.map('map', {
            scrollWheelZoom: true // Désactive le zoom au scroll pour éviter les erreurs
        }).setView([lat, lng], 16);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors © CARTO'
        }).addTo(map);

        const taxiIcon = L.divIcon({
            html: `<div class="w-8 h-8 mt-5 bg-taxi rounded-full flex items-center justify-center text-white font-bold text-xs">T</div>`,
            className: '',
            iconSize: [32, 32],
            iconAnchor: [16, 32]
        });

        L.marker([lat, lng], { icon: taxiIcon }).addTo(map)
            .bindPopup('<b> {{config("app.name")}} </b><br>Rue François Libert 27')
            .openPopup();
    });
</script>

<style>
    /* Correction pour que la carte Leaflet respecte bien les arrondis */
    .leaflet-container {
        font-family: inherit;
    }
</style>

@endsection