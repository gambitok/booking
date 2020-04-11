@extends('layouts.app')

@section('title', 'Flight: '.$flights->name)

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$flights->getCity($flights->city_id_from)}} - {{$flights->getCity($flights->city_id_to)}}</h4>
                        <h5 class="card-title">{{$flights->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$flights->airline}}</h6>
                        <p class="card-text"><small class="text-muted">Date: {{$flights->date_from}} - {{$flights->date_to}}</small></p>

                        <hr>

                        <p class="card-text">{{$flights->price}} $</p>
                        <div class="form-check form_seats">
                            @foreach ($seats as $seat)
                                <input class="form-check-input" type="checkbox" value="{{$seat->seat_id}}" id="defaultCheck{{$seat->seat_id}}" {{$seat->booked_status==0 ?: 'disabled'}}>
                                <label class="form-check-label" for="defaultCheck{{$seat->seat_id}}">{{$seat->seat_number}}</label>
                            @endforeach
                        </div>

                        {{--<br><a href="#" onclick="showPaymentForm();" class="btn btn-primary">Reserv</a>--}}
                        {{--<br><input type="submit" class="btn btn-primary">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron text-center">
            <div class="container">
                <form role="form" method="POST" action="http://booking/flights">
                    <div class="form-group">
                        <label for="username">Full name (on the card)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Input full name" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cardNumber">Card number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <input type="number" class="form-control" name="cardNumber" placeholder="Input card number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label><span class="hidden-xs">Expiration</span> </label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="MM" name="mmExpiration">
                                    <input type="number" class="form-control" placeholder="YY" name="yyExpiration">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                <input type="number" class="form-control" required="" name="cvvCode">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary">
                    {{--<button class="subscribe btn btn-primary btn-block" type="button"> Pay NOW</button>--}}
                </form>
            </div>
        </div>
    </div>

    {{--<div class="modal" tabindex="-1" role="dialog" id="PaymentModal">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title">Payment form</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form role="form">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="username">Full name (on the card)</label>--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="fa fa-user"></i></span>--}}
                                {{--</div>--}}
                                {{--<input type="text" class="form-control" name="username" placeholder="Input full name" required="">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="cardNumber">Card number</label>--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="fa fa-credit-card"></i></span>--}}
                                {{--</div>--}}
                                {{--<input type="number" class="form-control" name="cardNumber" placeholder="Input card number">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-sm-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label><span class="hidden-xs">Expiration</span> </label>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input type="number" class="form-control" placeholder="MM" name="mmExpiration">--}}
                                        {{--<input type="number" class="form-control" placeholder="YY" name="yyExpiration">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>--}}
                                    {{--<input type="number" class="form-control" required="" name="cvvCode">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<button class="subscribe btn btn-primary btn-block" type="button"> Pay NOW (100$) </button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection