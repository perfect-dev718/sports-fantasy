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
            <form class="text-center">
                <h3 class="subtitle">{{__('Choose a Number of Teams')}}</h3>
                <div class="btn-list d-flex justify-content-between">
                    <button type="button" class="number">8</button>
                    <button type="button" class="number">10</button>
                    <button type="button" class="number">12</button>
                    <button type="button" class="number">14</button>
                    <button type="button" class="number">16</button>
                    <button type="button" class="number">18</button>
                    <button type="button" class="number">20</button>
                </div>
                <button type="button" class="create-btn" id="confirmBtn">{{__('confirm')}}</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){
            $('#confirmBtn').click(function (){
                location.href = "{{ route('game.center') }}";
            })

            $('.number').click(function (){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }
            });
        });
    </script>
@endsection
