@extends('admin.layouts.main')

@section('title')
    @if(isset($user))Update @else Add @endif User
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .note-editor.note-frame {
            width: 80%;
            max-width: 80%;
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
            box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid pr-2 pl-2" style="padding: 0 20px!important">
        <div class="card card-default">
            <div class="card-body row">
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <x-alert :type="'success'" :message="$Session::get('success')"></x-alert>
                    @endif
                    @if($errors->any())
                        <x-alert :type="'danger'" :message="$errors->first()"></x-alert>
                    @endif
                </div>
                <div class="col-md-12">
                    <form id="create-form" enctype="multipart/form-data" action="{{ isset($user)?route('user.update'):route('user.store') }}" class="form-inline needs-validation"
                          method="POST" novalidate>
                        {{ csrf_field() }}
                        <input type="hidden" value="{{isset($user)?$user->id:""}}" name="id">
                        @php
                            $inputs = [
                                ["name"=>"first_name", "label"=>"First Name", "value"=>isset($user)?$user->first_name:old('first_name')],
                                ["name"=>"last_name", "label"=>"Last Name", "value"=>isset($user)?$user->last_name:old('last_name')],
                                ["name"=>"gender", "label"=>"Gender", "value"=>isset($user)?$user->gender:old('gender'),"type"=>"select",
                                "options"=>[["value"=>"female", "text"=>"Femail"], ["value"=>"male", "text"=>"Male"]] ],
                                ["name"=>"email", "label"=>"Email", "value"=>isset($user)?$user->email:old('email'), "type"=>"email"],
                                ["name"=>"age", "label"=>"Age", "value"=>isset($user)?$user->age:old('age'), "type"=>"number"],
                                ["name"=>"birthday", "label"=>"Birthday", "value"=>isset($user)?$user->birthday:old('birthday')],
                                ["name"=>"country", "label"=>"Country", "value"=>isset($user)?$user->country:old('country')],
                                ["name"=>"city", "label"=>"City", "value"=>isset($user)?$user->city:old('city')],
                                ["name"=>"zip_code", "label"=>"Zip code", "value"=>isset($user)?$user->zip_code:old('zip_code')],
                                ["name"=>"ip", "label"=>"Ip Address", "value"=>isset($user)?$user->ip:old('ip')],
                                ["name"=>"phone", "label"=>"Phone", "value"=>isset($user)?$user->phone:old('phone')],
                            ]
                        @endphp
                        @foreach($inputs as $input)
                            @if(isset($input['type']) && $input['type']=='select')
                                <x-select :name="$input['name']" :label="$input['label']" :value="$input['value']" :options="$input['options']"></x-select>
                            @else
                                <x-input :name="$input['name']" :label="$input['label']" :value="$input['value']"></x-input>
                            @endif
                        @endforeach

                        <div class="col-md-12 input-group mb-2">
                            <label for="photo" class="input-group-prepend pr-3 w-20 text-right">Photo:&nbsp </label>
                            <input type="file" name="photo" id="photo" accept="image/*" hidden>
                            <div class="" style="display: flex; align-items: center">
                                <button type="button" class="btn btn-secondary" id="openFile">Choose File</button>
                            </div>
                            <div class="preview ml-2">
                                <img id="previewImg" src="@if(isset($user) && $user->bookimage){{asset("image/".$user->bookimage)}}@else{{asset("image/placeholder.png")}}@endif" alt="Book Image" style="width: 120px">
                            </div>
                        </div>

                        <div class="col-md-12 input-group justify-content-end">
                            <a href="javascript: history.back()" class="btn btn-flat mr-2"><span class="fa fa-reply"></span>&nbsp;Back</a>
                            <button type="submit" class="btn btn-primary mb-2" id="create">
                                <span class="fa fa-save"></span> @if(isset($user)) Update @else Create @endif
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function (){
            $("#openFile").click((e)=>{
                $("#photo").trigger("click");
            });
            $("#photo").change(function (e){
                var file = e.target.files[0];
                var fileReader = new FileReader();
                fileReader.onload = function (e){
                    $("#previewImg").attr("src", e.target.result);
                }
                fileReader.readAsDataURL(file);
            })
        });
    </script>
@endsection
