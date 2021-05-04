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


    </style>
@endsection

@section('content')
    <div class="container">
        <div class="logo text-center">
            <img src="{{ asset('image/logo.svg') }}" alt="sports fantasy logo">
        </div>
        <form action="{{ route('register') }}" method="post">
            <div class="row text-center d-flex justify-content-center form-group">
                <div class="form-group custom text-center" style="width: 302px; margin-bottom: 138px">
                    <h4 style="color: white" for="remember">
                        {{ __('Forgotten Your Password?') }}
                    </h4>
                    <label class="form-check-label" style="color: white" for="remember">
                        {{ __('Please Enter Username Or Email') }}
                    </label>
                </div>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" type="email" placeholder="{{__('Email Address')}}" name="email"
                       id="email" required>
            </div>

            <div class="sign-btns text-center">
                <button id="sendEmail" class="signup-btn">{{__("SEND EMAIL")}}</button>
            </div>

        </form>
    </div>
@endsection

@section('script')
    <script type="application/javascript">
        $(function (){
            $('#sendEmail').click(function (){
                location.href = "{{ url('password-reset') }}";
            });
        });
    </script>
@endsection
