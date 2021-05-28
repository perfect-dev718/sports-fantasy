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
            <div class="col-12">
                <div class="p-3">
                    <p class="text-center font-30 lh-36 text-white">League Schedule</p>
                </div>
            </div>
        </div>
        <div class="row p-2 league-title-block mb-3">
            <div class="container">
                <img src="/image/noborder-team.svg" class="logo">
                <select class="no-border text-white font-20 lh-18 font-weight-bold">
                    <option>League 1</option>
                    <option>League 2</option>
                </select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 p-2">
                    <div class="table-block">
                        <div class="">
                            <table class="table table-bordered dataTable border">
                                <thead>
                                <th>MATCHUP</th>
                                <th>Score</th>
                                <th>Opponent</th>
                                <tbody>
                                <!-- content block -->
                                @for($i = 0; $i<15; $i++)
                                    <tr>
                                        <td>MAR 26 - June 21</td>
                                        <td>T 0-0-10</td>
                                        <td><strong>at</strong> Team 7</td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="table-block">
                        <div class="">
                            <table class="table table-bordered dataTable border">
                                <thead>
                                <th>MATCHUP</th>
                                <th>Score</th>
                                <th>Opponent</th>
                                <tbody>
                                <!-- content block -->
                                @for($i = 0; $i<15; $i++)
                                    <tr>
                                        <td>MAR 26 - June 21</td>
                                        <td>T 0-0-10</td>
                                        <td><strong>at</strong> Team 7</td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
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
            $('#next-btn').click(function () {
                location.href = "{{ route('game.trade.condition.drop') }}";
            });
        });
    </script>
@endsection


