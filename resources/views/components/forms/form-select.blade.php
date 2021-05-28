<div class="col-md-12 input-group mb-2">
    <label for="{{$name}}" class="input-group-prepend pr-3 w-20 text-right">{{$label}}:&nbsp </label>
    <select id="{{$name}}" class="form-control" name="{{$name}}">
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {!! $option['value']==$value?'selected':'' !!}>{{ $option['text'] }}</option>
        @endforeach
    </select>
</div>
