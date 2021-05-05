@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Enter Email Address')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="name-league">
        <div class="col-md-4 col-12">
            <form class="text-center">
                <input class="form-control" placeholder="{{__('Email')}}" required name="email">
                <button type="button" class="create-btn" id="sendBtn">{{__('send')}}</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#sendBtn').click(function (){
                location.href = "{{ route('game.profile') }}";
            })
        });
    </script>
@endsection
