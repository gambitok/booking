@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <div class="card tickets__list">
                    <h4 class="tickets__list__title card-title">Ticket # {{$ticket->id}}</h4>
                    <div class="tickets__list__body card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-text">{{$ticket->getTicketFlight($ticket->flight_id)}}</div>
                            </div>
                            <div class="col-6">
                                <p class="card-text"><b>SEAT:</b> {{$ticket->seat_id}}</p>
                                <p class="card-text"><b>SUMMARY:</b> {{$ticket->summary}} $</p>
                                <p class="card-text"><b>PASSENGER:</b> {{$ticket->getTicketUser()}}</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
