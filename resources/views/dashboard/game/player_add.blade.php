@extends('dashboard.main_layout')
@section('title')
    Drop Add Player
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
    <div class="container" id="player-add-drop">
        <h2 class="title">Drop / Add Player</h2>
        <div class="table-block">
            <div class="table-header">
                <table class="table">
                    <colgroup>
                        <col width="50%">
                        <col width="15%">
                        <col width="15%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                        <th>Starters</th>
                        <th>Opp</th>
                        <th>Proj</th>
                        <th>Score</th>
                    </thead>
                </table>
            </div>
            <div class="content-table">
                <table class="table">
                    <tbody>
                        @for($i=0; $i<10; $i++)
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div class="col-2 starter-text" style="background: #484773;">RB/<br>
                                            WR</div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <button class="drop-btn">Drop</button>
                                        </div>
                                        <div class="col-2">
                                            <img src="/image/player1.png">
                                        </div>
                                        <div class="col-4">
                                            <div class="name-block">
                                                <p class="name">
                                                    J.Howard
                                                </p>
                                                <small>NYJ RB</small>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th>@Ari<br>
                                    Sun 8:30</th>
                                <th>-</th>
                                <th>-</th>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <button id="next-btn" class="next-btn">Next</button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('#next-btn').click(function (){
                location.href = "{{ route('game.confirm.team')}}";
            });
        });
    </script>
@endsection

