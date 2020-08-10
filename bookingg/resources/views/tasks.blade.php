<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/booking.css" />

    <!-- Styles -->
    <style>
        .section {
            position: relative;
            height: 100vh;
        }
        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        #booking {
            font-family: 'PT Sans', sans-serif;
            background-image: url('../images/background.jpg');
            background-size: cover;
            background-position: center;

        }

        .booking-form {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 6px;
            width: 100%;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .booking-form .form-control {
            background-color: #fff;
            height: 50px;
            color: #191a1e;
            border: none;
            font-size: 16px;
            font-weight: 400;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 40px;
            padding: 0px 25px;
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form .form-control::placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form input[type="date"].form-control:invalid {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .booking-form select.form-control+.select-arrow {
            position: absolute;
            right: 10px;
            bottom: 6px;
            width: 32px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: rgba(0, 0, 0, 0.3);
            font-size: 14px;
        }

        .booking-form select.form-control+.select-arrow:after {
            content: '\279C';
            display: block;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .booking-form .form-label {
            display: block;
            margin-left: 20px;
            margin-bottom: 5px;
            font-weight: 400;
            text-transform: uppercase;
            line-height: 24px;
            height: 24px;
            font-size: 12px;
            color: #fff;
        }

        .booking-form .form-checkbox input {
            position: absolute !important;
            margin-left: -9999px !important;
            visibility: hidden !important;
        }

        .booking-form .form-checkbox label {
            position: relative;
            padding-top: 4px;
            padding-left: 30px;
            font-weight: 400;
            color: #fff;
        }

        .booking-form .form-checkbox label+label {
            margin-left: 15px;
        }

        .booking-form .form-checkbox input+span {
            position: absolute;
            left: 2px;
            top: 4px;
            width: 20px;
            height: 20px;
            background: #fff;
            border-radius: 50%;
        }

        .booking-form .form-checkbox input+span:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0px;
            height: 0px;
            border-radius: 50%;
            background-color: hsl(44,86%,46%);
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .booking-form .form-checkbox input:not(:checked)+span:after {
            opacity: 0;
        }

        .booking-form .form-checkbox input:checked+span:after {
            opacity: 1;
            width: 10px;
            height: 10px;
        }

        .booking-form .form-btn {
            margin-top: 27px;
        }

        .booking-form .submit-btn {
            color: #fff;
            background-color: hsl(44,86%,46%);
            font-weight: 400;
            height: 50px;
            font-size: 14px;
            border: none;
            width: 100%;
            border-radius: 40px;
            text-transform: uppercase;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .booking-form .submit-btn:hover,
        .booking-form .submit-btn:focus {
            opacity: 0.8;
        }

    </style>
</head>
<body>
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
                                <input class="form-control" type="text" placeholder="Thành phố hoặc sân bay" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Điểm đến</span>
                                <input class="form-control" type="text" placeholder="Thành phố hoặc sân bay" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <span class="form-label">Ngày đi</span>
                                <input class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <span class="form-label">Ngày về</span>
                                <input class="form-control" type="date" required>
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
                                <button class="submit-btn">Tìm chuyến bay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
