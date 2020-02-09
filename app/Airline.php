<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = ['name', 'tag'];

    public function planes()
    {
        return $this->hasMany(Plane::class);
    }
}
