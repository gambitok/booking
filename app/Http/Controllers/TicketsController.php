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
        return view('tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket) {
        return view('tickets.show', compact('ticket'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'      => ['required', 'max:255'],
            'cardNumber'    => ['required', 'max:8'],
            'mmExpiration'  => ['required', 'max:2'],
            'yyExpiration'  => ['required', 'max:2'],
            'cvvCode'       => ['required', 'max:3']
        ]);

        $ticket = new Ticket;
        $ticket->flight_id  = $request->input('flight_id');
        $ticket->user_id    = $request->input('user_id');
        $ticket->summary    = $request->input('summary');
        // SEATS

        $ticket->save();

        return redirect('tickets')->with('message','Successfully booking!');
    }
}
