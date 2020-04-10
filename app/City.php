<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function flight() {
        return $this->hasMany(Flight::class);
    }
}
