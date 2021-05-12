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
                    <li>
                        <p>Players Free Agency</p>
                        <a href="{{ route('game.players.free.agency') }}">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li>
                        <p>League Schedule</p>
                        <a href="{{ route('game.league.schedule') }}">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li>
                        <p>Standings</p>
                        <a href="{{ route('game.standings') }}">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li>
                        <p>Offer a Trade</p>
                        <a href="{{ route('game.offer.trade') }}">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
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
