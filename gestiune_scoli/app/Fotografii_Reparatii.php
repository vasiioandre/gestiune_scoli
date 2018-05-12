<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografii_Reparatii extends Model
{
    protected $table = 'fotografii_reparatii';

    protected $fillable = [
        'id_reparatie',
        'nume_fotografie'
    ];

    public function reparatie()
    {
        return $this->belongsTo('App\Reparatii', 'id_reparatie', 'id_reparatie');
    }
}
