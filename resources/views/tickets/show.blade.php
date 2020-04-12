@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <div class="container">
        <div class="card tickets__list">
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
                        <p class="card-text"><b>PASSENGER:</b> {{$ticket->getTicketUser()}}</p>
                    </div>
                </div>

                <form method="post" action="{{ route('destroy', $ticket->id) }}">
                    @csrf
                    <input type="submit" class="btn btn-outline-danger text-right" value="Cancel reservation">
                </form>
            </div>
        </div>
    </div>

@endsection
