<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
//    public function city() {
//        return $this->belongsTo(City::class);
//    }
    public function getCity($code)
    {
        $city = City::where('city_id', $code)->first();
        return view('city', compact('city'));
    }
}
