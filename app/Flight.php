<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['city_id_from', 'city_id_to', 'plane_id', 'price', 'datetime', 'duration'];

    public function plane()
    {
        return $this->belongsTo(Plane::class);
    }
}
