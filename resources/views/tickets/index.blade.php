@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <h1>Tickets</h1>
            </div>
        </div>

        <div id="tickets__list" class="tickets__list">
            @foreach ($tickets as $ticket)
                <div class="card">
                    <h4 class="tickets__list__title card-title">Air Ticket #{{$ticket->id}}</h4>
                    <div class="tickets__list__body card-body">
                        <div class="row">
                            <div class="col-6">
                                <span class="card-text"><b>FLIGHT INFO:</b></span>
                                <div class="card-text">{{$ticket->getTicketFlight($ticket->flight_id)}}</div>
                            </div>
                            <div class="col-6">
                                <p class="card-text"><b>SEAT:</b> {{$ticket->seat_id}}</p>
                                <p class="card-text"><b>SUMMARY:</b> {{$ticket->summary}} $</p>
                                <p class="card-text "><b>PASSENGER:</b> {{$ticket->getTicketUser()}}</p>
                            </div>
                        </div>
                        <a href="/tickets/{{$ticket->id}}" class="btn btn-primary">Show</a>
                        <a href="#" class="btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
