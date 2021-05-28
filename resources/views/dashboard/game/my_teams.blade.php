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
        <div class="row justify-content-center">
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
