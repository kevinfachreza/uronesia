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

                @if(!empty($default)) 
                    @if($default == $value)
                    @php $active = 1 @endphp
                    @endif
                @else
                @endif 

                <span class="alert @if($active == 1) alert-primary @else alert-secondary @endif
                alert-sm text-center">
                    <img src="{{$path}}/{{$opsi}}" height="100px" disabled><br>
                    {{$title}}
                </span>
               
            </div>
            @endforeach
        </div>
    </div>
</div>