<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investitii extends Model
{
    protected $table = 'investitii';

    protected $fillable = [
        'id_scoala',
        'anul_finalizarii',
        'detalii',
        'suma_investita',
        'firma',
        'pdf_autorizatie',
        'pdf_proiect',
        'pdf_receptie'
    ];
}
