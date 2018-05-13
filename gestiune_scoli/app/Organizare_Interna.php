<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizare_Interna extends Model
{
    protected $table = 'organizare_interna';

    protected $fillable = [
        'nr_clase',
        'nr_elevi',
        'nr_cadre_didactice'
    ];
}
