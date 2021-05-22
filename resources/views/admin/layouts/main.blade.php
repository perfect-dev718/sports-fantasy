<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('favicon.ico')}}" rel="icon" type="image/x-icon">

    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">--}}
<!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css") }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/dataTables.bootstrap4.min.css") }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/select2.css") }}"/>
{{--    <link rel="icon" href="{{ asset('images/favicon1.png') }}" sizes="16x16" type="image/png" />--}}
    <!-- MultiSelectDropdownPlugin -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0/cropper.min.css"
          integrity="sha256-FeDcPwV8ZgxG1MU5L/b2i8clOmqZJKK0eyDHqrQaXxY=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/chosen.css') }}">
    <style>
        .nav-item .select2 {
            width: 120px !important;
            height: 100% !important;
        }

        .select2-selection {
            padding: 0 !important;
        }

        .dataTables_filter {
            /*display: none;*/
        }

        .select2-search {
            display: none;
        }

        .img_holder {
            height: 60px;
            width: 60px;
        }

        .img_holder img {
            height: 100%;
        }

        .w-20 {
            width: 20%;
        }

        @media (max-width: 720px) {
            .w-20 {
                width: 100% !important;
                justify-content: flex-start !important;
            }

            .w-20 + input {
                width: 100% !important;
            }
        }

        label {
            justify-content: flex-start !important;
            align-items: center;
            color: #7c858e;
        }

        .loader {
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: 1000;
            background: #fcfcfc url("http://www.mvgen.com/loader.gif") no-repeat scroll center center / 120px 120px;
            top: 0;
            left: 0;
            opacity: 0.5;
        }

        .input-group {
            padding: 20px 40px;
            border-bottom-color: #EEF1F4;
            border-bottom-width: 0.5px;
            border-bottom-style: solid;
        }

        .cropper-container {
            margin: auto;
        }
    </style>
    @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{route('home')}}" class="brand-link">
            <img src="{{asset('/image/logo.png')}}" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>
    @php
        $urls = explode(".", Route::currentRouteName());
        $url = "";
        if(count($urls)>0) {
            $url = $urls[0];
        }
    @endphp

    <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('user.admin') }}" class="nav-link @if($url==='user') active @endif">
                            <i class="nav-icon fa fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{config('app.name')}}</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>{{ __('fields.version') }}</b> 1.0.0
        </div>
        <strong>{{ __('fields.copyright') }} &copy; {{ date('Y') }} <a
                href="{{route('home')}}">{{config('app.name')}}</a>.</strong>
        {{ __('fields.allRightsReserved') }}.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>

{{--https://code.jquery.com/jquery-3.3.1.js--}}
<script src="{{asset("js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("js/dataTables.bootstrap4.min.js")}}"></script>

<script src="{{ asset("js/select2.js") }}"></script>
<script src="{{ asset("js/cropper.min.js") }}"></script>
{{--jquery chosen--}}
<script src="{{ asset("js/chosen.jquery.min.js") }}"></script>
<!-- MultiSelectDropdownPlugin -->
{{--<script src="{{asset('MultiSelectDropdownPlugin/dropdowntree.js')}}"></script>--}}

<script>

    $(function (){
       // $('select').chosen();
       // $('.chosen-container').addClass('form-control').css('border', 'none');
    });
</script>
@yield('script')
</body>
</html>
