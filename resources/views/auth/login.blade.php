@extends('layouts.first')
@section('title')
    Sign In
@endsection

@section('style')

@endsection

@section('content')
    <div class="container" id="login-page">
        <div class="logo text-center">
            <img src="{{ asset('image/logo.svg') }}" alt="sports fantasy logo">
        </div>
        <form action="{{ route('login') }}" method="post">
            {!! csrf_field() !!}
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
                <button id="signInBtn" type="button" class="signup-btn">{{__("LOG IN")}}</button>
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
        $(function (){
            $('#signInBtn').click(function (){
                location.href = "{{ route('league.create') }}";
            })
        })
    </script>
@endsection
