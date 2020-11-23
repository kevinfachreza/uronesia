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
                    <label class="label">PSA</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_psa" value="{{$kasus->penunjang_lab_pre->lab_psa ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Clotting Time</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_clotting_time" value="{{$kasus->penunjang_lab_pre->lab_clotting_time ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Bleeding Time</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_bleeding_time" value="{{$kasus->penunjang_lab_pre->lab_bleeding_time ?? ''}}">
                </div>
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
                    <label class="label">Leu</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_leucocyte" value="{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">TR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_tr" value="{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}">
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


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">URINALYSIS</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">PH</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_ph" value="{{$kasus->penunjang_lab_pre->lab_urine_ph ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Specific Gravity</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_specific_gravity" value="{{$kasus->penunjang_lab_pre->lab_urine_specific_gravity ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Eritrosit</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_eritrosit" value="{{$kasus->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Leucocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_leukosit" value="{{$kasus->penunjang_lab_pre->lab_urine_leukosit ?? ''}}">
                </div>
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">URINE CULTURE</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Pathogen</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_pathogen" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_pathogen ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_sensitive" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_resistance" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">PATHOLOGY RESULT</h6>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Pathology Results</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__pathology_results" value="{{$kasus->penunjang_lab_pre->pathology_results ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>