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
                <input type="date" class="bg-transparent text-white font-16" style="width: 200px; border: none">
            </div>
            <div class="row">
                <div class="col-6 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px">
                        <thead class="font-10">
                        <th>EAST</th>
                        <th>RECORD</th>
                        <th>WIN%</th>
                        <th>GB</th>
                        <th>Play Off/ON</th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i<5; $i++)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="col-1">{{ $i + 1 }}</div>
                                        <div class="col-3"><img src="/image/team1.png"/></div>
                                        <div class="col-8">
                                            <div class="name-block">
                                                <h5>Team Name</h5>
                                                <small>Manager Name</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>0-0-0</td>
                                <td>.000</td>
                                <td>-</td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
                <div class="col-6 table-responsive">
                    <table class="table table-striped" style="margin-top: 28px">
                        <thead class="font-10">
                        <th>EAST</th>
                        <th>RECORD</th>
                        <th>WIN%</th>
                        <th>GB</th>
                        <th>Play Off/ON</th>
                        </thead>
                        <tbody>
                        @for($i = 5; $i<10; $i++)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="col-1">{{ $i + 1 }}</div>
                                        <div class="col-3"><img src="/image/team1.png"/></div>
                                        <div class="col-8">
                                            <div class="name-block">
                                                <h5>Team Name</h5>
                                                <small>Manager Name</small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>0-0-0</td>
                                <td>.000</td>
                                <td>-</td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
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
