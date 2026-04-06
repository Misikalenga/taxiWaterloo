<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class TarifsController extends Controller
{
    public function tarifs()
    {
        // On récupère tous les prix actifs depuis la BDD
        $prices = Price::where('is_active', true)->get();

        // On envoie ces données à la vue 'tarifs.blade.php' (ou 'home')
        return view('tarifs', compact('prices'));
    }
}