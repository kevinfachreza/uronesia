<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Laboratory Result</h5>
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">BLOOD</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HB</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_hb" value="{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HT</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ht" value="{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Leucocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_leucocyte" value="{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Trombocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_trombocyte" value="{{$kasus->penunjang_lab_pre->lab_trombocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">UR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ur" value="{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">CR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cr" value="{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Na</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_na" value="{{$kasus->penunjang_lab_pre->lab_na ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">K</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_k" value="{{$kasus->penunjang_lab_pre->lab_k ?? ''}}">
                </div>
            </div>
            
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Bacteria</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_bacteria" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_sensitive" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_resistance" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>