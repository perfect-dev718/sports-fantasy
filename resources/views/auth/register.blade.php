@extends('layouts.first')
@section('title')
    Sign Up
@endsection

@section('style')
    <style>
        .logo {
            margin-bottom: 18px;
            margin-top: 91px;
        }

        .logo img {
            height: 118px;
            width: 139.30555725097656px;
        }

        .form-control.custom {
            height: 47px;
            width: 302px;
            left: 0px;
            top: 0px;
            border-radius: 20px;
            /*font-family: Rubik;*/
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 19px;
            /* identical to box height */
            color: #fff;
            margin-bottom: 20px;
            background-color: transparent;
        }

        .form-control::placeholder {
            color: #fff;
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
        }

        select option {
            background: black;
        }

        .form-control.half {
            height: 47px;
            width: 145px;
        }

        .form-control.half:first-child {
            margin-right: 10px;
        }

        .signup-btn {
            margin-bottom: 25px;
            background: linear-gradient(122.33deg, #DC3C08 9.23%, #E94915 44.64%, #F87700 93.17%);
            border-radius: 30px;
            height: 47px;
            width: 302px;
            left: 569px;
            top: 504px;
            /*font-family: Rubik;*/
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
            /* identical to box height */
            color: #FFFFFF;
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            width: 302px;
            color: #A896C7;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #A896C7;
        }

        .separator:not(:empty)::before {
            margin-right: .25em;
        }

        .separator:not(:empty)::after {
            margin-left: .25em;
        }

        .social-round-btn {
            width: 46px;
            height: 46px;
            border-radius: 100%;
            color: white;
            font-weight: bold;
            text-align: center;
            align-items: center;
            font-size: 20px;
            padding-top: 7px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo text-center">
            <a href="{{ route('/') }}">
                <img src="{{ asset('image/logo.svg') }}" alt="sports fantasy logo">
            </a>
        </div>
        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" placeholder="{{__('First Name')}}" name="first_name" id="first_name"
                       required>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" placeholder="{{__('Last Name')}}" name="last_name" id="last_name"
                       required>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" type="email" placeholder="{{__('Email Address')}}" name="email"
                       id="email" required>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" placeholder="{{__('Password')}}" name="password" id="password"
                       type="password" required>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" type="password" placeholder="{{__('Confirm Password')}}" name="password_confirmation"
                       id="password_confirmation">
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <select class="form-control custom half" name="age" id="age">
                    <option value="" disabled selected>{{__("Age")}}</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                </select>
                <select class="form-control custom half" name="gender" id="gender">
                    {{--                    <option>{{__('Gender')}}</option>--}}
                    <option value="" disabled selected>{{__("Gender")}}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <select class="form-control custom" name="country" id="country">
                    <option value="" disabled selected>{{__('Country')}}</option>
                    <option value="germany">Germany</option>
                </select>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom half" placeholder="{{__('City')}}" name="city" id="city">
                <input class="form-control custom half" placeholder="{{__('Zip Code')}}" name="zip_code" id="zip_code">
            </div>
            <div class="sign-btns text-center">
                <button id="signupBtn" type="submit" class="signup-btn">{{__("SIGN UP")}}</button>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <div class="separator">Or</div>
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="margin-top: 22px">
                <div class="social-round-btn" style="background-color: #CC2A2A;margin-right: 47px">G+</div>
                <div class="social-round-btn" style="background-color: #3A5894">f</div>
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="margin-top: 11px">
                <p style="line-height: 17px; font-size: 14px; color: white">
                    Already have an account? <a href="{{ route('login') }}" style="color: darkred">Log in</a>
                </p>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="application/javascript">

    </script>
@endsection
