@extends('layouts.first')
@section('title')

@endsection

@section('style')
    <style>
        .logo {
            margin-bottom: 38px;
            margin-top: 92px;
        }
        .logo img {
            height: 236px;
            width: 278.6111145019531px;
        }
        .logo-title {
            margin-bottom: 68px;
        }
        .logo-title h5{
            /*font-family: Rubik;*/
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 0;
            text-align: center;
            color: #FFFFFF;
        }
        .logo-title h6{
            /*font-family: Rubik;*/
            font-style: normal;
            font-weight: 200;
            font-size: 18px;
            line-height: 51px;
            text-align: center;
            color: #FFFFFF;
        }
        .signup-btn {
            margin-bottom: 41px;
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
        .login-btn {
            background: linear-gradient(180deg, #FFFFFF 51.06%, #4BA2F1 141.49%);
            height: 47px;
            width: 300px;
            left: 1px;
            top: 1px;
            border-radius: 30px;
            /*font-family: Rubik;*/
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
            /* identical to box height */
            color: #0F1441;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo text-center">
            <img src="{{ asset('image/logo.svg') }}" alt="sports fantasy logo">
        </div>
        <div class="logo-title text-center">
            <h5>Welcome</h5>
            <h6>to Double Draft Fantasy</h6>
        </div>
        <div class="sign-btns text-center">
            <button id="signupBtn" class="signup-btn">SIGN UP</button>
        </div>
        <div class="sign-btns text-center">
            <button id="loginBtn" class="login-btn">LOG IN</button>
        </div>
    </div>
@endsection

@section('script')
    <script type="application/javascript">
        $(function (){
            $('#signupBtn').click(function (e){
                 location.href = "{{ route('register') }}";
            });

            $('#loginBtn').click(function (e){
                location.href = "{{ route('login') }}";
            });
        });
    </script>
@endsection
