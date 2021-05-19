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
                            @for($i = 0; $i<10; $i++)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="col-4" style="background: #484773;">
                                                RB/<br>WR
                                            </div>
                                            <div class="col-4">
                                                <img src="/image/player1.png" class="avatar rounded-circle">
                                            </div>
                                            <div class="col-4">
                                                <div class="name-block">
                                                    <h4 class="name">Le’Veon Bell</h4>
                                                    <small>NYJ RB</small>
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
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="profile-block">
                    <h3 class="title">Player Info</h3>
                    <div class="row">
                        <div class="col-5">
                            <img src="/image/player1.png" class="rounded-circle photo">
                        </div>
                        <div class="col-7">
                            <div class="name-block">
                                <h5 class="name">Le’Veon Bell</h5>
                                <p class="city">New York Jets</p>
                                <p class="position-text">
                                    Position rb
                                </p>
                                <p class="position-text">
                                    Position on waivers (THU)
                                </p>
                                <p class="position-text">
                                    status healthy
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pos-block">
                        <div class="col-4 text-center item">
                            <h5 class="pos-title">POS RANK</h5>
                            -
                        </div>
                        <div class="col-4 text-center item">
                            <h5 class="pos-title">avg points</h5>
                            -
                        </div>
                        <div class="col-4 item">
                            <h5 class="pos-title">
                                % rostered
                            </h5>
                            95.1(+5%)
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <button class="plus-btn" style="margin-right: 7px" id="add-btn">Add</button>
                        <button class="flag-btn"><span class="fa fa-flag" id="watch-btn"></span>&nbsp;Watch</button>
                    </div>
                    <div class="row season-block">
                        <h5 class="title">Season Status</h5>
                        <table class="table">
                            <colgroup>
                                <col width="28%">
                                <col width="18%">
                                <col width="18%">
                                <col width="18%">
                                <col width="18%">
                            </colgroup>
                            <thead>
                            <th></th>
                            <th>Att</th>
                            <th>Yds</th>
                            <th>TD</th>
                            <th>Pts</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2019</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Proj 2020</td>
                                <td>280.5</td>
                                <td>1310</td>
                                <td>8.5</td>
                                <td>318</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row outlook-block">
                        <h5 class="title col-12">Outlook</h5>
                        <div class="points d-flex justify-content-between">
                            <p>2020 Projection</p>
                            <p>318 Points</p>
                        </div>
                        <div class="content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('#add-btn').click(function (){
                location.href = "{{ route('game.player.add') }}";
            });
        });

    </script>
@endsection

