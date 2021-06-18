@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('My League')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()"><span class="fa fa-comment text-white"></span>&nbsp;&nbsp;{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="my-league">
        <div class="header">
            <div class="header-logo justify-content-between align-items-center">
                <div>
                    <img src="/image/noborder-team.svg" class="logo">
                    <select class="no-border text-white font-20 lh-18 font-weight-bold" id="selected-league">
                        @foreach($leagues as $league)
                            <option value="{{ $league->id }}">{{ $league->name }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('league.name') }}" class="text-white font-weight-bold font-20" title="Create New League">
                    <span class="fa fa-plus-circle"></span> Add</a>
            </div>
        </div>
        <div id="info-block">
        </div>
        <div id="score-block">
        </div>
        <div id="match-block">
        </div>
    </div>
@endsection

@section('script')
    <script>
        var selected_league;
        var _token = "{{ csrf_token() }}";
        $(function (){
            selected_league = $('#selected-league').val();
            showLeagueInfo();
        });

        function showLeagueInfo() {
            $.ajax({
                url: "{{ route('getLeagueInfoAjax') }}",
                data: {_token: _token, id: selected_league},
                method: "POST",
                success: function (res) {
                    if(res.success) {
                        $('#info-block').html(res.info);
                        $('#score-block').html(res.score);
                        $('#match-block').html(res.matchup);
                    }
                }
            })
        }
    </script>
@endsection
