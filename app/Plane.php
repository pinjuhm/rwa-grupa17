<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = ['name', 'capacity', 'aviocompany_id'];
}
