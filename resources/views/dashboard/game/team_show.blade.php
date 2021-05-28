@extends('dashboard.main_layout')
@section('title')
    Team Page
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
    <div class="container-fluid" id="team-show">
        <div class="summary-block">
            <div class="row">
                <div class="col-6 d-flex justify-content-start align-items-center">
                    <div class="logo-block">
                        <img src="/image/large_logo.svg" class="logo">
                    </div>
                    <div class="name-block">
                        <h3 class="name">Team Name</h3>
                        <small>LV Raiders <br>0-0 Atlanta 10-Team PPR </small>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="matchup-block">
                        <h5 class="title text-center">Week 1 Matchup</h5>
                        <div class="row">
                            <div class="col-6 d-flex justify-content-between align-items-center">
                                <img src="/image/team2.png" class="logo mr-1">
                                <p class="text-right mb-0">
                                    0.00<br>
                                    109.74
                                </p>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center">
                                <p class="text-left mb-0 mr-1">
                                    0.00<br>
                                    69.65
                                </p>
                                <img src="/image/team1.png" class="logo">
                            </div>
                        </div>
                        <p class="text-center">Vs <small style="color: #5C61B2">King Conan</small> 0-0-0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="action-block">
            <div class="row" style="height: 100%">
                <div class="col-6 d-flex flex-column justify-content-between align-items-start">
                    <select class="week-select">
                        <option>Week 1</option>
                        <option>Week 2</option>
                        <option>Week 3</option>
                        <option>Week 4</option>
                    </select>
                    <p class="lineup-text mb-0">Lineup for Week 1</p>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between align-items-end">
                    <button class="offer-btn" type="button" id="offer-btn">Offer a Trade</button>
                    <select class="lineup-select">
                        <option>Overview</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="table-block">
            <div class="">
                <table class="table table-bordered dataTable">
                    <thead>
                        <th>Pos</th>
                        <th>Starters</th>
                        <th>Opp (Rank)</th>
                        <th>Proj</th>
                        <th>Score</th>
                        <th>Pos Rk</th>
                        <th>Pts</th>
                        <th>Avg</th>
                        <th>Last Wk</th>
                        <th>Opp Rk</th>
                        <th>% Rost</th>
                        <th>+/-</th>
                    </thead>
                    <tbody>

                    <!-- content block -->
                    @for($i = 0; $i<10; $i++)
                        <tr>
                            <td style="background: #484773;">
                                QB
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <img src="/image/player1.png">
                                    <div class="name-block ml-2 mr-5">
                                        <p class="name mb-0">Le’Veon Bell</p>
                                        <small>NYJ RB</small>
                                    </div>
                                    <button class="trade-btn mr-2">Trade</button>
                                    <button class="flag-btn"><span class="fa fa-flag"></span></button>
                                </div>
                            </td>
                            <td>
                                Cle <br>
                                Sun 1:00 PM
                            </td>
                            <td>21.8</td>
                            <td>-</td>
                            <td>1</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>-</td>
                            <td>-</td>
                            <td>99.8</td>
                            <td>+0</td>
                        </tr>
                    @endfor
                    <tr>
                        <td colspan="2"></td>
                        <td>Totals</td>
                        <td>117.8</td>
                        <td>0.0</td>
                        <td colspan="7"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('#offer-btn').click(function () {
                location.href = "{{ route('game.trade.offer') }}";
            });
        });
    </script>
@endsection

