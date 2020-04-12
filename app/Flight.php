<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

//    public function flight()  {
//        return $this->belongsTo('App\Flight', 'flight_id');
//    }

    public function getCity($code)
    {
        $city = City::where('id', $code)->first();
        return view('city', compact('city'));
    }

}
