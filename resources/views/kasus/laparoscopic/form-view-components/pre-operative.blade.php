<div class="row">
    <div class="col-12">
        <h4 class="display-4">PRE OPERATIVE</h4>
        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border">
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
                <td>Cardiac</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_cardiac == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Stroke</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_stroke == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Depression</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_depression == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Renal</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_renal == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>TB</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_tb == 1 ? 'Yes' : 'No'}}</td>
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
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border">
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
                <td>Tr</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}</td>
            </tr>
            <tr>
                <td>Ur</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>Cr</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
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
