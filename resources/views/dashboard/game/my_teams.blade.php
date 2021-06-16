@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('My Teams')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="my-league">
        <div class="header">
            <div class="header-logo justify-content-between align-items-center">
                <div>
                    <img src="/image/noborder-team.svg" class="logo">
                    <select class="no-border text-white font-20 lh-18 font-weight-bold">
                        <option value="">Choose Team</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('game.team.create') }}" class="text-white font-weight-bold font-20"
                   title="Create New Team"><span class="fa fa-plus-circle"></span> Add</a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <ul class="link-list">
                    <a href="{{ route('game.players.free.agency') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Players Free Agency</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                    <a href="{{ route('game.league.schedule') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Schedule</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                    <a href="{{ route('game.standings') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Standings</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                    <a href="{{ route('game.trade.offer') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Offer a Trade</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                </ul>
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
