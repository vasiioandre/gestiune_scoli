<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scoala extends Model
{
    protected $table = 'scoli';

    protected $fillable = [
        'nume',
        'nr_cf',
        'adresa',
        'telefon',
        'longitudine',
        'latitudine',
        'istoric'
    ];
}
