@extends('layouts.app')

@section('title', 'Search ticket')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <h1>Search Ticket</h1>
                <form method="post" action="search">
                    <div class="row">
                        <div class="col-2"><label for="barcode">Input barcode:</label></div>
                        <div class="col-8"><input class="form-control" type="text" name="barcode" id="barcode"></div>
                        <div class="col-2"><input class="btn btn-primary" type="submit" value="Search"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        @if (isset($message))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
    </div>

@endsection
