@extends('layouts.default')
@section('title','Mua Vé')
@section('css','css/Muave.css')
@section('content')
    <section class="buy-content">
        <div class="container">
            <div class="col-md-12 mt-3">
                <h2 class="text-center">Chọn chuyến bay</h2>
                <div class = "content-table">
                    <div class="content">
                        <h4>Chọn chuyến bay đi ngày 01/08/2020</h4>
                        <form method="post">
                            <div class="table-responsive table-bordered text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã số</th>
                                        <th scope="col">Chuyến bay</th>
                                        <th scope="col">Thời gian</th>
                                        <th scope="col">Hạng phổ thông</th>
                                        <th scope="col">Hạng thương gia</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">VN504</th>
                                        <td>
                                            <div class="flight-from float-left">
                                                <span class="time-from">05:30</span><br/>
                                                HAN
                                            </div>
                                            <span class="float-left"><i class="fas fa-plane m-2"></i></span>
                                            <div class="flight-to float-left">
                                                <span class="time-to">7:40</span><br/>
                                                DLI</div>
                                        </td>
                                        <td>2 tiếng 10 phút</td>
                                        <td class="price-normal">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="choose" required style="height: 18px; width: 18px;vertical-align: middle;">
                                                        Chọn chuyến bay
                                                    </label>
                                                </div>
                                                <h5 class="flight-price">699,000 VND</h5>
                                                <span class="flight-seat">Chuyến bay này còn 5 chỗ</span>
                                            </div>
                                        </td>
                                        <td class="price-vip">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="choose" required style="height: 18px; width: 18px;vertical-align: middle;">
                                                        Chọn chuyến bay
                                                    </label>
                                                </div>
                                                <h5 class="flight-price">1,699,000 VND</h5>
                                                <span class="flight-seat">Chuyến bay này còn 5 chỗ</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <h4>Chọn chuyến bay về </h4>
                        <form method="post">
                            <div class="table-responsive table-bordered text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã số</th>
                                        <th scope="col">Chuyến bay</th>
                                        <th scope="col">Thời gian</th>
                                        <th scope="col">Hạng phổ thông</th>
                                        <th scope="col">Hạng thương gia</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">VN504</th>
                                        <td>
                                            <div class="flight-from float-left">
                                                <span class="time-from">05:30</span><br/>
                                                DLI
                                            </div>
                                            <span class="float-left"><i class="fas fa-plane m-2"></i></span>
                                            <div class="flight-to float-left">
                                                <span class="time-to">7:40</span><br/>
                                                HAN</div>
                                        </td>
                                        <td>2 tiếng 10 phút</td>
                                        <td class="price-normal">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="choose" required style="height: 18px; width: 18px;vertical-align: middle;">
                                                        Chọn chuyến bay
                                                    </label>
                                                </div>
                                                <h5 class="flight-price">699,000 VND</h5>
                                                <span class="flight-seat">Chuyến bay này còn 5 chỗ</span>
                                            </div>
                                        </td>
                                        <td class="price-vip">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="choose" required style="height: 18px; width: 18px;vertical-align: middle;">
                                                        Chọn chuyến bay
                                                    </label>
                                                </div>
                                                <h5 class="flight-price">1,699,000 VND</h5>
                                                <span class="flight-seat">Chuyến bay này còn 5 chỗ</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col text-center">
                                <button class="btn btn-primary" type="submit">Tiếp tục <i class="fas fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
