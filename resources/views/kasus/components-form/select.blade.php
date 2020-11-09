

<div class="col-12">
    <div class="form-group">
        <label class="label">{{$label}}</label>
        <select class="form-control" name="{{$name}}">
            @foreach($options as $option)
            <option value="{{slugify($option)}}" @if($default == slugify($option)) selected @endif>{{$option}}</option>
            @endforeach
        </select>
    </div>
</div>