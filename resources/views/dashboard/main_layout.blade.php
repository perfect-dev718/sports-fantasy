<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("css/dataTables.bootstrap4.min.css") }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ env('app_name') }} | @yield('title')</title>
    <style>
        @media screen and (max-width: 480px) {
            .mobile-hidden {
                display: none!important;
            }
        }
        header {
            height: 80px;
            background: #0A0922;
        }
    </style>
    @yield('style')
</head>
<body>
<div id="app" class="dashboard">
    <header class="mobile-hidden d-flex justify-content-between">
        <div class="col-md-6 d-flex justify-content-start">
            <a href="/">
                <img src="{{ asset('image/logo.svg') }}" class="logo">
            </a>
            @yield('search')
        </div>
        <div class="col-md-3 d-flex justify-content-end link">
            <span class="fa fa-comment"></span>
            <span class="fa fa-bell"></span>
            <img src="/image/myphoto.svg" class="my-photo">
        </div>
    </header>
    <section>
        <div class="navbar">
            <div class="navbar-brand">
                <span>
                    <img src="/image/logo2.png">
                </span>
            </div>
            <div class="col-6">
                <div class="dropdown">
                    <button class="dropbtn">My Teams
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">League
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Players
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <a href="#home">Scoreboard</a>
                <a href="#home">Standings</a>
                <a href="#news">Opposing Teams</a>
            </div>
            <div class="col-4"></div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </section>
</div>
</body>
<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset("js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("js/notify.min.js")}}"></script>
<script>
    function toggleMenu() {
        if($('.menu-block').hasClass('show')){
            $('.menu-block').removeClass('show');
            $('#toggle-btn').removeClass('fa-times').addClass('fa-bars');
        }else{
            $('.menu-block').addClass('show');
            $('#toggle-btn').removeClass('fa-bars').addClass('fa-times');
        }
    }

    $(function (){

    });
</script>
@yield('script')
</html>
