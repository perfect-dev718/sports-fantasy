@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('User Profile')}}
@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container" id="profile-page">
        <div class="row navbar mobile-hidden justify-content-start">
            <a href="{{ route('game.my.teams') }}" class="link">My Teams</a>
            <a href="#" class="link">Notifications</a>
        </div>
        <div class="row info-block justify-content-center">
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img src="/image/photo.svg" alt="My photo" class="avatar">
                <div class="name-block">
                    <h4 class="name">Mark Sinatra</h4>
                    <small>Position</small>
                </div>
                <button class="game-btn" id="game-btn">Game Center</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#game-btn').click(function (){
                location.href = "{{ route('game.center') }}";
            });
        });
    </script>
@endsection
