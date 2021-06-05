<div class="form-group">
    <div class="row">
        @if($label != '')
        <div class="col-lg-2 col-md-4 col-sm-5 col-5">
            <label class="label">{{$label}}</label>
        </div>
        @endif
        <div class="col-lg-10 col-md-8 col-sm-7 col-7">
            @foreach($options as $index => $opsi)
            @php $active = 0 @endphp
            @php $value = $values[$index] @endphp
            @php $title = $titles[$index] @endphp
            <div class="form-check-inline mb-2">
                <label class="form-check-label form-check-label-yes-no text-center
                @if(!empty($default)) 
                    @if($default == $value)
                    @php $active = 1 @endphp
                    active 
                    @endif
                @else
                    @if($loop->first) 
                    @php $active = 1 @endphp
                    active 
                    @endif
                @endif ">
                    <input type="radio" class="form-check-input form-check-input-yes-no " name="{{$name}}" value="{{$value}}" @if($active) checked @endif>
                    <img src="{{$path}}/{{$opsi}}" height="100px"><br>
                    {{$title}}
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>