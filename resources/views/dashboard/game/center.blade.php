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
            <button type="button" class="invite-btn" id="invite-btn">
                <span style="position: relative; display: inline-block">
                    <img src="{{ asset('image/avatar.svg') }}">
                    <span class="fa fa-plus-circle" style="position: absolute; bottom: 10px; right: -6px; color: #D1E7FF"></span>
                </span>
                <p>Invite Friend</p>
            </button>
        </div>
        <div class="col-12 col-md-6 pl-5 d-flex justify-content-start">
            <button type="button" class="public-league-btn" id="public-league-btn">
                <img src="{{ asset('image/public_league.svg') }}">
                <p>Make the League Public</p>
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
        });
    </script>
@endsection
