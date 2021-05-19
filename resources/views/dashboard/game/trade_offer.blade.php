@extends('dashboard.main_layout')
@section('title')
    Offer Trade
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
        <div class="row">
            <div class="col-4">
                <div class="p-3">
                    <p class="text-center font-16 lh-22 color-gray">Which Players Do You Want To Receive?</p>
                </div>
                <div class="table-block">
                    <div class="">
                        <table class="table table-bordered dataTable border">
                            <thead>
                                <th colspan="2">Players</th>
                            <tbody>
                            <!-- content block -->
                            @for($i = 0; $i<10; $i++)
                                <tr>
                                    <td style="background: #484773;">
                                        WR
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <button class="trade-btn mr-2">Trade</button>
                                            <img src="/image/player1.png">
                                            <div class="name-block ml-2 mr-5">
                                                <p class="name mb-0">Le’Veon Bell</p>
                                                <small>NYJ RB</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 row">
                    <div class="col-4">
                        <select class="week-select">
                            <option value="week1">Week1</option>
                            <option value="week2">Week2</option>
                            <option value="week3">Week3</option>
                            <option value="week4">Week4</option>
                        </select>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center">
                        <img src="/image/team1.png">
                        <select class="no-border text-white">
                            <option>Team Mogilski</option>
                            <option>Team Mogilski2</option>
                        </select>
                    </div>
                </div>
                <div class="table-block">
                    <div class="">
                        <table class="table table-bordered dataTable border">
                            <thead>
                                <th>Score</th>
                                <th>Opponent</th>
                            <tbody>
                            <!-- content block -->
                            @for($i = 0; $i<15; $i++)
                                <tr>
                                    <td>
                                        T 0-0-10
                                    </td>
                                    <td>
                                        Team Chamberland C. Chamberland
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3">
                    <p class="text-center font-16 lh-22 color-gray">Which Players Do You Want To Offer In Return?</p>
                </div>
                <div class="table-block">
                    <div class="">
                        <table class="table table-bordered dataTable border">
                            <thead>
                            <th colspan="2">Players</th>
                            <tbody>
                            <!-- content block -->
                            @for($i = 0; $i<10; $i++)
                                <tr>
                                    <td style="background: #484773;">
                                        WR
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <button class="trade-btn mr-2">Trade</button>
                                            <img src="/image/player1.png">
                                            <div class="name-block ml-2 mr-5">
                                                <p class="name mb-0">Le’Veon Bell</p>
                                                <small>NYJ RB</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-center">
                <button class="next-btn" type="button" id="next-btn">NEXT</button>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('#next-btn').click(function () {
                location.href = "{{ route('game.trade.condition.drop') }}";
            });
        });
    </script>
@endsection


