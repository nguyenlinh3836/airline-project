@extends('layouts.default')
@section('title','Chuyến Bay')
@section('css','css/chuyenbay.css')
@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form action="{{url("/flightSearch")}}">
                    {{ csrf_field() }}
                    <form>
                        <div class="form-group">
                            <div class="form-checkbox">
                                <label for="roundtrip">
                                    <input type="radio" id="roundtrip" name="flight-type">
                                    <span></span>Một chiều
                                </label>
                                <label for="one-way">
                                    <input type="radio" id="one-way" name="flight-type">
                                    <span></span>Khứ hồi
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Điểm đi</span>
                                    <input class="form-control" type="text" placeholder="Thành phố hoặc sân bay" id="flightFrom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Điểm đến</span>
                                    <input class="form-control" type="text" placeholder="Thành phố hoặc sân bay" id="flightTo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Ngày đi</span>
                                    <input class="form-control" type="date" required id="flightDepart">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Ngày về</span>
                                    <input class="form-control" type="date" required id="flightReturn">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Số Người đi</span>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                            </div>
                            <div class="col-md-3">
                                <div class="form-btn">
                                    <button  class="submit-btn"><a href="Muave">Tìm chuyến bay</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
