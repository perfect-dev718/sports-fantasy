@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Fantasy Football Draft Order')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="draft_order">
        <div class="row d-flex justify-content-center top-block">
            <div class="col-md-2 top-left" style="text-align: center">
                <div class="image-block">
                    <img src="{{ asset('image/player1.png') }}" style="z-index: 1">
                    <img src="{{ asset('image/player2.png') }}" style="z-index: 100">
                    <img src="{{ asset('image/player3.png') }}" style="z-index: 1">
                </div>
                <p class="team-number">12 TEAMS</p>
            </div>
            <div class="col-md-2 top-right text-center">
                <div class="image-block">
                    <img src="{{ asset('image/star.png') }}">
                </div>
                <p class="team-number">1 ROUND</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px">
                        <thead>
                        <th>#</th>
                        <th>Team</th>
                        <th>W-L-T</th>
                        <th>Points</th>
                        <th>Streak</th>
                        <th>Waiver</th>
                        <th>Moves</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Team Name</td>
                            <td>2-0-0</td>
                            <td>226.04</td>
                            <td>W-2</td>
                            <td>11</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {

        });
    </script>
@endsection
