<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Resrvation;

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
        Resevation::create([
            'name' => $request->name,
            'email' => $request->email,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
        ]);

        // redirection avec un message de succès
        return back()->with('success', 'Votre réservation a bien été enregistrée');

    }
}
