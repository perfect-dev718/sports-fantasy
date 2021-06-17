@extends('admin.layouts.main')

@section('title')
    Rosters
@endsection

@section('style')
    <style>

    </style>
@endsection


@section('content')
    <div class="container-fluid pr-2 pl-2" style="padding: 0 20px!important">
        <h5 class="mb-3 d-flex">
            <span>Total: <span id="total-count"></span> elements</span>
{{--            <a href="{{ route('player.create') }}"><span class="fa fa-plus pr-1"></span>Add</a>--}}
        </h5>
        <table class="table table-striped table-bordered datatable">
            <thead>
            <tr>
                <th>No</th>
                <th>Season</th>
                <th>Team</th>
                <th>Player</th>
                {{--                <th>Photo</th>--}}
{{--                <th>Fantasy Team</th>--}}
                <th>Games</th>
                <th>Starts</th>
                <th>Avg Score</th>
{{--                <th class="text-center">Actions</th>--}}
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('player.delete') }}" method="POST">
                        {{ csrf_field() }}
                        <input style="display: none" class="delete-id" name="id"/>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure delete this item?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="loader" style="display: none"></div>
    </div>
@endsection

@section('script')
    <script>
        var _token = "{{ csrf_token() }}";
        var allTeams = [];
        var allPlayers = [];
        var dt; // datatable;
        $(function () {
            // var dt = makeDataTable();
            $.ajax({
                url: "getTeamsPlayers",
                method: "POST",
                data: {_token: _token},
                success: function (res) {
                    if(res.success) {
                        allTeams = res.teams;
                        allPlayers = res.players;
                        dt = makeDataTable();
                    }
                }
            })
        });

        function makeDataTable() {
            return $('.datatable').DataTable({
                responsive: true,
                ajax: {
                    url: "{{ route('roster.ajax') }}",
                    type: "POST",
                    data: function ( d ) {
                        return $.extend( {}, d, {
                            "_token": _token
                        } );
                    },
                    dataSrc: function ( json ) {
                        document.getElementById('total-count').innerHTML = json.recordsFiltered;
                        for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                            json.data[i]["index"] = i + 1;
                        }
                        return json.data;
                    }
                },
                columnDefs: [{
                    "searchable": false,
                    "orderable": true,
                    "targets": 0
                }],
                order: [[ 1, 'asc' ]],
                processing: false,
                serverSide: true,
                columns: [
                    // {
                    //     data: 'id', name: 'id',
                    //     render: function (data, type) {
                    //         return `<label style="width: 100%"><input type="checkbox" class="checkbox-advertise" id="checkbox-advertise-${data}"></label>`
                    //     }
                    // },
                    { data: 'id', name: 'id'},
                    { data: 'season', name: "season" },
                    {
                        data: 'teamId', name: 'teamId',
                        render: function (data, type){
                            return allTeams[data]['name']
                        }
                    },
                    {
                        data: 'playerId', name: 'playerId',
                        render: function (data, type) {
                            return allPlayers[data]["full_name"];
                        }
                    },
                    { data: 'games', name: 'games'},
                    { data: 'starts', name: 'starts' },
                    { data: 'av', name: 'av' },
                    {{--                    {--}}
                    {{--                        data: 'id',--}}
                    {{--                        name: 'id',--}}
                    {{--                        render: function (data, type) {--}}
                    {{--                            return `<div style="min-width: 125px;text-align: center">--}}
                    {{--                            <a class="btn btn-primary updateData"--}}
                    {{---                               href="{{url('admin/advertise/show')}}?id=${data}"><i class="fa fa-edit"></i></a>--}}
                    {{--                            <a class="btn btn-danger updateData"--}}
                    {{--                               href="#" onclick="confirmDelete(${data})" data-toggle="modal"--}}
                    {{--                               data-target="#deleteConfirm"><i class="fa fa-trash"></i>--}}
                    {{--                            </a>--}}
                    {{--                                </div>`--}}
                    {{--                        }--}}
                    {{--                    }--}}
                ],
            });
        }

        function confirmDelete(id) {
            console.log('========id ', id)
            $('.delete-id').val(id);
        }
    </script>
@endsection
