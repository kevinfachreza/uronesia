<div class="form-group">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-5 col-5">
            <label class="label">{{$label}}</label>
        </div>
        <div class="col-lg-10 col-md-8 col-sm-7 col-7">
            <span class="alert @if($default == 0 || empty($default)) alert-primary @else alert-secondary @endif  alert-sm">Tidak</span>
            <span class="alert alert-primary @if($default == 1) alert-primary @else alert-secondary @endif alert-sm">Ya</span>
        </div>
    </div>
</div>