@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Game Center')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="row" id="game-center">
        <div class="col-12 col-md-6 pr-5 d-flex justify-content-end">
            <button type="button" class="my-league-btn" id="my-league-btn">
                <div class="header">San Diego 10-Team H2H Points</div>
                <div class="content">
                    <div class="row justify-content-center align-items-center" style="margin-bottom: 5px">
                        <img src="/image/logo3.svg" class="logo">
                        <span class="team-name">Team L.Bell</span>
                    </div>
                    <p class="desc">
                        Snake Draft   Tue, Jun 16, 2:45 AM
                    </p>
                    <div class="day-block d-flex justify-content-between">
                        <div class="day">
                            <h3>03</h3>
                            <small>Days</small>
                        </div>
                        <div class="day">
                            <h3>16</h3>
                            <small>Hour</small>
                        </div>
                        <div class="day">
                            <h3>40</h3>
                            <small>Minutes</small>
                        </div>
                        <div class="day">
                            <h3>15</h3>
                            <small>Seconds</small>
                        </div>
                    </div>
                </div>
                <div class="footer">My League</div>
            </button>
        </div>
        <div class="col-12 col-md-6 pl-5 d-flex justify-content-start">
            <button type="button" class="public-league-btn" id="my-team-btn">
                <img src="{{ asset('image/teams.svg') }}">
                <p>My Teams</p>
            </button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#public-league-btn').click(function (){
                location.href = "{{ route('invite.friend') }}";
            });

            $('#my-league-btn').click(function (){
                location.href = "{{ route('game.my.league') }}";
            });

            $('#my-team-btn').click(function (){
                location.href = "{{ route('game.my.teams') }}";
            });
        });
    </script>
@endsection
