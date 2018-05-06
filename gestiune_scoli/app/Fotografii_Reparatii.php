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

    public function product()
    {
        return $this->belongsTo('App\Reparatii');
    }
}
