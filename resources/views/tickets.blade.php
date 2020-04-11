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
        <div class="container">
            @foreach ($tickets as $ticket)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ticket # {{$ticket->ticket_id}}</h4>
                        <p class="card-text">{{$ticket->getTicketFlight($ticket->flight_id)}}</p>
                        <p class="card-text text-right"><b>Seats:</b> {{$ticket->getTicketSeat($ticket->flight_id)}}</p>
                        <p class="card-text text-right"><b>Summary:</b> {{$ticket->summary}} $</p>
                        <p class="text-muted text-right"><b>Purchased by:</b> {{$ticket->getTicketUser()}}</p>
{{--                        <p class="text-muted text-right"><b>Date:</b> {{$ticket->created_at}}</p>--}}
                        <a href="#" class="btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
