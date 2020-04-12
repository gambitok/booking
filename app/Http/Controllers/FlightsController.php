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
        return view('flights.index', compact('flights'), compact('cities'));
    }

    public function show(Flight $flight) {
        $seats = Seat::where('flight_id', $flight->id)->get();
        return view('flights.show', compact('flight'), compact('seats'));
    }

    public function filter(Request $request) {
        $city_id_from = $request->city_id_from;
        $city_id_to = $request->city_id_to;
        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');

        $request->validate([
            'city_id_from'  => ['required'],
            'city_id_to'    => ['required'],
            'date_from'     => ['required', 'datetime'],
            'date_to'       => ['required', 'datetime'],
        ]);

//        dump($city_id_from);
//        dump($city_id_to);
//        dump($date_from);
//        dump($date_to);

        //$flights=Flight::all();

        $flights = Flight::where([
            ['city_id_from', '=', $city_id_from],
            ['city_id_to', '=', $city_id_to],
            ['date_from', '>=', $date_from],
            ['date_from', '<=', $date_to],
        ])->get();

        //AND j.data>='$data_old 00:00:00' AND j.data<='$data_cur 23:59:59'"

        /**
         * DATE START            DATE END
         * 2020-04-11 00:00:00 - 2020-04-11 05:00:00
         * 2020-04-12 00:00:00 - 2020-04-12 05:00:00
         * 2020-04-10 00:00:00 - 2020-04-10 05:00:00
         */

        $cities=City::all();

        return view('flights.index', compact('flights'), compact('cities'));
    }
}
