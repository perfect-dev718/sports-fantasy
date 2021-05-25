@extends('admin.layouts.main')

@section('title')
    MatchUps
@endsection

@section('style')
    <style>

    </style>
@endsection


@section('content')
    <div class="container-fluid pr-2 pl-2" style="padding: 0 20px!important">
{{--        <h5 class="mb-3 text-right">--}}
{{--            <a href="{{ route('matchup.create') }}"><span class="fa fa-plus pr-1"></span>Add</a>--}}
{{--        </h5>--}}
        <table class="table table-striped table-bordered dataTable">
            <thead>
            <tr>
                <th>No</th>
                <th>MatchUp Date</th>
                <th>League</th>
                <th>Winning Team</th>
                <th>Losing Team</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matchups as $index => $matchup)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$matchup->matchupDate}}</td>
                    <td>{{!is_null($matchup->league)?$matchup->league->name:''}}</td>
                    <td>{{!is_null($matchup->winning)?$matchup->winning->name:''}}</td>
                    <td>{{!is_null($matchup->losing)?$matchup->losing->name:''}}</td>
                    <td style="min-width: 125px; text-align: center">
                        <a class="btn btn-primary updateData"
                           href="{{route('matchup.edit', ['id' => $matchup->id])}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger updateData"
                           href="#" onclick="confirmDelete({{$matchup->id}})" data-toggle="modal" data-target="#deleteConfirm"><i class="fa fa-trash"></i></a>
                        {{--<a class="btn btn-danger updateData"
                           href="{{ route('article.delete', ['id' => $article]) }}"><i class="fa fa-trash"></i></a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('matchup.delete') }}" method="POST">
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
        $(function () {
            $('.datatable').DataTable();
        });

        function confirmDelete(id) {
            console.log('========id ', id)
            $('.delete-id').val(id);
        }
    </script>
@endsection
