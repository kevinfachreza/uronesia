<div class="form-group">
    <div class="row">
        <div class="col-12">
            @foreach($options as $opsi)
            @php $active = 0 @endphp
            @php $value = slugify($opsi) @endphp
            <div class="form-check-inline">
                <label class="form-check-label form-check-label-yes-no 
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
                @endif 

                f">
                    <input type="radio" class="form-check-input form-check-input-yes-no " name="{{$name}}" value="{{$value}}" @if($active) checked @endif>{{$opsi}}
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>