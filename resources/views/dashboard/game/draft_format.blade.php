@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')
    {{__('Draft Format')}}
@endsection

@section('pageback')
    <a class="back-btn" href="javascript: history.back()">{{__('back')}}</a>
@endsection

@section('content')
    <div class="container-fluid" id="my-league">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <div class="p-2" style="border-top: 0.5px solid #5A5889;border-bottom: 0.5px solid #5A5889;">
                    <small class="font-14" style="color: #979BAA;">Schedule Your Draft</small>
                    <h3 class="text-white font-14 mt-3 mb-3">Draft Type</h3>
                    <form class="pl-2" method="POST" action="{{ route('draft.format.save') }}">
                        {!! csrf_field() !!}
                        <div class="d-flex justify-content-start p-2">
                            <input type="radio" class="form-check-input" name="draft_type" value="double" id="double_draft">
                            <label for="double_draft" class="ml-2 form-check-label">
                                <p class="font-16 text-white mb-0">Double Draft</p>
                                <small class="text-white font-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                            </label>
                        </div>
                        <div class="d-flex justify-content-start p-2">
                            <input type="radio" class="form-check-input" name="draft_type" value="snake" id="double_draft">
                            <label for="double_draft" class="ml-2 form-check-label">
                                <p class="font-16 text-white mb-0 text-capitalize">Snake</p>
                                <small class="text-white font-12">Teams make picks and then order reverses</small>
                            </label>
                        </div>
                        <div class="d-flex justify-content-start p-2">
                            <input type="radio" class="form-check-input" name="draft_type" value="auction" id="double_draft">
                            <label for="double_draft" class="ml-2 form-check-label">
                                <p class="font-16 text-white mb-0 text-capitalize">auction</p>
                                <small class="text-white font-12">Each Team is given a budget and teams big for players</small>
                            </label>
                        </div>
                        <div class="d-flex justify-content-start p-2">
                            <input type="radio" class="form-check-input" name="draft_type" value="autopick" id="double_draft">
                            <label for="double_draft" class="ml-2 form-check-label">
                                <p class="font-16 text-white mb-0 text-capitalize">autopick</p>
                                <small class="text-white font-12">Each Team is selected automatically based on pre-draft
                                    rankings</small>
                            </label>
                        </div>
                        <div class="mt-3">
                            <h3 class="font-14 text-white mb-3">
                                Draft date and time
                            </h3>
                            <div class="row">
                                <div class="col-6">
                                    <input type="date" name="draft_date" class="datepicker p-2" placeholder="Draft Date">
                                </div>
                                <div class="col-6">
                                    <input type="time" name="draft_time" class="timepicker p-2" placeholder="Select Time">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-6">
                                <button type="submit" class="save-btn mr-4 form-control">Save</button>
                            </div>
                        </div>
                    </form>
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
