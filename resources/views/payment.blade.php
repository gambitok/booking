@extends('layouts.app')

@section('title', 'Payment')

@section('content')

<div class="container">

    <h1>Payment details</h1>

    <form role="form">
        <div class="form-group">
            <label for="username">Full name (on the card)</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="" required="">
            </div>
        </div>

        <div class="form-group">
            <label for="cardNumber">Card number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                </div>
                <input type="text" class="form-control" name="cardNumber" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label><span class="hidden-xs">Expiration</span> </label>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="MM" name="">
                        <input type="number" class="form-control" placeholder="YY" name="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                    <input type="number" class="form-control" required="">
                </div>
            </div>
        </div>
        <button class="subscribe btn btn-primary btn-block" type="button"> Pay NOW (100$) </button>
    </form>
</div>

@endsection