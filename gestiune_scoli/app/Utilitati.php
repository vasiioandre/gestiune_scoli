<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilitati extends Model
{
    protected $table = 'utilitati';

    protected $fillable = [
        'id_scoala',
        'data',
        'consum_apa',
        'consum_caldura'
    ];
}
