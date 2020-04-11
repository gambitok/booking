<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use App\Seat;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
         $flights=Flight::all();
         $cities=City::all();
        return view('flights', compact('flights'), compact('cities'));
    }

    public function show($code=null)
    {
        $flights = Flight::where('flight_id', $code)->first();
        $seats = Seat::where('flight_id', $code)->get();
        return view('flights_card', compact('flights'), compact('seats'));
    }
}
