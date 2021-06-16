@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Name Of Your Team')}}
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
            @if(Session::has('success'))
                <x-alert :type="'success'" :message="Session::get('success')"></x-alert>
            @endif
            <form class="text-center" method="post" action="{{ route('game.team.name.save') }}">
                {!! csrf_field() !!}
                <input class="form-control" placeholder="Enter Name Of Your Team" required name="name">
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
