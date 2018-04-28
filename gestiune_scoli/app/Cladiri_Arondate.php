<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cladiri_Arondate extends Model
{
    protected $table = 'cladiri_arondate';

    protected $fillable = [
        'id_scoala',
        'nume',
        'adresa',
        'nr_cf',
        'fotografie'
    ];
}
