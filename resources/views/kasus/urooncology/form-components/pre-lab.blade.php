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
                    <label class="label">L</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_l" value="{{$kasus->penunjang_lab_pre->lab_l ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">T</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_t" value="{{$kasus->penunjang_lab_pre->lab_t ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">LED</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_led" value="{{$kasus->penunjang_lab_pre->lab_led ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Diff Count</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_diff_count" value="{{$kasus->penunjang_lab_pre->lab_diff_count ?? ''}}">
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
                    <label class="label">Glucose N</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_glucose_n" value="{{$kasus->penunjang_lab_pre->lab_glucose_n ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Glucose PP</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_glucose_pp" value="{{$kasus->penunjang_lab_pre->lab_glucose_pp ?? ''}}">
                </div>
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">TUMOR MARKER</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Alkali Phospatase</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_alkali_phospatase" value="{{$kasus->penunjang_lab_pre->lab_alkali_phospatase ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">A Fetoprotein</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_a_fetoprotein" value="{{$kasus->penunjang_lab_pre->lab_a_fetoprotein ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">B HCG</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_b_hcg" value="{{$kasus->penunjang_lab_pre->lab_b_hcg ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">LDH</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ldh" value="{{$kasus->penunjang_lab_pre->lab_ldh ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">PSA</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_psa" value="{{$kasus->penunjang_lab_pre->lab_psa ?? ''}}">
                </div>
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">URINE</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urinalysis - Eritrocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_eritrosit" value="{{$kasus->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urinalysis - Leucocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_leukosit" value="{{$kasus->penunjang_lab_pre->lab_urine_leukosit ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Culture - Bacteria</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_bacteria" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Culture - Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_sensitive" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Culture - Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_resistance" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cytology - Class</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cytology_class" value="{{$kasus->penunjang_lab_pre->lab_cytology_class ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cytology - Grade</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cytology_grade" value="{{$kasus->penunjang_lab_pre->lab_cytology_grade ?? ''}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h5>Pathology Result</h5>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Pathology Results</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__pathology_results" value="{{$kasus->penunjang_lab_pre->pathology_results ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>