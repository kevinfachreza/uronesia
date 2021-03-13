

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <h4 class="display-4">PRE OPERATIVE</h4>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Operation Date</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->tanggal_operasi}}</td>
            </tr>
            <tr>
                <td>Length Of Stay</td>
                <td>:</td>
                <td>{{$kasus->lama_perawatan_hari}} days</td>
            </tr>
            <tr>
                <td>Diagnosis Grade</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->diagnosis_grade ?? ''}}</td>
            </tr>
            <tr>
                <td>Etiology</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->etiology ?? ''}}</td>
            </tr>
            <tr>
                <td>Surgical History</td>
                <td>:</td>
                <td>{{$kasus->riwayat_operasi}}</td>
            </tr>
            <tr>
                <td>Case</td>
                <td>:</td>
                <td>{{$kasus->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">DM</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_dm ?? '')}}</td>
            </tr>
            <tr>
                <td>Hypertension</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_hypertension ?? '')}}</td>
            </tr>
            <tr>
                <td>Heart Disease</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_heart_stroke ?? '')}}</td>
            </tr>
            <tr>
                <td>Stroke</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_stroke ?? '')}}</td>
            </tr>
            <tr>
                <td>CKD</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_ckd ?? '')}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_others ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 style="font-weight: 600" class="text-primary">Laboratory Result</h6>

        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_l ?? ''}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>
