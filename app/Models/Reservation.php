<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    //seul ces champs peuvent être remplis en masse
    protected $fillable = [
        'name',
        'email',
        'reservation_date',
        'reservation_time',
    ];
}
