@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <h1>Tickets</h1>
            </div>
        </div>

        <div id="tickets_list" class="tickets_list">
            @foreach ($tickets as $ticket)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ticket # {{$ticket->id}}</h4>
                        <p class="card-text">{{$ticket->getTicketFlight($ticket->flight_id)}}</p>
                        <p class="card-text text-right"><b>Seats:</b> {{$ticket->getTicketSeat($ticket->flight_id)}}</p>
                        <p class="card-text text-right"><b>Summary:</b> {{$ticket->summary}} $</p>
                        <p class="text-muted text-right"><b>Purchased by:</b> {{$ticket->getTicketUser()}}</p>
                        <a href="/tickets/{{$ticket->id}}" class="btn btn-outline-primary">Show</a>
                        <a href="#" class="btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
