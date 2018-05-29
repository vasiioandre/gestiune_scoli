<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avarii extends Model
{
    protected $table = 'avarii';

    protected $fillable = [
        'id_scoala',
        'data_incident',
        'suma',
        'firma',
        'pdf_receptie',
        'pdf_solicitare'
    ];
}
