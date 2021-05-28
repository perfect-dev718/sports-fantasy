@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Choose Number')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="name-league">
        <div class="col-md-4 col-12">
            <form class="text-center" action="{{ route('league.number.save') }}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" value="{{ $id }}" name="id">
                <h3 class="subtitle">{{__('Choose a Number of Teams')}}</h3>
                <input type="hidden" name="teamId" id="teamId">
                <div class="btn-list d-flex justify-content-between">
                    @foreach($teams as $team)
                        <button type="button" class="number">{{ $team->id }}</button>
                    @endforeach
                </div>
                <button type="submit" class="create-btn" id="confirmBtn">{{__('confirm')}}</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            // $('#confirmBtn').click(function (){
                {{--location.href = "{{ route('invite.public') }}";--}}
            // })

            $('.number').click(function (){
                var flag = $(this).hasClass('active');
                $('.number').removeClass('active');
                if(!flag) {
                    $(this).addClass('active');
                    $('#teamId').val(parseInt($(this).text().trim()));
                }
            });
        });
    </script>
@endsection
