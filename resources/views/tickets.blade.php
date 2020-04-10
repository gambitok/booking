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
                        <h5 class="card-title">{{$ticket->flight_id}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$ticket->user_id}}</h6>
                        <p class="card-text">{{$ticket->summary}} $</p>
                        <p class="card-text"><small class="text-muted">Seats: {{$ticket->seats}}</small></p>
                        <a href="/f/{{$ticket->flight_id}}" class="btn btn-info">Info</a>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
