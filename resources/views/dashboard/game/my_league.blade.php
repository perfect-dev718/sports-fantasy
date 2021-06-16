@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('My League')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()"><span class="fa fa-comment text-white"></span>&nbsp;&nbsp;{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="my-league">
        <div class="header">
            <div class="header-logo justify-content-between align-items-center">
                <div>
                    <img src="/image/noborder-team.svg" class="logo">
                    <select class="no-border text-white font-20 lh-18 font-weight-bold">
                        @foreach($leagues as $league)
                            <option value="{{ $league->id }}">{{ $league->name }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('league.name') }}" class="text-white font-weight-bold font-20" title="Create New League"><span class="fa fa-plus-circle"></span> Add</a>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <ul class="link-list">
                    <a href="{{ route('game.league.schedule') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Schedule</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Group Chat</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('league.scoreboard') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Scoreboard</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('game.standings') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">Standings</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>

                    <a href="{{ route('league.settings') }}" class="text-decoration-none">
                        <li>
                            <p class="mb-0">League Settings</p>
                            <span class="fa fa-angle-right text-white font-16"></span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <table class="score-table">
                    <colgroup>
                        <col style="width: 40%; text-align: left">
                        <col style="width: 30%; text-align: center">
                        <col style="width: 20%; text-align: center">
                        <col style="width: 10%; text-align: center">
                    </colgroup>
                    <thead>
                    <th>EAST</th>
                    <th class="text-center">RECORD</th>
                    <th class="text-center">WIN%</th>
                    <th class="text-center">GB</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="east">
                                <span>1</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>L.Bell</h5>
                                    <small>Big 888</small>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="east">
                                <span>2</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>Team2</h5>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="east">
                                <span>3</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>Team3</h5>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="east">
                                <span>4</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>Team4</h5>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="east">
                                <span>5</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>Team5</h5>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <table class="score-table">
                    <colgroup>
                        <col style="width: 40%; text-align: left">
                        <col style="width: 30%; text-align: center">
                        <col style="width: 20%; text-align: center">
                        <col style="width: 10%; text-align: center">
                    </colgroup>
                    <thead>
                        <th>EAST</th>
                        <th class="text-center">RECORD</th>
                        <th class="text-center">WIN%</th>
                        <th class="text-center">GB</th>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <div class="east">
                                <span>1</span>
                                <img src="/image/logo3.svg">
                                <div class="name-block">
                                    <h5>L.Bell</h5>
                                    <small>Big 888</small>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">0-0-0</td>
                        <td class="text-center">.000</td>
                        <td class="text-center">-</td>
                    </tr>
                        <tr>
                            <td>
                                <div class="east">
                                    <span>2</span>
                                    <img src="/image/logo3.svg">
                                    <div class="name-block">
                                        <h5>Team2</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">0-0-0</td>
                            <td class="text-center">.000</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="east">
                                    <span>3</span>
                                    <img src="/image/logo3.svg">
                                    <div class="name-block">
                                        <h5>Team3</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">0-0-0</td>
                            <td class="text-center">.000</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="east">
                                    <span>4</span>
                                    <img src="/image/logo3.svg">
                                    <div class="name-block">
                                        <h5>Team4</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">0-0-0</td>
                            <td class="text-center">.000</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="east">
                                    <span>5</span>
                                    <img src="/image/logo3.svg">
                                    <div class="name-block">
                                        <h5>Team5</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">0-0-0</td>
                            <td class="text-center">.000</td>
                            <td class="text-center">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="score-board d-flex justify-content-between align-items-center">
                    <strong>Scoreboard</strong>
                    <small>Matchup 1 (Mar 26 - June 21)</small>
                </div>
                <div class="score-card">
                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>My Team</h5>
                                <small>Big 888</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>

                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>Team 9</h5>
                                <small>0-0</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>
                </div>
                <div class="score-card">
                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>My Team</h5>
                                <small>Big 888</small>
                            </div>
                        </div>
                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>

                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>Team 9</h5>
                                <small>0-0</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="score-board d-flex justify-content-between align-items-center">
                    <strong>Scoreboard</strong>
                    <small>Matchup 1 (Mar 26 - June 21)</small>
                </div>
                <div class="score-card">
                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>My Team</h5>
                                <small>Big 888</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>

                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>Team 9</h5>
                                <small>0-0</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>
                </div>
                <div class="score-card">
                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>My Team</h5>
                                <small>Big 888</small>
                            </div>
                        </div>
                        <div class="team-score">
                            0-0-10
                        </div>
                    </div>

                    <div class="score-team d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start">
                            <img src="/image/logo4.svg" class="logo">
                            <div class="name-block">
                                <h5>Team 9</h5>
                                <small>0-0</small>
                            </div>
                        </div>

                        <div class="team-score">
                            0-0-10
                        </div>
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
