@extends('layouts.default')
@section('title','Mua Vé')
@section('css','css/Muave.css')
@section('content')
    <section class="parallax">
        <div class="container">
            <div class="hh col-md-12 mt-3">
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
                                    @foreach($flights as $flight)
                                    <tr>
                                        <th scope="row">{{$flight->id}}</th>
                                        <td>
                                            <div class="flight-from float-left">
                                                <span class="time-from">{{$flight->giodi}}</span><br/>
                                                {{$flight->noidi}}
                                            </div>
                                            <span class="float-left"><i class="fas fa-plane m-2"></i></span>
                                            <div class="flight-to float-left">
                                                <span class="time-to">{{$flight->gioden}}</span><br/>
                                                {{$flight->noiden}}</div>
                                        </td>
                                        <td>{{$flight->thoigian}}</td>
                                        <td class="price-normal">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="choose" required style="height: 18px; width: 18px;vertical-align: middle;">
                                                        Chọn chuyến bay
                                                    </label>
                                                </div>
                                                <h5 class="flight-price">{{$flight->pho_thong}}</h5>
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
                                                <h5 class="flight-price">{{$flight->thuong_gia}}</h5>
                                                <span class="flight-seat">Chuyến bay này còn {{$flight->soghe}} chỗ</span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
