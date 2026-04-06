<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        $prices = [
            ['departure' => 'Waterloo', 'destination' => 'Waterloo', 'amount' => 'Compteur', 'extras' => null],
            ['departure' => 'Waterloo', 'destination' => 'Zaventem Airport', 'amount' => '55', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'Waterloo', 'amount' => '55', 'extras' => 'parking'],
            ['departure' => 'Waterloo', 'destination' => 'Bruxelles', 'amount' => '50', 'extras' => null],
            ['departure' => 'Bruxelles', 'destination' => 'Waterloo', 'amount' => '50', 'extras' => null],
            ['departure' => 'Waterloo', 'destination' => 'Braine-l’Alleud', 'amount' => '20', 'extras' => null],
            ['departure' => 'Braine-l’Alleud', 'destination' => 'Waterloo', 'amount' => '20', 'extras' => null],
            ['departure' => 'Waterloo', 'destination' => 'Charleroi Airport', 'amount' => '75', 'extras' => null],
            ['departure' => 'Braine-l’Alleud', 'destination' => 'Charleroi Airport', 'amount' => '75', 'extras' => null],
            ['departure' => 'Charleroi Airport', 'destination' => 'Waterloo', 'amount' => '75', 'extras' => null],
            ['departure' => 'Charleroi Airport', 'destination' => 'Braine-l’Alleud', 'amount' => '75', 'extras' => null],
            ['departure' => 'Lasne', 'destination' => 'Zaventem Airport', 'amount' => '60', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'Lasne', 'amount' => '65', 'extras' => null],
            ['departure' => 'Rhode-Saint-Genèse', 'destination' => 'Zaventem Airport', 'amount' => '60', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'Rhode-Saint-Genèse', 'amount' => '60', 'extras' => 'parking'],
            ['departure' => 'La Hulpe', 'destination' => 'Zaventem Airport', 'amount' => '60', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'La Hulpe', 'amount' => '60', 'extras' => 'parking'],
            ['departure' => 'Lillois', 'destination' => 'Zaventem Airport', 'amount' => '70', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'Lillois', 'amount' => '70', 'extras' => 'parking'],
            ['departure' => 'Braine-le-Château', 'destination' => 'Zaventem Airport', 'amount' => '75', 'extras' => null],
            ['departure' => 'Zaventem Airport', 'destination' => 'Braine-le-Château', 'amount' => '75', 'extras' => 'parking'],
            ['departure' => 'Lasne', 'destination' => 'Charleroi Airport', 'amount' => '80', 'extras' => null],
            ['departure' => 'Charleroi Airport', 'destination' => 'Lasne', 'amount' => '80', 'extras' => 'parking'],
            ['departure' => 'Rhode-Saint-Genèse', 'destination' => 'Charleroi Airport', 'amount' => '80', 'extras' => null],
            ['departure' => 'Charleroi Airport', 'destination' => 'Rhode-Saint-Genèse', 'amount' => '80', 'extras' => null],
        ];

        foreach ($prices as $price) {
            Price::create($price);
        }
    }
}