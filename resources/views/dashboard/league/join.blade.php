@extends('dashboard.main_layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')

@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container" id="join-league">
        <div class="row d-flex justify-content-center logo-block">
            <img src="/image/league_logo.svg">
        </div>
        <div class="ledgue-card d-flex m-auto row">
            <div class="col-6 block" style="padding-top: 24px">
                <h4 class="title" style="margin-bottom: 0">GET A TEAM</h4>
                <button class="create-btn">JOIN A PUBLIC LEAGUE</button>
            </div>
            <div class="col-6 block" style="padding-top: 45px">
                <h4 class="title" style="margin-bottom: 25px">RECEIVED AN INVITATION</h4>
                <input class="form-control custom" style="margin-bottom: 0" placeholder="Enter ID Of The Invitation">
                <button class="create-btn">JOIN</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){

        });
    </script>
@endsection
