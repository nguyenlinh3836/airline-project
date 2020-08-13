@extends('layouts.default')
@section('title','Chuyến Bay')
@section('css','css/chuyenbay.css')
@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">

                <form method="get" action="/Muave" class="booking-form">
                    {{ csrf_field() }}
                    <h4>Tìm chuyến bay</h4>
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
                                <select class="form-control" type="date" name="diemdi" id="diemdi">
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option>Đà Lạt</option>
                                    <option>Phú Quốc</option>
                                    <option>Đồng Hới</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Điểm đến</span>
                                <select class="form-control" type="date" required name="diemden" id="diemden">
                                    <option>Hà Nội</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option>Phú Quốc</option>
                                    <option>Đồng Hới</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Ngày đi</span>
                                <input class="form-control" type="date" required name="ngaydi" id="ngaydi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Số Người đi</span>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
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
                                <button  class="submit-btn" type="submit">Tìm chuyến bay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
