@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('League Information')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="league-info">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-6 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px; margin-bottom: 20px">
                        <thead class="font-10">
                            <th colspan="2">Regular season setup</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Start of Regular Season</td>
                                <td>Week 14(Start of season)</td>
                            </tr>
                            <tr>
                                <td>Weeks per matchup</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Regular Season matchups</td>
                                <td><input type="text" class="bg-transparent round-input p-2 text-white font-12" value="13"> </td>
                            </tr>
                            <tr>
                                <td>Matchup Tie Breaker</td>
                                <td><input type="text" value="No tie breakers" class="bg-transparent round-input p-2 text-white font-12"> </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped" style="margin-bottom: 20px">
                        <thead class="font-10">
                        <th colspan="2">Playoff bracket setup</th>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Weeks per Playoff matchup</td>
                            <td><input type="text" class="bg-transparent round-input p-2 text-white font-12" value="2"> </td>
                        </tr>
                        <tr>
                            <td>Playoff Teams</td>
                            <td><input type="text" value="4" class="bg-transparent round-input p-2 text-white font-12"> </td>
                        </tr>
                        <tr>
                            <td>Playoff Seeding Tie Breaker</td>
                            <td><input type="text" value="Total Points For" class="bg-transparent round-input p-2 text-white font-12"> </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped" style="margin-bottom: 20px">
                        <thead class="font-10">
                            <th class="text-uppercase">Season view</th>
                            <th class="text-capitalize"><span class="fa-fa-reload"></span>&nbsp;Reset schedule </th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i<14; $i++)
                            <tr>
                                <td colspan="2">Week {{ $i + 1 }} (Regula Season)</td>
                            </tr>
                        @endfor

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
