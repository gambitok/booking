<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
         $flights=Flight::all();
         $cities=City::all();
//        $flights = Flight::with('city')->get();
        return view('flights', compact('flights'), compact('cities'));
    }

    public function show($code=null)
    {
        $flights = Flight::where('flight_id', $code)->first();
        return view('flights_card', compact('flights'));
    }
}
