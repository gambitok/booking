<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function city() {
        return $this->belongsTo(City::class);
    }
}
