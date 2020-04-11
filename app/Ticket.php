<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function getUser($code)
    {
        $user = User::where('id', $code)->first();
        return view('user', compact('user'));
    }
}
