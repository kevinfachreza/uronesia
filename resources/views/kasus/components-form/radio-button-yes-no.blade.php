<div class="form-group">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-5 col-5">
            <label class="label">{{$label}}</label>
        </div>
        <div class="col-lg-10 col-md-8 col-sm-7 col-7">
            <div class="form-check-inline">
                <label class="form-check-label form-check-label-yes-no 
                @if($default == 0 || empty($default)) active @endif">
                    <input type="radio" class="form-check-input form-check-input-yes-no " name="{{$name}}" @if($default == 0 || empty($default)) checked @endif value="0">Tidak
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label form-check-label-yes-no @if($default == 1) active @endif">
                    <input type="radio" class="form-check-input form-check-input-yes-no" name="{{$name}}" value="1" @if($default == 1) checked @endif >Ya
                </label>
            </div>
        </div>
    </div>
</div>