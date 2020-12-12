
<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>
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
                <td>Diagnosis</td>
                <td>:</td>
                <td>{{$kasus->diagnosis ?? ''}}</td>
            </tr>
            <tr>
                <td>Surgical History</td>
                <td>:</td>
                <td>{{$kasus->riwayat_operasi}}</td>
            </tr>
            <tr>
                <td>Case</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_pre->case_type) ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">DM</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->comorbid_dm == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Hypertension</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_hypertension == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Heart Stroke</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_heart_stroke == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Stroke</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_stroke == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>CKD</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_ckd == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_others}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px"><strong class="text-primary">Laboratory Result</strong></td>
                <td style="width: 20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_l}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr}}</td>
            </tr>
            <tr>
                <td>Na</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k}}</td>
            </tr>
        </table>
    </div>
</div>



<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'USG';
                $files_title[] = 'BNO';
                $files_title[] = 'IVP';
                $files_title[] = 'CT';
                $files_title[] = 'MRI';

                $files_names[] = 'radiology-pre-usg'; 
                $files_names[] = 'radiology-pre-bno'; 
                $files_names[] = 'radiology-pre-ivp'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>
