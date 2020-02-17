<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['city_id_from', 'city_id_to', 'plane_id', 'price', 'datetime', 'duration', 'promoted', 'completed'];

    protected $casts = [
        'promoted' => 'boolean',
        'completed' => 'boolean',
    ];

    public function plane()
    {
        return $this->belongsTo(Plane::class);
    }

    public function cityFrom()
    {
        return $this->belongsTo(City::class, 'city_id_from', 'id');
    }

    public function cityTo()
    {
        return $this->belongsTo(City::class, 'city_id_to', 'id');
    }

    public static function withJoinedInfo()
    {
        return self::join('cities as city_from', 'flights.city_id_from', '=', 'city_from.id')
            ->join('cities as city_to', 'flights.city_id_to', '=', 'city_to.id')
            ->with('plane')
            ->select(['city_from.name as city_from_name', 'city_to.name as city_to_name',  'flights.*']);
    }
}
