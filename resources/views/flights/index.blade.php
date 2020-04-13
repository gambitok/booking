@extends('layouts.app')

@section('title', 'Flights')

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

        <div class="flight__banner jumbotron text-center">
            <div class="container">
                <h1>Flights</h1>
                <div class="flight__banner__form">
                    <form method="post" action="{{ route('filter') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label for="city_id_from">City from</label>
                                <select class="form-control" name="city_id_from" id="city_id_from" placeholder="City from">
                                    <option value="0">Not selected</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2 col-12">
                                <label for="city_id_to">City to</label>
                                <select class="form-control" name="city_id_to" id="city_id_to" placeholder="City to">
                                    <option value="0">Not selected</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-12">
                                <label for="date_from">Date from</label>
                                <input class="form-control" type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" name="date_from" id="date_from" placeholder="Date from">
                            </div>
                            <div class="col-lg-3 col-12">
                                <label for="date_to">Date to</label>
                                <input class="form-control" type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" name="date_to" id="date_to" placeholder="Date to">
                            </div>
                            <div class="col-lg-2 col-12">
                                <label for="date_to">&nbsp;</label>
                                <input type="submit" class="btn btn-primary w-100" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="flights_list" class="flights_list">
            @if ($flights->count()>0)
            @foreach ($flights as $flight)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-plane"></i> {{$flight->getCity($flight->city_id_from)}} - {{$flight->getCity($flight->city_id_to)}}</h4>
                        <h5 class="card-title">{{$flight->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$flight->airline}}</h6>
                        <p class="card-text"><small class="text-muted">Date: {{$flight->date_from}} - {{$flight->date_to}}</small></p>
                        <p class="card-text">{{$flight->price}}$</p>
                        <a href="/flights/{{$flight->id}}" class="btn btn-outline-primary">Proceed booking</a>
                    </div>
                </div>
            @endforeach
            @else
                <div class="alert alert-danger">
                    <h4>Nothing found! Select a different date or cities</h4>
                    <a href="/flights"><i class="fa fa-caret-left"></i> Back to flights</a>
                </div>
            @endif
        </div>

    </div>

@endsection