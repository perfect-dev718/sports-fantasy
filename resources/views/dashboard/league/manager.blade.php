@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('League Manager')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="league-manager">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <select class="bg-transparent round-select p-2 mb-2 text-white form-control">
                    <option>Football</option>
                    <option>Basketball</option>
                </select>
                <select class="bg-transparent round-select p-2 text-white mb-5 form-control">
                    <option value="">Choose League</option>
                    <option>League 1</option>
                </select>
                <p class="desc mb-5 text-center">Choose A League Commissioner</p>
                <div class="row slider-block">
                    <div class="col-2 d-flex justify-content-end align-items-center p-3">
                        <span class="fa fa-arrow-circle-left arrow-icon"></span>
                    </div>
                    <div class="col-8">
                        <div class="image-block">
                            <img src="/storage/league1.png">
                        </div>
                    </div>
                    <div class="col-2 justify-content-start d-flex align-items-center p-3">
                        <span class="fa fa-arrow-circle-right arrow-icon"></span>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <button class="save-btn mr-4">Save</button>
                    <button class="cancel-btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function (){

        });
    </script>
@endsection
