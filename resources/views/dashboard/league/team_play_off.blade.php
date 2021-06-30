@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Play off Teams')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="team_play_off">

        <div class="container">
            <div class="col-12 text-center">
                <input type="date" class="bg-transparent text-white font-16" value="{{ $playoff_date }}" id="playoff_date" style="width: 200px; border: none">
            </div>
            <div class="row">
                <div class="col-12 col-md-6 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px">
                        <thead class="font-10">
                        <th>EAST</th>
                        <th>RECORD</th>
                        <th>WIN%</th>
                        <th>GB</th>
                        <th>Play Off/ON</th>
                        </thead>
                        <tbody>
                        @foreach($teams as $key=>$team)
                            @if($key >= count($teams)/2)
                                @continue
                            @endif
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="col-1">{{ $key + 1 }}</div>
                                        <div class="col-3">
                                            <img src="/image/team1.png"/>
                                        </div>
                                        <div class="col-8">
                                            <div class="name-block">
                                                <h5>{{ $team->name }}</h5>
                                                <small>{{ $team->owner->full_name() }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>0-0-0</td>
                                <td>.000</td>
                                <td>-</td>
                                <td>
                                    <label class="switch">
                                        @php
                                            $teamId = $team->id;
                                        @endphp
                                        <input type="checkbox" @if(array_search($teamId, $playoff_teams)>-1) checked @endif class="checkbox" id="checkbox-{{$team->id}}">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-6 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px">
                        <thead class="font-10">
                        <th>EAST</th>
                        <th>RECORD</th>
                        <th>WIN%</th>
                        <th>GB</th>
                        <th>Play Off/ON</th>
                        </thead>
                        <tbody>
                        @foreach($teams as $key=>$team)
                            @if($key < count($teams)/2)
                                @continue
                            @endif
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="col-1">{{ $key + 1 }}</div>
                                        <div class="col-3">
                                            <img src="/image/team1.png"/>
                                        </div>
                                        <div class="col-8">
                                            <div class="name-block">
                                                <h5>{{ $team->name }}</h5>
                                                <small>{{ $team->owner->full_name() }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>0-0-0</td>
                                <td>.000</td>
                                <td>-</td>
                                <td>
                                    <label class="switch">
                                        @php
                                            $teamId = $team->id;
                                        @endphp
                                        <input type="checkbox" @if(array_search($teamId, $playoff_teams)>-1) checked @endif class="checkbox" id="checkbox-{{$team->id}}">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <button class="save-btn full-width" id="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var leagueId = "{{ $id }}";
        var _token = "{{ csrf_token() }}";
        $(function () {
            $('#save-btn').click(function (){
                var checkboxes = $('.checkbox');
                var teamAry = [];
                for(var i = 0; i<checkboxes.length; i++){
                    var id = checkboxes[i].id.replace('checkbox-', '');
                    teamAry.push({id: id, val: checkboxes[i].checked});
                }
                var playoff_date = $('#playoff_date').val();
                $.ajax({
                    url: "{{ route('league.team.play.off.save') }}",
                    method: "POST",
                    data: {"leagueId": leagueId, teams: teamAry, _token: _token, playoff_date: playoff_date},
                    success: function (res) {
                        if(res.success) {
                            $.notify(res.msg, "success");
                        }
                    }
                });
            })
        });
    </script>
@endsection
