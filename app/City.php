<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];

    public function flightsFrom()
    {
        return $this->hasMany(Flight::class, 'city_id_from');
    }

    public function flightsTo()
    {
        return $this->hasMany(Flight::class, 'city_id_to');
    }
}
