@extends('layouts.app')

@section('title', 'Flight: '.$flight->name)

@section('content')
    <div class="container">
        <div class="jumbotron text-center">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book" aria-selected="true">Book flight</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment method</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$flight->getCity($flight->city_id_from)}} - {{$flight->getCity($flight->city_id_to)}}</h4>
                            <h5 class="card-title">{{$flight->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$flight->airline}}</h6>
                            <p class="card-text"><small class="text-muted">Date: {{$flight->date_from}} - {{$flight->date_to}}</small></p>
                            <hr>
                            <p class="card-text">{{$flight->price}} $</p>
                            <div class="form-check form_seats">
                                {{--@foreach ($seats as $seat)--}}
                                    {{--<input class="form-check-input" type="checkbox" value="{{$seat->seat_id}}" id="defaultCheck{{$seat->seat_id}}" {{$seat->seat_status==0 ?: 'disabled'}}>--}}
                                    {{--<label class="form-check-label" for="defaultCheck{{$seat->seat_id}}">{{$seat->seat_id}}</label>--}}
                                {{--@endforeach--}}
                            </div>
                            <br>
                            <button class="btn btn-primary">Book</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                    <div class="card">
                        <div class="card-body" style="margin: 0 300px;">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection