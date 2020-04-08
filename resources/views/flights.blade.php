@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Flights</h1>
            <hr>
            <div class="row">
                <div class="col-3">
                    <select class="form-control" name="city_from" id="city_from">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-control" name="city_to" id="city_to">
                        <option value="0">Not selected</option>
                    </select>
                </div>
                <div class="col-3">
                    <input class="form-control" type="date" name="date_from" id="date_from">
                </div>
                <div class="col-3">
                    <input class="form-control" type="date" name="date_to" id="date_to">
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
</div>

@endsection