<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $flights=Flight::all();
        return view('flights', compact('flights'));
    }

    public function show($code=null)
    {
        $flights = Flight::where('flight_id', $code)->first();
        return view('flights_card', compact('flights'));
    }
}
