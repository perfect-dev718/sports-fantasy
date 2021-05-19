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
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h2 class="title">Confirm The Team</h2>
                <div class="table-block">
                    <div class="table-header">
                        <table class="table">
                            <thead>
                            <th style="text-align: left">Players</th>
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
                                            <div class="col-2">
                                                <img src="/image/player1.png">
                                            </div>
                                            <div class="col-8">
                                                <div class="name-block">
                                                    <p class="name">
                                                        J.Howard
                                                    </p>
                                                    <small>NYJ RB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <button id="confirm-btn" class="next-btn">Confirm</button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('#confirm-btn').click(function (){
                location.href = "{{ route('game.team.show') }}";
            });
        });
    </script>
@endsection

