@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')

@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="create-league">
        <div class="col-md-4 text-center">
            <img src="{{ asset('storage/photo.svg') }}" alt="photo" class="photo">
            <h5 class="name">Mark Sinatra</h5>
            <h6 class="desc">Position</h6>
            <p class="star"><span class="fa fa-star"></span>&nbsp;Star points 5</p>
            <div class="btn-groups">
                <button class="draft-btn" id="draftBtn">
                    <img src="{{ asset('image/draft.svg') }}">
                    <span>
                        Draft Your League
                    </span>
                    <span class="fa fa-long-arrow-right"></span>
                </button>
                <button class="create-team-btn" id="createTeamBtn">
                    <img src="{{ asset('image/team.svg') }}">
                    <span>
                        Create Your Team
                    </span>
                    <span class="fa fa-long-arrow-right"></span>
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#draftBtn').click(function (){
                location.href = "{{ route('draft') }}";
            })
        });
    </script>
@endsection
