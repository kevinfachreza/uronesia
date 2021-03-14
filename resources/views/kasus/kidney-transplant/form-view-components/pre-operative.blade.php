<div class="row">
    <div class="col-12">
        <h4 class="display-4">PRE OPERATIVE</h4>

        <h6 style="font-weight: 600" class="text-primary">RECEPIENT DATA</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">MEDICAL RECORD</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->recepient_pasien->no_rm ?? ''}}</td>
            </tr>
            <tr>
                <td>NAME</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->recepient_pasien->nama ?? ''}}</td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                @php $value = $kasus->operative_pre->recepient_pasien->jenis_kelamin ?? ''@endphp
                <td>{{$value == 'lk' ? 'Man' : 'Woman'}}</td>
            </tr>
            <tr>
                <td>AGE (Years)</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->recepient_pasien->age ?? ''}}</td>
            </tr>
            <tr>
                <td>HEIGHT (CM)</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->recepient_pasien_tb ?? ''}} cm</td>
            </tr>
            <tr>
                <td>WEIGHT (KG)</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->recepient_pasien_bb ?? ''}} kg</td>
            </tr>
        </table>

        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor Relationship</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->donor_relationship ?? ''}}</td>
            </tr>
        </table>
        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border">
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
                <td>Cardiac</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_cardiac ?? '')}}</td>
            </tr>
            <tr>
                <td>Stroke</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_stroke ?? '')}}</td>
            </tr>
            <tr>
                <td>Depression</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_depression ?? '')}}</td>
            </tr>
            <tr>
                <td>Renal</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_renal ?? '')}}</td>
            </tr>
            <tr>
                <td>TB</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_tb ?? '')}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_others ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Cardiac Functional (LVEF)</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Cardiac Functional (LVEF)</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->cardiac_functional ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Platelets</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_trombocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Ureum</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>Creatinine</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>Na</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k ?? ''}}</td>
            </tr>
            <tr>
                <td>Cl</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cl ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Culture</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Blood</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cult_blood ?? ''}}</td>
            </tr>
            <tr>
                <td>Urine</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cult_urine ?? ''}}</td>
            </tr>
            <tr>
                <td>Drain</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cult_drain ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Total Vessels Donor Ren Dextra</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Artery</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->vessels_donor_ren_dex_artery ?? ''}}</td>
            </tr>
            <tr>
                <td>Vein</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->vessels_donor_ren_dex_vein ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Total Vessels Donor Ren Sinistra</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Artery</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->vessels_donor_ren_sin_artery ?? ''}}</td>
            </tr>
            <tr>
                <td>Vein</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->vessels_donor_ren_sin_vein ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Radiology Result</h5>
            </div>
            @php 
                $files_title[] = 'CT';
                $files_title[] = 'MRI';
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor Renogram</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->donor_renogram ?? ''}}</td>
            </tr>
            <tr>
                <td>CKD Etiology</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->ckd_etiology ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h6 style="font-weight: 600" class="text-primary">HLA</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->hla_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hla_recipient ?? ''}}</td>
            </tr>
            <tr>
                <td>Result</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hla_result ?? ''}}</td>
            </tr>
            <tr>
                <td>Crossmatch</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hla_crossmatch ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">HCV</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->hcv_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hcv_recipient ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">CMV</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->cmv_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->cmv_recipient ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">HIV</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->hiv_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hiv_recipient ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">HbsAg</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->hbsag_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->hbsag_recipient ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Toxoplasma</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->toxoplasma_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->toxoplasma_recipient ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">IGRA</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->igra_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->igra_recipient ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>