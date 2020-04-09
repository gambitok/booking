@extends('layouts.app')

@section('title', 'Flight: '.$flights->name)

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$flights->city_id_from}} - {{$flights->city_id_to}}</h4>
                        <h5 class="card-title">{{$flights->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$flights->airline}}</h6>
                        <p class="card-text">{{$flights->price}} $</p>
                        <p class="card-text"><small class="text-muted">Date: {{$flights->date_from}} - {{$flights->date_to}}</small></p>
                        <a href="#" class="btn btn-primary">Reserv</a>
                    </div>
            </div>
        </div>
    </div>
@endsection