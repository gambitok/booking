@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container">
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Welcome</h1>
            <p class="lead">Welcome to our Laravel site, <strong>@guest Guest @else {{ Auth::user()->name }} @endguest</strong> !</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate, hic? Aspernatur cumque, eaque laboriosam maiores optio praesentium quasi quibusdam quidem repellendus sit ut voluptatibus! Alias amet minima repellat soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate, hic? Aspernatur cumque, eaque laboriosam maiores optio praesentium quasi quibusdam quidem repellendus sit ut voluptatibus! Alias amet minima repellat soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate, hic? Aspernatur cumque, eaque laboriosam maiores optio praesentium quasi quibusdam quidem repellendus sit ut voluptatibus! Alias amet minima repellat soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="jumbotron">
                <h3>Sidebar</h3>
                Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
                <h3>Archives</h3>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection
