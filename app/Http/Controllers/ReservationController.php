<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Resrvation;
use App\Services\PriceService;

class ReservationController extends Controller
{
    // Envois du formulaire de réservation
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validation([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|date_format:H:i',
        ]);

        // sauvegarde de la réservation
        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
        ]);

        // redirection avec un message de succès
        return back()->with('success', 'Votre réservation a bien été enregistrée');

    }

    public function reservation(PriceService $priceService)
    {
        // On récupère tous les prix actifs depuis la BDD
        $prices = $priceService->getActivePrices();

        // On envoie ces données à la vue 'reservation.blade.php'
        return view('reservation', compact('prices'));
    }
}
