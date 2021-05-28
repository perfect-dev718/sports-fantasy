@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Scoreboard')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="scoreboard">
        <div class="container">
            <div class="col-12 text-center" style="margin-bottom: 90px">
                <input type="date" class="bg-transparent text-white font-16" style="width: 200px; border: none">
            </div>
            <div class="row">
                <div class="col-6 flex-column align-items-center d-flex">
                    @for($i = 0; $i<3; $i++)
                        <div class="score-block">
                            <div class="score-item d-flex">
                                <div class="col-8 d-flex justify-content-start align-items-center">
                                    <img src="/image/team1.png" />
                                    <div class="name-block">
                                        <h5 class="mb-0">My Team</h5>
                                        <small>Big 888</small>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <h5 class="mb-0">0-0-10</h5>
                                </div>
                            </div>

                            <div class="score-item d-flex">
                                <div class="col-8 d-flex justify-content-start align-items-center">
                                    <img src="/image/team1.png" />
                                    <div class="name-block">
                                        <h5 class="mb-0">Team 9</h5>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <h5>0-0-10</h5>
                                </div>
                            </div>

                        </div>
                    @endfor
                </div>
                <div class="col-6 flex-column align-items-center d-flex">
                    @for($i = 0; $i<3; $i++)
                        <div class="score-block">
                            <div class="score-item d-flex">
                                <div class="col-8 d-flex justify-content-start align-items-center">
                                    <img src="/image/team1.png" />
                                    <div class="name-block">
                                        <h5 class="mb-0">My Team</h5>
                                        <small>Big 888</small>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <h5 class="mb-0">0-0-10</h5>
                                </div>
                            </div>

                            <div class="score-item d-flex">
                                <div class="col-8 d-flex justify-content-start align-items-center">
                                    <img src="/image/team1.png" />
                                    <div class="name-block">
                                        <h5 class="mb-0">Team 9</h5>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <h5>0-0-10</h5>
                                </div>
                            </div>

                        </div>
                    @endfor
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
