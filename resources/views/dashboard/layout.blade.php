<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ env('app_name') }} | @yield('title')</title>
    <style>
        @media screen and (max-width: 480px) {
            .mobile-hidden {
                display: none !important;
            }
        }

        header {
            padding-top: 100px;
        }

        .sidebar-menu {
            padding-left: 80px;
        }

        .page-title {
            text-align: center;
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 24px;
            color: #FFFFFF;
        }
    </style>
    @yield('style')
</head>
<body>
<div id="app" class="dashboard">
    <header class="container-fluid row" style="padding-top: 100px">
        <div class="col-4 mobile-hidden sidebar-menu">
            <a href="javascript: toggleMenu()">
                <span class="fa fa-bars" id="toggle-btn"
                      style="font-size: 40px; font-weight: bold; color: white"></span>
            </a>
        </div>
        <div class="col-4 page-title">
            @yield('pagetitle')
        </div>
        <div class="col-4 page-title">
            @yield('pageback')
        </div>
    </header>
    <div class="menu-block">
        <div class="justify-content-center d-flex">
            <div class="menu-logo-border">
                <img src="{{ asset('image/logo.svg') }}">
            </div>
        </div>
        <a>
            <div class="menu-items d-flex justify-content-start">
                <svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M22.6574 26.6982V3.30182C22.6574 2.51496 22.0129 1.87497 21.2212 1.87497H3.32502C2.53264 1.87497 1.88817 2.51496 1.88817 3.30182V26.6982C1.88817 27.4851 2.53264 28.125 3.32502 28.125H21.2212C22.0129 28.125 22.6574 27.4851 22.6574 26.6982ZM21.2211 0C23.0538 0 24.5455 1.48122 24.5455 3.30181V26.6982C24.5455 28.5188 23.0538 30 21.2211 30H3.32497C1.49161 30 0 28.5188 0 26.6982V3.30181C0 1.48122 1.49161 0 3.32497 0H21.2211ZM3.77629 25.9761H20.7693V9.10145H3.77629V25.9761ZM4.72039 5.93875H12.2728C12.7946 5.93875 13.2169 5.51938 13.2169 5.00127C13.2169 4.48315 12.7946 4.06379 12.2728 4.06379H4.72039C4.19864 4.06379 3.77633 4.48315 3.77633 5.00127C3.77633 5.51938 4.19864 5.93875 4.72039 5.93875Z"
                          fill="#979BAA"/>
                </svg>
                <h6>{{__('Network')}}</h6>
            </div>
        </a>
        <a href="{{ route('profile') }}">
            <div class="menu-items d-flex justify-content-start">
                <span class="fa fa-user" style="font-size: 26px"></span>
                <h6>{{__("User Profile")}}</h6>
            </div>
        </a>

        <a>
            <div class="menu-items d-flex justify-content-start input-group">
                {{--                <span class="fa fa-message"></span>--}}
                <span class="fa fa-commenting"></span>
                <h6>{{__("Messages List")}}</h6>
            </div>
        </a>

        <a>
            <div class="menu-items d-flex justify-content-start">
                <span class="fa fa-cog"></span>
                <h6>{{__("Settings")}}</h6>
            </div>
        </a>

        <a>
            <div class="menu-items d-flex justify-content-start">
                <span class="fa fa-search" style="margin-right: 40px"></span>
                <input class="form-control" type="search" placeholder="{{__('Search')}}">
            </div>
        </a>
        <a style="position: absolute; bottom: 10%" class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="menu-items d-flex justify-content-start">
                <span class="fa fa-sign-out"></span>
                <h6>{{__('Log Out')}}</h6>
            </div>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{asset("js/notify.min.js")}}"></script>
<script>
    function toggleMenu() {
        if ($('.menu-block').hasClass('show')) {
            $('.menu-block').removeClass('show');
            $('#toggle-btn').removeClass('fa-times').addClass('fa-bars');
        } else {
            $('.menu-block').addClass('show');
            $('#toggle-btn').removeClass('fa-bars').addClass('fa-times');
        }
    }

    $(function () {
        @if(Session::has('success'))
            $.notify('{{ Session::get('success') }}', 'success');
        @endif
    });
</script>
@yield('script')
</html>
