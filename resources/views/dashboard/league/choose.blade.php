@extends('dashboard.main_layout')
@section('title')
    Choose A League To Join
@endsection

@section('style')

@endsection

@section('pagetitle')

@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container" id="choose-league">
        <h3 class="title">Choose A League To Join</h3>
        <div class="content-block">
            <ul class="content-list">
                @for($i = 0; $i<10; $i++)
                <li class="row">
                    <div class="col-2 avatar-block">
                        <img class="avatar" src="{{ asset('image/league_avatar.svg') }}">
                    </div>
                    <div class="col-4 name-block">
                        <h5 class="name">Name Of the league</h5>
                        <p class="desc">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="col-6 d-flex justify-content-end action-block">
                        <button data-toggle="modal" data-target="#enterIdModal" class="join-link">Join</button>
                    </div>
                </li>
                @endfor
            </ul>
        </div>
        <div class="league modal" id="enterIdModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <form>
                                <h3 class="title">Enter ID Of The League</h3>
                                <input class="form-control custom" style="margin-bottom: 20px" placeholder="Enter ID Of The Invitation">
                                <button type="button" class="create-btn" id="enterIdBtn">JOIN</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">

                    </div>

                </div>
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
