@extends('layouts.first')
@section('title')
    Sign In
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
            <img src="{{ asset('image/logo.svg') }}" alt="sports fantasy logo">
        </div>
        <form action="{{ route('register') }}" method="post">

            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" type="email" placeholder="{{__('Email Address')}}" name="email"
                       id="email" required>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" placeholder="{{__('Password')}}" name="password" id="password"
                       type="password" required>
            </div>
            <div class="row text-center d-flex justify-content-center form-group">
                <div class="form-group custom d-flex justify-content-between" style="width: 302px">
                    <div class="form-check">
                        <input class="form-check-input custom" placeholder="{{__('Password')}}" name="remember" id="remember"
                               type="checkbox" required>
                        <label class="form-check-label" style="color: white" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <a href="{{ url('/forgotten') }}" class="form-check-label" style="color: white" for="remember">
                        {{ __('Forgotten Password?') }}
                    </a>
                </div>
            </div>
            <div class="sign-btns text-center">
                <button id="signupBtn" class="signup-btn">{{__("LOG IN")}}</button>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <div class="separator">Or</div>
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="margin-top: 22px">
                <div class="social-round-btn" style="background-color: #CC2A2A;margin-right: 47px">G+</div>
                <div class="social-round-btn" style="background-color: #3A5894">f</div>
            </div>

        </form>
    </div>
@endsection

@section('script')
    <script type="application/javascript">

    </script>
@endsection
