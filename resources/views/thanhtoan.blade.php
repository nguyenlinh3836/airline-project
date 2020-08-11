@extends('layouts.default')
@section('title','Thanh Toan')
@section('css','css/thanhtoan.css')
@section('content')
    <section class="box">
    <div class="container">
        <div class="row">
            <div class="bo">
                <b>Lưu ý :</b>
                <p>Vietnam Airlines đặt trụ sở tại Việt Nam. Tùy theo chính sách của mình, ngân hàng phát hành thẻ có
                    thể thu phí trên mỗi giao dịch của Quý khách. Vietnam Airlines tuyệt đối không chịu
                    trách nhiệm khi phát sinh bất kỳ khoản phí nào liên quan đến việc sử dụng thẻ để thanh toán tại
                    website của Vietnam Airlines. Quý khách nên trực tiếp liên hệ với ngân hàng phát hành
                    thẻ để có đầy đủ thông tin về chi phí phát sinh.</p>
            </div>
            <div class="boc1 col-md-8">
                <div class="boc4 col-md-12">
                    <div class="box5">
                        <h3 class="thanhtoan">Chọn hình thức thanh toán</h3>
                        <p>Quý khách lựa chọn hình thức thanh toán dưới đây</p>
                    </div>
                    <hr class="my-2">
                    <div class="box4">
                        <div class="col-md-3 float-left">
                            <label>
                                <input type="radio" name="test" value="small" checked>
                                <img src="img/tai2.png">
                            </label>
                        </div>
                        <div class="col-md-3 float-left">
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="img/tai1.png">
                            </label>
                        </div>
                        <div class="col-md-3 float-left">
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="img/tai.png">
                            </label>
                        </div>
                        <div class="col-md-3 float-left">
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="img/tai3.png">
                            </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box1">
                        <p>Lưu ý: * Trường bắt buộc nhập thông tin</p>
                        <div class="col-md-4 float-left owner">
                            <label for="owner">Tên chủ thẻ*</label><br/>
                            <input type="text" id="owner" placeholder="Tên chủ thẻ">
                        </div>
                        <div class="col-md-4 float-left cardd">
                            <label for="cardNumber">Số thẻ*</label><br/>
                            <input type="text" id="cardNumber" placeholder="111-222-333-444">
                        </div>
                        <div class="col-md-4 float-left time">
                            <label>Ngày hết hạn</label><br/>
                            <select>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                            </select>
                            <select>
                                <option value="16"> 2020</option>
                                <option value="17"> 2021</option>
                                <option value="18"> 2022</option>
                                <option value="19"> 2023</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 CVV">
                            <label for="cvv">Mã an toàn*</label><br/>
                            <input type="text" id="cvv" placeholder="CVV">
                        </div>
                    </div>
                    <div class="box3">
                        <h5>Điều kiện thay đổi/hoàn vé</h5>
                        <p>Quý khách vui lòng xem các thông tin chi tiết dưới đây.</p>
                    </div>
                    <hr class="my-4">
                    <div class="box2">

                        <h6>Điều kiện thay đổi vé</h6>

                        <p>1. Giá vé Phổ thông siêu tiết kiệm:</p>
                        <ul>
                            <li>Hành trình nội địa Việt Nam: không được phép</li>
                            <li>Các hành trình khác: không được phép hoặc được phép mất phí/miễn phí tùy theo điều
                                kiện của từng loại giá vé
                            </li>
                        </ul>
                        <p>2. Giá vé Phổ thông tiết kiệm:</p>
                        <ul>
                            <li>Hành trình nội địa Việt Nam:</li>
                            <ul>
                                <li>Trước ngày khởi hành chặng bay ghi trên vé: được phép, mất phí</li>
                                <li>Vào/Sau ngày khởi hành chặng bay ghi trên vé: không được phép</li>
                            </ul>
                            <li>Các hành trình khác: không được phép hoặc được phép mất phí/miễn phí tùy theo điều
                                kiện của từng loại giá vé
                            </li>
                        </ul>
                        <p>3. Các loại giá vé khác: được phép, mất phí hoặc miễn phí tùy theo điều kiện của từng loại
                            giá vé
                        </p>

                        <h6>Điều kiện hoàn vé</h6>

                        <p> 1. Giá vé Phổ thông tiết kiệm/Phổ thông siêu tiết kiệm:</p>
                        <ul>
                            <li> Hành trình nội địa Việt Nam: không được phép</li>
                            <li> Các hành trình khác: không được phép hoặc được phép mất phí/miễn phí tùy theo điều
                                kiện của từng loại giá vé
                            </li>
                        </ul>
                        <p> 2. Các loại giá vé khác: được phép, mất phí hoặc miễn phí tùy theo điều kiện của từng loại
                            giá
                            vé</p>
                        <b>3. Nếu Quý khách lựa chọn các loại giá vé khác nhau, điều kiện giá vé chặt nhất sẽ được áp
                            dụng
                            cho
                            toàn bộ hành
                            trình.</b>
                        <p>4. Phí hành lý trả trước và chọn chỗ ngồi ưa thích không được hoàn trả.</p>
                        <p>5. Phí giữ giá tốt không được hoàn trả</p>
                    </div>
                    <div class="box6">
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr">Tôi đã đọc và đồng ý với điều kiện
                        </label>
                    </div>
                    <div class="box8">
                        <div class="boxx float-right">
                            <input type="submit" value="Chấp nhận và thanh toán ngay" class="box7">
                        </div>
                    </div>
                </div>
            </div>
            <div class="boc2 col-md-4">
                <div class="boc3">
                    <h4 class="title">Chi tiết chuyến bay</h4>
                    <div class="l1">
                        <div class="HAN">
                           <span class="img">
                               <img src="img/icon_plane_white.png" width="20px" height="20px">
                           </span>
                            <span class="ha">HAN</span>
                            <span class="img1">
                               <img src="img/icon_arrow_left_right.png" width="20px" height="20px">
                           </span>
                            <span class="ha1">VCA</span>
                            <div class="vnd">188000 VND</div>
                        </div>
                        <div class="itinerary-part-header"><span class="kh">Khởi hành</span>
                            <span class="date-time">09:00 , 12 tháng 8 2020</span></div>
                        <div class="itinerary-part-flight-details">
                            <div class="ducp-component-from-to ducp-component-flight-route origin-destination">
                                <div class="from left-content"><span class="ducp-component-airport departure stacked"
                                                                     data-code="">HÀ NỘI , VIỆT NAM(HAN)</span>
                                </div>
                                <div class="right-content">
                                    <div class="separator" aria-label="to"><span
                                            class="ducp-component-flight-route separator"><span
                                                class="spark-icon spark-icon-arrow-basic-right ducp-component-icon"
                                                aria-hidden="true"></span></span></div>
                                    <div class="to"><span class="ducp-component-airport arrival stacked" data-code="">Cần Thơ(VCA)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="duration-stop-details"><span class="duration-label"><span
                                        data-translation="shoppingCart.flightDetails.duration">Thời gian: </span></span>
                                <time class="dxp-duration" datetime="P2H15M" dir="ltr"><span
                                        data-translation="app.duration">2 tiếng 15 phút</span></time>
                                <span> / </span>
                                <span class="number-of-stops"><span
                                        data-translation="shoppingCart.flightDetails.totalStops">Bay thẳng</span></span><span
                                    class="stops"></span></div>
                            <div class="segment-operated-by-list">
                                <div class="dxp-operated-by">
                                <span class="flight-number fits-row"><img class="dxp-image logo" src="img/VN.png"
                                                                          height="14px" width="14px"
                                                                          alt="Vietnam Airlines">
                                    <span class="airlines-code">VN</span>
                                    <span class="airline-flight-number">1203</span>
                                    <span class="airline-flight-equipment">Airbus A321</span>
                                </span>
                                    <br>
                                    <span class="name"><span data-translation="flightSelection.operatedBy">Hãng khai thác Vietnam Airlines</span>
                                </span></div>
                            </div>
                            <div class="oo ">
                                <div class="nguoi">
                                    <span class="nguoi1">Người lớn x1</span>
                                </div>
                                <div class="gia">
                                    <span class="gia1">188000 VND</span>
                                </div>
                                <div class="ten">
                                    <span class="hoten">Mr.1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boxx9">
            <input class=" boxxx9" type="submit" value="Quay lại">
        </div>
    </div>
</section>
@endsection
