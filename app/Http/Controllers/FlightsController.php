<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use App\Ticket;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
        $flights=Flight::all();
        $cities=City::all();
        return view('flights.index', compact('flights'), compact('cities'));
    }

    public function show(Flight $flight) {
        //$seats = Seat::where('flight_id', $flight->id)->get();
        $seats=[]; $reserved=[];

        $tickets = Ticket::where([
            ['flight_id', '=', $flight->id],
        ])->get();

        foreach ($tickets as $ticket) {
            array_push($reserved, $ticket->seat_id);
        }

        for($i=1;$i<=$flight->seat_number;$i++) {
            $seat_status=0;
            if (in_array($i, $reserved)) $seat_status=1;
            $seats[$i]=['seat_id'=>$i, 'seat_status'=>$seat_status];
        }

        return view('flights.show', compact('flight'), compact('seats'));
    }

    public function filter(Request $request) {
        $city_id_from = $request->city_id_from;
        $city_id_to = $request->city_id_to;
        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');

        $flights = Flight::where([
            ['city_id_from', '=', $city_id_from],
            ['city_id_to', '=', $city_id_to],
            ['date_from', '>=', $date_from],
            ['date_from', '<=', $date_to],
        ])->get();

        $cities=City::all();

        return view('flights.index', compact('flights'), compact('cities'));
    }
}
