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
                        <h5 class="card-title">{{$ticket->flight_id}}</h5>
                        <p class="card-text">Summary: {{$ticket->summary}} $</p>
                        <p class="card-text">Seats: <i class="fa fa-ticket"></i> {{$ticket->seats}}</p>
                        <a href="/f/{{$ticket->flight_id}}" class="btn btn-info">Info</a>
                        <a href="#" class="btn btn-danger">Cancel</a>
                        <p class="text-muted text-right">Purchased by: {{$ticket->getUser($ticket->ticket_id)}}</p>
                        <p class="text-muted text-right">Date: {{$ticket->created_at}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
