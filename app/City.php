<?php

namespace App;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    use UploadTrait;

    protected $fillable = ['name'];

    public function flightsFrom()
    {
        return $this->hasMany(Flight::class, 'city_id_from');
    }

    public function flightsTo()
    {
        return $this->hasMany(Flight::class, 'city_id_to');
    }

    public function addImage($image)
    {
        $name = Str::slug($this->name) . '_' . time();
        $folder = '/Images/Cities/';
        $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $name);
        $this->image_path = $filePath;
    }
}
