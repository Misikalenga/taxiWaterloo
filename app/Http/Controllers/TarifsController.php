<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PriceService;

class TarifsController extends Controller
{
    public function tarifs(PriceService $priceService)
    {
        // On récupère tous les prix actifs depuis la BDD
        $prices = $priceService->getActivePrices();
        
        // On envoie ces données à la vue 'tarifs.blade.php' (ou 'home')
        return view('tarifs', compact('prices'));
    }
}