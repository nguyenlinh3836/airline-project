@extends('layouts.default')
@section('title','thanhtoanhoantat')
@section('css','css/hoantat.css')
@section('content')
    <section class="box">
        <div class="container">
            <div class="row">
                <div class="col-12 boc">
                    <div class=" col-12 box1 text-center">
                        <h1>Thank you for your booking</h1>
                    </div>
                    <div class="col-12  box2 text-center ">
                        <p>Your flight has been booked and is being processed. You will receive an email with flight details</p>
                    </div>
                    <hr class="my-2">
                    <div class="col-12 box3 text-center ">
                        <button type="submit" href="/" class="btn btn-primary btn-lg">Back you homepage</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
