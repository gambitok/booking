<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        //$tickets=Ticket::all();
        $user = auth()->user()->id;
        $tickets = Ticket::where('user_id', $user)->get();
        return view('tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'      => ['required', 'min:3', 'max:255'],
            'cardNumber'    => ['required', 'min:8', 'max:8'],
            'mmExpiration'  => ['required', 'min:2', 'max:2'],
            'yyExpiration'  => ['required', 'min:2', 'max:2'],
            'cvvCode'       => ['required', 'min:3', 'max:3'],
            'seat_id'       => ['required', 'min:1']
        ]);

        $ticket = new Ticket;
        $user = auth()->user()->id;
        $ticket->flight_id      = $request->flight_id;
        $ticket->user_id        = $user;
        $ticket->seat_id        = $request->seat_id;
        $ticket->summary        = $request->summary;
        $ticket->barcode        = $this->generateBarcodeNumber();
        $ticket->card_number    = $request->cardNumber;

        $ticket->save();

        return $this->index()->with('message','Successfully booking! Number of your ticket - '.$ticket->barcode);
    }

    function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999);
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }
        return $number;
    }

    function barcodeNumberExists($number) {
        $ticket=Ticket::where('barcode', $number)->first();
        if (isset($ticket->barcode)) return true; else return false;
    }

    public function destroy(Ticket $ticket) {
        $ticket->destroy($ticket->id);
        return $this->index()->with('message','Successfully canceled!');
    }

    public function search() {

        return view('tickets.search');
    }

    public function searchPost($id)
    {
        $ticket = Ticket::where('barcode', $id)->first();

        if (isset($ticket->barcode))
            return view('tickets.search')->with('message', 'YEP!');
        else
            return view('tickets.search')->with('message', 'NOPE!');
    }
}
