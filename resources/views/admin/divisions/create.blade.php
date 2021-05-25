@extends('admin.layouts.main')

@section('title')
    @if(isset($division))Update @else Add @endif Division
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid pr-2 pl-2" style="padding: 0 20px!important">
        <div class="card card-default">
            <div class="card-body row">
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <x-alert :type="'success'" :message="Session::get('success')"></x-alert>
                    @endif
                    @if($errors->any())
                        <x-alert :type="'danger'" :message="$errors->first()"></x-alert>
                    @endif
                </div>
                <div class="col-md-12">
                    <form id="create-form" enctype="multipart/form-data" action="{{ isset($division)?route('division.update'):route('division.store') }}" class="form-inline needs-validation"
                          method="POST" novalidate>
                        {{ csrf_field() }}
                        <input type="hidden" value="{{isset($division)?$division->id:""}}" name="id">
                        @php
                            $leagueOptions = array();
                            foreach ($leagues as $league){
                                $leagueOptions[] = ["value"=>$league->id, "text"=>$league->name];
                            }
                            $inputs = [
                                ["name"=>"name", "label"=>"Name", "value"=>isset($division)?$division->name:old('name')],
                                [
                                    "name"=>"leagueId", "label"=>"League", "value"=>isset($division)?$division->leagueId:old('leagueId'), "type"=>"select",
                                    "options"=>$leagueOptions
                                ],
                            ]
                        @endphp
                        @foreach($inputs as $input)
                            @if(isset($input['type']) && $input['type']=='select')
                                <x-select :name="$input['name']" :label="$input['label']" :value="$input['value']" :options="$input['options']"></x-select>
                            @else
                                <x-input :name="$input['name']" :label="$input['label']" :value="$input['value']"></x-input>
                            @endif
                        @endforeach

                        <div class="col-md-12 input-group justify-content-end">
                            <a href="javascript: history.back()" class="btn btn-flat mr-2"><span class="fa fa-reply"></span>&nbsp;Back</a>
                            <button type="submit" class="btn btn-primary mb-2" id="create">
                                <span class="fa fa-save"></span> @if(isset($division)) Update @else Create @endif
                            </button>
                        </div>
                        <div class="loader" style="display: none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/utils.js')}}"></script>
    <script>
        $(function (){
        });
    </script>
@endsection
