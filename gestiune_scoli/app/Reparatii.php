<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparatii extends Model
{
    protected $table = 'reparatii';

    protected $fillable = [
        'id_scoala',
        'anul_finalizarii',
        'detalii',
        'suma_investita',
        'firma'
    ];

    public function fotografii()
    {
        return $this->hasMany('App\Fotografii_Reparatii', 'id_reparatie', 'id_reparatie');
    }

    public static function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("anul_finalizarii", "LIKE","%$keyword%");
            });
        }
        return $query;
    }
}
