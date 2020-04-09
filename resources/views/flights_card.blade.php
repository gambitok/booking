@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$flights->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$flights->airline}}</h6>
                        <p class="card-text">{{$flights->price}} $</p>
                        <a href="#" class="btn btn-primary">Reserv</a>
                    </div>
            </div>
        </div>
    </div>
@endsection