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
                    <label for="city_from">City from</label>
                    <select class="form-control" name="city_from" id="city_from">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="city_to">City to</label>
                    <select class="form-control" name="city_to" id="city_to">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="date_from">Date from</label>
                    <input class="form-control" type="datetime-local" name="date_from" id="date_from">
                </div>
                <div class="col-3">
                    <label for="date_to">Date to</label>
                    <input class="form-control" type="datetime-local" name="date_to" id="date_to">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="offset-4 col-4">
                    <button class="btn btn-primary">Search</button>
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