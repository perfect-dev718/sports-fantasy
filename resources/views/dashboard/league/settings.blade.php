@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Fantasy Football Draft Order')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="my-league">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <ul class="link-list">
                    <a href="{{ route('draft.format') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Draft Format</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                    <a href="{{ route('game.team.play.off') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Play off Teams</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('league.scoreboard') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Scoreboard</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('league.manager') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Manager</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('league.info') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Information</p>
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
