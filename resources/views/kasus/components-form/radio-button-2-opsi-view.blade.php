<div class="form-group">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-5 col-5">
            <label class="label">{{$label}}</label>
        </div>
        <div class="col-lg-10 col-md-8 col-sm-7 col-7">
            @foreach($options as $opsi)
            @php $active = 0 @endphp
            @if($loop->first) @php $value = 0 @endphp  @else @php $value = 1 @endphp @endif

            @if(!empty($default)) 
                @if($default == $value)
                    @php $active = 1 @endphp
                @endif
            @else
                @if($loop->first) 
                    @php $active = 1 @endphp
                @endif
            @endif 


            <span class="alert alert-sm @if($active) alert-primary @else alert-secondary @endif">{{$opsi}}</span>
            @endforeach
        </div>
    </div>
</div>