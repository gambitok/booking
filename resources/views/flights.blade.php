@extends('layouts.app')

@section('title', 'Flights')

@section('content')

<div class="container">
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Flights</h1>
            <hr>
            <div class="row">
                <div class="col-3">
                    <select class="form-control" name="city_from" id="city_from" placeholder="City from">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-control" name="city_to" id="city_to" placeholder="City to">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-2">
                    <input class="form-control" type="datetime-local" name="date_from" id="date_from" placeholder="Date from">
                </div>
                <div class="col-2">
                    <input class="form-control" type="datetime-local" name="date_to" id="date_to" placeholder="Date to">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </div>
    </div>

    <div id="flights_list" class="flights_list">
        <div class="container">
            @foreach ($flights as $flight)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$flight->city_id_from}} - {{$flight->city_id_to}}</h4>
                        <h5 class="card-title">{{$flight->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$flight->airline}}</h6>
                        <p class="card-text">{{$flight->price}} $</p>
                        <p class="card-text"><small class="text-muted">Date: {{$flight->date_from}} - {{$flight->date_to}}</small></p>
                        <a href="f/{{$flight->flight_id}}" class="btn btn-outline-primary">More..</a>
                        <a href="#" class="btn btn-primary">Reserv</a>
                    </div>
            @endforeach
        </div>
    </div>
</div>

@endsection