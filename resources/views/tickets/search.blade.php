@extends('layouts.app')

@section('title', 'Search ticket')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="jumbotron text-center">
            <div class="container">
                <h1>Search Ticket</h1>
                <form method="get" action="{{ route('barcode') }}">
                    <div class="row">
                        <div class="col-1"><label for="barcode"><b>Barcode:</b></label></div>
                        <div class="col-9"><input class="form-control" type="text" name="barcode" id="barcode" placeholder="Input your ticket number"></div>
                        <div class="col-2"><input class="btn btn-primary w-100" type="submit" value="Search"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @if (isset($ticket))
    <div class="container">
        <div class="tickets__list card">
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
    @endif

    <div class="container">
        @if (isset($message))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
    </div>

@endsection
