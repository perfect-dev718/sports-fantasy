@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Fantasy Home')}}
@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="create-league">
        <div class="col-md-4 text-center">
            <img src="{{ asset('image/photo.svg') }}" alt="photo" class="photo">
            <h5 class="name">Mark Sinatra</h5>
            <h6 class="desc">Position</h6>
            <button class="create-btn" id="createBtn">Create A League</button>
            <button class="join-btn" id="joinBtn">Join A League</button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#createBtn').click(function (){
                location.href = "{{ route('league.name') }}";
            });
            $('#joinBtn').click(function (){
                location.href = "{{ route('league.join') }}";
            });
        });
    </script>
@endsection
