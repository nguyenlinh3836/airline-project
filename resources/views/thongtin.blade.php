@extends('layouts.default')
@section('title','Thông Tin')
@section('css','css/thongtin.css')
@section('content')
    <section class="parallax">
        <div>
            <h1>THÔNG TIN</h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="contents col-md-12">
                        <div class="tab col-md-12">
                            <button  class="tablinks active">Thông tin cá nhân</button>
                        </div>

                        <div id="Thông tin cá nhân" class="tabcontent">
                            <form class="row col-md-12" method="post" action="/store">
                                @method('PATCH')
                                @csrf
                                <div class="col-md-4">
                                    <h3><span>Thông tin cá nhân</span></h3>
                                    <p>Qúy khách nhập đúng thông tin trong hộ chiếu/Chứng minh nhân dân/
                                        Căn cước công dân.</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Danh xưng</span>
                                        </p>
                                        <div class="col-md-8">
                                            <select class="custom-select my-1 mr-sm-2" name="danh_xung">
                                                <option selected>Chọn</option><option  value="1">Cô/Chị</option>
                                                <option value="2">Ông</option>
                                                <option value="3">Bà</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Họ</span>
                                        </p>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="ho" placeholder="Nhập" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Đệm và Tên</span>
                                        </p>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="ten" placeholder="Nhập" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Giới tính</span>
                                        </p>
                                        <div class="col-md-8">
                                            <select class="custom-select my-1 mr-sm-2" name="gioi_tinh">
                                                <option selected>Chọn</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Ngày sinh</span>
                                        </p>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="date" name="ngay_sinh" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Di động</span>
                                        </p>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="control col-md-5">
                                                    <select class="custom-select my-1 mr-sm-2" >
                                                        <option selected>Chọn Quốc gia/vùng</option><option value="1">Haiti(509)</option>
                                                        <option value="2">Hong Kong,China(852)</option>
                                                        <option value="3">Hungary(36)</option>
                                                        <option value="4">Iran(98)</option>
                                                        <option value="5">Italy(39)</option>
                                                        <option value="6">Japan(81)</option>
                                                        <option value="7">Jordan(962)</option>
                                                        <option value="8">Laos(856)</option>
                                                        <option value="9">Benin(229)</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-7 ">
                                                    <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="col-md-4 ">
                                            <span>Địa chỉ thư điện tử</span>
                                        </p>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="email"  placeholder="Nhập email" required>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <p class="col-md-4 padding10">
                                            <span>Quốc tịch</span>
                                        </p>
                                        <div class="col-md-8">
                                            <select id="ddlLotusMilesEnrollMemberNationality" class="custom-select my-1 mr-sm-2">
                                                <option hidden="" value="0"></option><option value="AF">AFGHANISTAN</option>
                                                <option value="BD">BANGLADESH</option><option value="BB">BARBADOS</option>
                                                <option value="BY">BELARUS</option><option value="BE">BELGIUM</option>
                                                <option value="BZ">BELIZE</option><option value="BJ">BENIN</option>
                                                <option value="BM">BERMUDA</option><option value="BT">BHUTAN</option>
                                                <option value="BF">BURKINA FASO</option><option value="BU">BURMA</option>
                                                <option value="BI">BURUNDI</option><option value="KH">CAMBODIA</option>
                                                <option value="CM">CAMEROON</option><option value="CA">CANADA</option>
                                                <option value="TD">CHAD</option><option value="CL">CHILE</option><option value="CN">CHINA</option>
                                                <option value="CO">COLOMBIA</option><option value="KM">COMOROS</option><option value="CG">CONGO</option>
                                                <option value="CK">COOK ISLANDS</option><option value="CR">COSTA RICA</option><option value="CI">COTE DIVOIRE</option>
                                                <option value="HR">CROATIA</option><option value="CU">CUBA</option><option value="CY">CYPRUS</option><option value="CZ">CZECH REPUBLIC</option>
                                                <option value="DK">DENMARK</option><option value="DJ">DJIBOUTI</option>
                                                <option value="GW">GUINEA-BISSAU</option><option value="GY">GUYANA</option>
                                                <option value="HK">Hongkong, China</option><option value="HU">HUNGARY</option>
                                                <option value="IS">ICELAND</option><option value="IN">INDIA</option>
                                                <option value="ID">INDONESIA</option><option value="IR">IRAN (ISLAMIC REPUBLIC OF)</option>
                                                <option value="IQ">IRAQ</option><option value="IE">IRELAND</option><option value="IL">ISRAEL</option>
                                                <option value="IT">ITALY</option><option value="JM">JAMAICA</option><option value="JP">JAPAN</option>
                                                <option value="KW">KUWAIT</option><option value="KG">KYRGYZSTAN (KIRGISTAN)</option>
                                                <option value="LV">LATVIA</option><option value="LB">LEBANON</option><option value="LS">LESOTHO</option>
                                                <option value="LR">LIBERIA</option><option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                                                <option value="LI">LIECHTENSTEIN</option><option value="LT">LITHUINIA</option>
                                                <option value="LU">LUXEMBOURG</option><option value="MO">Macau, China</option>
                                                <option value="MG">MADAGASCAR</option><option value="MW">MALAWI</option>
                                                <option value="MY">MALAYSIA</option><option value="MV">MALDIVES</option>
                                                <option value="ML">MALI</option><option value="MT">MALTA</option>
                                                <option value="MH">MARSHALL ISLANDS</option><option value="MQ">MARTINIQUE</option>
                                                <option value="MR">MAURITANIA</option><option value="MU">MAURITUS</option>
                                                <option value="YT">MAYOTTE</option><option value="MX">MEXICO</option>
                                                <option value="MI">MIDWAY ISLANDS</option><option value="MD">MOLDOVA, REPUBLIC OF</option>
                                                <option value="MC">MONACO</option><option value="MN">MONGOLIA</option>
                                                <option value="MS">MONTSERRAT</option><option value="MA">MOROCCO</option>
                                                <option value="MZ">MOZAMBIQUE</option><option value="MM">MYANMAR</option>
                                                <option value="NA">NAMIBIA</option><option value="NR">NAURU</option>
                                                <option value="NP">NEPAL</option><option value="NL">NETHERLANDS</option>
                                                <option value="AN">NETHERLANDS ANTILLES</option><option value="NZ">NEW ZEALAND</option>
                                                <option value="NI">NICARAGUA</option><option value="NE">NIGER</option>
                                                <option value="NG">NIGERIA</option><option value="NU">NIUE</option>
                                                <option value="OM">OMAN</option><option value="PC">PACIFIC ISLANDS</option>
                                                <option value="PK">PAKISTAN</option><option value="PW">PALAU</option><option value="PA">PANAMA</option>
                                                <option value="PG">PAPUA NEW GUINEA</option><option value="PY">PARAGUAY</option>
                                                <option value="PE">PERU</option><option value="PH">PHILIPPINES</option>
                                                <option value="PN">PITCAIRN ISLAND</option><option value="PL">POLAND</option>
                                                <option value="PT">PORTUGAL</option><option value="PR">PUERTO RICO</option>
                                                <option value="RE">REUNION</option><option value="RO">ROMANIA</option>
                                                <option value="SA">SAUDI ARABIA</option><option value="SN">SENEGAL</option>
                                                <option value="SC">SEYCHELLES</option><option value="SL">SIERRA LEONE</option>
                                                <option value="SG">SINGAPORE</option><option value="SK">SLOVAKIA</option><option value="SI">SLOVENIA</option>
                                                <option value="SB">SOLOMON ISLANDS</option><option value="SO">SOMALIA</option>
                                                <option value="ZA">SOUTH AFRICA</option><option value="GS">SOUTH GEORGIA</option>
                                                <option value="SD">SUDAN</option><option value="SR">SURINAME</option>
                                                <option value="CH">SWITZERLAND</option><option value="SZ">SWITZERLAND</option>
                                                <option value="SY">SYRIAN ARAB REPUBLIC</option><option value="TW">Taiwan, China</option>
                                                <option value="TJ">TAJIKISTAN</option><option value="TZ">TANZANIA, UNITED REPUBLIC</option>
                                                <option value="TH">THAILAND</option><option value="PS">THE STATE OF PALESTINE</option>
                                                <option value="TG">TOGO</option><option value="TK">TOKELAU</option><option value="TO">TONGA</option>
                                                <option value="TT">TRINIDAD AND TOBAGO</option><option value="TN">TUNISIA</option>
                                                <option value="TR">TURKEY</option><option value="TM">TURKMENISTAN</option>
                                                <option value="TV">TUVALU</option><option value="UG">UGANDA</option><option value="UA">UKRAINE</option>
                                                <option value="AE">UNITED ARAB EMIRATES</option><option value="UK">UNITED KINGDOM</option>
                                                <option value="US">UNITED STATES OF AMERICA</option><option value="HV">UPPER VOLTA</option>
                                                <option value="UY">URUGUAY</option><option value="SU">USSR</option><option value="UZ">UZBEKISTAN</option>
                                                <option value="VU">VANUATU</option><option value="VA">VATICAN CITY STATE</option>
                                                <option value="VE">VENEZUELA</option><option selected="" value="VN">VIETNAM</option>
                                                <option value="EH">WESTERN SAHARA</option><option value="YE">YEMEN, REPUBLIC OF</option>
                                                <option value="YU">YUGOSLAVIA</option><option value="ZR">ZAIRE</option><option value="ZM">ZAMBIA</option>
                                                <option value="ZW">ZIMBABWE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input class="btn btn-primary" type="submit"  value="ĐĂNG KÍ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
