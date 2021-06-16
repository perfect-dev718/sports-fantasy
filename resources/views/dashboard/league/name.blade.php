@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Name Of Your League')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="name-league">
        <div class="col-md-4 col-12">
            @if($errors->any())
                <x-alert :type="'danger'" :message="$errors->first()"></x-alert>
            @endif
            <form class="text-center" method="post" action="{{ route('league.name.save') }}">
                {!! csrf_field() !!}
                <select class="form-control">
                    <option value="" selected disabled>Playoff Team Name</option>
{{--                    <option value="team1">Team1</option>--}}
{{--                    <option value="team2">Team2</option>--}}
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                <input class="form-control" placeholder="Enter Name Of the League" required name="name">
                <select class="form-control">
                    <option value="" selected disabled>Playoff Tie-Breaker</option>
{{--                    <option value="team1">Team1</option>--}}
{{--                    <option value="team2">Team2</option>--}}
                </select>
                <button type="submit" class="create-btn" id="confirmBtn">{{__('confirm')}}</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            {{--$('#confirmBtn').click(function (){--}}
            {{--    location.href = "{{ route('league.number') }}";--}}
            {{--})--}}
        });
    </script>
@endsection
