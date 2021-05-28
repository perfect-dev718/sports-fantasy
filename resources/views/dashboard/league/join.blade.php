@extends('dashboard.main_layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')

@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container" id="join-league">
        <div class="row d-flex justify-content-center logo-block">
            <img src="/image/league_logo.svg">
        </div>
        <div class="ledgue-card d-flex m-auto row">
            <div class="col-6 block" style="padding-top: 24px">
                <h4 class="title" style="margin-bottom: 0">GET A TEAM</h4>
                <button class="create-btn" id="join_public_league_btn">JOIN A PUBLIC LEAGUE</button>
            </div>
            <div class="col-6 block" style="padding-top: 45px">
                <h4 class="title" style="margin-bottom: 25px">RECEIVED AN INVITATION</h4>
                <input class="form-control custom" style="margin-bottom: 0" placeholder="Enter ID Of The Invitation">
                <button class="create-btn" data-toggle="modal" data-target="#inviteModal">JOIN</button>
            </div>
        </div>
        <div class="league modal" id="inviteModal">
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
                                <h3 class="title">Enter ID Of The Invitation</h3>
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
        <div class="league modal" id="nameModal">
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
                                <h3 class="title">Name Your Team</h3>
                                <input class="form-control custom" style="margin-bottom: 20px" placeholder="Enter Name Of Your Team">
                                <button type="button" class="create-btn" id="nameTeamBtn">CONFIRM</button>
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
            $('#enterIdBtn').click(function (){
                $('#inviteModal').modal('toggle');
                $('#nameModal').modal('show');
            });

            $('#join_public_league_btn').click(function (){
                location.href = "{{ route('league.choose') }}";
            });
        });
    </script>
@endsection
