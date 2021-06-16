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
        <div class="position-block">
            <h2 class="title">Free Agents</h2>
            <div class="positions row">
                <div class="col-9 d-flex justify-content-start">
                    <label>Position: </label>
                    <ul>
                        <li class="position" data-pos="all">All</li>
                        <li class="position" data-pos="QB">QB</li>
                        <li class="position" data-pos="RB">RB</li>
                        <li class="position" data-pos="RB,WR">RB/WR</li>
                        <li class="position" data-pos="WR">WR</li>
                        <li class="position" data-pos="WR,TE">WR/TE</li>
                        <li class="position" data-pos="TE">TE</li>
                        <li class="position" data-pos="DEF">D/ST</li>
                        <li class="position" data-pos="K">K</li>
                    </ul>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <div class="top-search-block" style="width: 250px">
                        <input class="top-search_input bg-transparent border-white" type="text">
                        <span class="fa fa-search search-icon"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-block">
            <div class="filter-block row">
                <div class="col-10 d-flex justify-content-start">
                    <form class="form-inline">
                        <label>Filter</label>
                        <select class="form-control">
                            <option value="available">Available</option>
                        </select>

                        <label>Pro Team</label>
                        <select class="form-control">
                            <option value="all">All</option>
                        </select>

                        <label>Health</label>
                        <select class="form-control">
                            <option value="all">All</option>
                        </select>

                        <label>Watch List</label>
                        <select class="form-control">
                            <option value="all">All</option>
                        </select>
                        <a class="reset-link">Reset Filters</a>
                    </form>
                </div>
                <div class="col-2 d-flex justify-content-end input-group">
                    <label>Status</label>
                    <select class="status-select form-control">
                        <option>2020 Projections</option>
                    </select>
                </div>
            </div>

            <div class="">
                <div class="table-header">
                    <table class="table table-bordered m-0">
                        <colgroup>
                            <col width="20%">
                            <col width="23%">
                            <col width="27%">
                            <col width="30%">
                        </colgroup>
                        <thead>
                        <th>Players</th>
                        <th>Status</th>
                        <th>Week1</th>
                        <th>2020 Projections</th>
                        </thead>
                    </table>
                </div>
                <div class="content-table">
                    <table class="table table-bordered datatable">
                        <colgroup>
                            <col width="20%">
                            <col width="23%">
                            <col width="27%">
                            <col width="30%">
                        </colgroup>
                        <thead>
                            <td>Player</td>
                            <td>
                                <div class="d-flex">
                                    <div class="col-5">Type</div>
                                    <div class="col-7">Action</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div style="width: 20%">Opp</div>
                                    <div style="width: 30%">Action</div>
                                    <div style="width: 25%">Proj</div>
                                    <div style="width: 25%">Score</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div style="width: 25%">Prk</div>
                                    <div style="width: 25%">Fpts</div>
                                    <div style="width: 25%">Avg</div>
                                    <div style="width: 25%">Last</div>
                                </div>
                            </td>
                        </thead>
                        <tbody>
                        <!-- content block -->
                        @foreach($players as $player)
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="col-5">
                                            <a href="{{ route('game.players.info', ["id"=>$player->id]) }}">
                                                <img src="/image/player1.png" class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <div class="name-block">
                                                <h4 class="name">{{ $player->full_name }}</h4>
                                                <small>{{$player->name}} | {{ $player->position }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="col-5">
                                            <h5>WA (Thu)</h5>
                                        </div>
                                        <div class="col-7 d-flex justify-content-center">
                                            <button class="plus-btn"><span class="fa fa-plus"></span></button>
                                            <button class="flag-btn"><span class="fa fa-flag"></span></button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div style="width: 20%">-</div>
                                        <div style="width: 30%">-</div>
                                        <div style="width: 25%">-</div>
                                        <div style="width: 25%">-</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div style="width: 25%">-</div>
                                        <div style="width: 25%">-</div>
                                        <div style="width: 25%">-</div>
                                        <div style="width: 25%">-</div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

