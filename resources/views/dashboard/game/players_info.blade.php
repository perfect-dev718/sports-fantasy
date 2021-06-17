@extends('dashboard.main_layout')
@section('title')
    Players Free Agency
@endsection

@section('style')
@endsection

@section('search')
    <div class="top-search-block">
        <input type="text" name="search_text" id="search_text" class="top-search_input">
        <span class="fa fa-search search-icon"></span>
    </div>
@endsection

@section('pagetitle')
@endsection
@section('pageback')
@endsection

@section('content')
    <div class="container-fluid" id="players-free-agency">
        <div class="row">
            <div class="col-6">
                <div class="table-block">
                    <div class="header-table">
                        <table class="table dataTable" style="margin-bottom: 0!important;">
                            <colgroup>
                                <col width="40%">
                                <col width="25%">
                                <col width="15%">
                                <col width="20%">
                            </colgroup>
                            <thead>
                            <th>STARTERS</th>
                            <th>Opp</th>
                            <th>Proj</th>
                            <th>Score</th>
                            </thead>
                        </table>
                    </div>
                    <div class="content-table">
                        <table class="table table-bordered mb-0">
                            <colgroup>
                                <col width="40%">
                                <col width="25%">
                                <col width="15%">
                                <col width="20%">
                            </colgroup>
                            <tbody>
                            <!-- content block -->
                            @foreach($players as $player)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="col-4" style="background: #484773;">
                                                {{ $player->position }}
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript: getPlayerInfo({{$player->id}})">
                                                    <img src="/image/player1.png" class="avatar rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <div class="name-block">
                                                    <h4 class="name">{{ $player->full_name }}</h4>
                                                    <small>{{ $player->name }} | {{ $player->position }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <span>@Ari/h5</span><br>
                                            <span>Sun 8:30</span>
                                        </div>
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6" id="profile_block">

            </div>
        </div>
    </div>

    <div id="teamModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Team Select</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <select id="selected-team" class="form-control">
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" id="team-confirm" class="btn btn-primary"><span class="fa fa-check"></span>&nbsp;Confirm</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        var _token = "{{ csrf_token() }}";

        // selected player
        var player_id;
        $(function () {
            init();
            $('#add-btn').click(function (){
                location.href = "{{ route('game.player.add') }}";
            });

            $('#team-confirm').click(function (){
                var teamId = $('#selected-team').val();
                addPlayerToTeam(teamId);
            })
        });

        function init() {
            getPlayerInfo("{{ $player->id }}");
        }

        function addPlayerToTeam(teamId) {
            $.ajax({
                url: "{{ route('team.player.add.ajax') }}",
                method: "POST",
                data: {_token: _token, teamId: teamId, player_id: player_id},
                success: function (res) {
                    if(res.success) {
                        $.notify(res.msg, "success");
                        $('#teamModal').modal('toggle');
                    }
                }
            })
        }

        function getPlayerInfo(id) {
            $.ajax({
               url: "{{ route('game.get.player.ajax') }}",
               method: "POST",
               data: {_token: _token, id: id},
               success: function (res) {
                   if(res.success) {
                       $('#profile_block').html(res.html);
                       player_id = res.player_id;
                       $('#add-btn').click(function (){
                           $('#teamModal').modal('show');
                       });
                   }
               }
            });
        }
    </script>
@endsection

