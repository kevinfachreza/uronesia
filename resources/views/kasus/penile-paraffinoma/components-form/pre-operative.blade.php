<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Operation Date</label>
            <input type="date" class="form-control" name="tanggal_operasi" value="{{$kasus->tanggal_operasi}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Length of Stay (days)</label>
            <input type="number" class="form-control" name="lama_perawatan_hari" value="{{$kasus->lama_perawatan_hari}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_pre->diagnosis_grade ?? '','label'=>'Diagnosis Grade','name'=>'pre_operative__diagnosis_grade','options' => ['1','2','3','4']])
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Etiology</label>
            <input type="text" class="form-control" name="pre_operative__etiology" value="{{$kasus->operative_pre->etiology ?? ''}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Surgical History</label>
            <input type="text" class="form-control" name="riwayat_operasi" value="{{$kasus->riwayat_operasi}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Case</label>
            <select class="form-control" name="is_kasus_baru">
                <option value="0" @if($kasus->is_kasus_baru == 0) selected @endif>Redo</option>
                <option value="1" @if($kasus->is_kasus_baru == 1) selected @endif>New</option>
            </select>
        </div>
    </div>

    <div class="col-12">
        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_dm ?? '','label'=>'DM','name'=>'pre_operative__comorbid_dm'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_hypertension ?? '','label'=>'Hypertension','name'=>'pre_operative__comorbid_hypertension'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_heart_stroke ?? '','label'=>'Heart Disease','name'=>'pre_operative__comorbid_heart_stroke'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_stroke ?? '','label'=>'Stroke','name'=>'pre_operative__comorbid_stroke'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_ckd ?? '','label'=>'CKD','name'=>'pre_operative__comorbid_ckd'])
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="label">Others Comorbid</label>
            <input type="text" class="form-control" name="pre_operative__comorbid_others" value="{{$kasus->operative_pre->comorbid_others ?? ''}}">
        </div>
    </div>
    
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h4>Laboratory Result</h4>
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
                    <label class="label">L</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_l" value="{{$kasus->penunjang_lab_pre->lab_l ?? ''}}">
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
        </div>
    </div>
</div>