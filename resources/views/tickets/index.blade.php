@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <div class="container">

        @if (isset($message))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="tickets__list" class="tickets__list">
            @if ($tickets->count()>0)
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
                        <a href="/tickets/{{$ticket->id}}" class="btn btn-outline-primary">Show full information</a>
                    </div>
                </div>
            @endforeach
            @else
                <div class="alert">
                    You haven't tickets yet. But you can buy them. <a href="/flights">Purchase tickets</a>
                </div>
            @endif
        </div>
    </div>

@endsection
