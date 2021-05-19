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
                    <p class="text-center font-30 lh-36 text-white">League Standings</p>
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
            <div class="row justify-content-center">
                <div class="col-6 p-2">
                    <div class="table-block">
                        <div class="">
                            <table class="table table-bordered dataTable border">
                                <thead>
                                <th>#</th>
                                <th>Team</th>
                                <th>w-l-t</th>
                                <th>Points</th>
                                <th>Streak</th>
                                <th>Waiver</th>
                                <th>Moves</th>
                                <tbody>
                                <!-- content block -->
                                @for($i = 0; $i<15; $i++)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>Team {{ $i }}</td>
                                        <td>2-0-0</td>
                                        <td>226.04</td>
                                        <td>w-2</td>
                                        <td>11</td>
                                        <td>2</td>
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


