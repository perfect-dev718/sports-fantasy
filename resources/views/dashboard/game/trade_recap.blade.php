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
    <div class="container" id="team-show">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="p-3">
                    <p class="text-center font-30 lh-36 text-white">Trade Recap</p>
                </div>
            </div>
            <div class="col-6">
                <div class="table-block">
                    <div class="">
                        <table class="table table-bordered dataTable border">
                            <colgroup>
                                <col width="15%">
                                <col width="85%">
                            </colgroup>
                            <thead>
                                <th colspan="2">Players</th>
                            <tbody>
                            <!-- content block -->
                            @for($i = 0; $i<10; $i++)
                                <tr>
                                    <td style="background: #484773;">
                                        RB/<br>
                                        WR
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="/image/player1.png">
                                            <div class="name-block ml-3">
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
        <div class="row justify-content-center">
            <button class="next-btn" type="button" id="next-btn">Confirm</button>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('#next-btn').click(function () {
                location.href = "{{ route('game.trade.recap') }}";
            });
        });
    </script>
@endsection

