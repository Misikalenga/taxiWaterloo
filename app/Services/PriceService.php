<?php

namespace App\Services;

use App\Models\Price;

class PriceService
{
    public function getActivePrices()
    {
        // Récupère tous les prix actifs depuis la base de données
        return Price::where('is_active', true)->get();
    }
}