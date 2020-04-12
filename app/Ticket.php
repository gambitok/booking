<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function getTicketUser()
    {
        $user = auth()->user()->id;
        $user = User::where('id', $user)->first();
        return view('user', compact('user'));
    }

    public function getTicketFlight($code) {
        $flights = Flight::where('id', $code)->first();
        return view('flights.min', compact('flights'));
    }

    public function getTicketSeat($code) {
        $user = auth()->user()->id;
        $seats = Seat::where([
            ['flight_id', '=', $code],
            ['booked_status', '=', 1],
            ['user_id', '=', $user]
        ])->get();
        return view('seats', compact('seats'));
    }
}
