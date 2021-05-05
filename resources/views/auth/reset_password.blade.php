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
                <div class="form-group custom text-center" style="width: 302px; margin-bottom: 105px">
                    <label class="form-check-label" style="color: white" for="remember">
                        {{ __('Write your new password') }}
                    </label>
                </div>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" type="password" placeholder="{{__("New Password")}}" name="password" id="password" required>
            </div>

            <div class="col-md-12 text-center d-flex justify-content-center">
                <input class="form-control custom" placeholder="{{__('Confirm Password')}}" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="sign-btns text-center">
                <button id="submitBtn" class="signup-btn">{{__("SUBMIT")}}</button>
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
