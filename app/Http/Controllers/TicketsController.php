<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$tickets=Ticket::all();
        $user = auth()->user()->id;
        $tickets = Ticket::where('user_id', $user)->get();
        return view('tickets', compact('tickets'));
    }

    public function payment()
    {
        return view('payment');
    }
}
